<?php
session_start();
require 'config.php';

if (isset($_POST['submit'])) {
    $oldpwd = $_POST['oldpwd'];
    $newpwd = $_POST['newpwd'];
    $confirmpwd = $_POST['confirmpwd'];

    // Check if new password matches confirm password
    if ($newpwd !== $confirmpwd) {
        $_SESSION['pwd-not-match'] = true;
        echo "<script>alert('Password Did Not Match'); window.location.href = 'password_change.php';</script>";
        exit();
    }

    // Open the database connection
    require 'conp.php';
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SELECT statement to get user information from the system_users table
    $stmt = $conn->prepare("SELECT Password FROM system_users WHERE User_ID = ?");
    $stmt->bind_param("i", $_SESSION['ID']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify if the old password is correct
        if ($oldpwd === $row['Password']) {
            // Prepare the UPDATE statement to change the password in the system_users table
            $stmt = $conn->prepare("UPDATE system_users SET Password = ? WHERE User_ID = ?");
            $stmt->bind_param("si", $newpwd, $_SESSION['ID']);
            $stmt->execute();

            if ($stmt->affected_rows == 1) {
                // Password updated in the system_users table

                // Prepare the UPDATE statement to change the password in the nurse table
                $stmt = $conn->prepare("UPDATE mlt SET Password = ? WHERE UserName = ?");
                $stmt->bind_param("ss", $newpwd, $_SESSION['Name']);
                $stmt->execute();

                if ($stmt->affected_rows == 1) {
                    // Password updated in both tables
                    $_SESSION['change-pwd'] = true;
                    echo "<script>alert('Password updated successfully.'); window.location.href = 'profile.php';</script>";
                    exit();
                } else {
                    // Password update failed in the nurse table
                    $_SESSION['change-pwd'] = false;
                    echo "<script>alert('Failed to update password.'); window.location.href = 'password_change.php';</script>";
                    exit();
                }
            } else {
                // Password update failed in the system_users table
                $_SESSION['change-pwd'] = false;
                echo "<script>alert('Failed to update password.'); window.location.href = 'password_change.php';</script>";
                exit();
            }
        } else {
            // Old password does not match
            $_SESSION['old-pwd-not-match'] = true;
            echo "<script>alert('Old password does not match.'); window.location.href = 'password_change.php';</script>";
            exit();
        }
    } else {
        // User not found
        $_SESSION['old-pwd-not-match'] = true;
        echo "<script>alert('User not found.'); window.location.href = 'password_change.php';</script>";
        exit();
    }
}
?>