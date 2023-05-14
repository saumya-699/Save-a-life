<?php
    // Start session
    session_start();

    // Check if user is logged in
    if (!isset($_SESSION["ID"])) {
        // Redirect to login page if user is not logged in
        header("Location: ../loginT.php");
        exit();
    }

    // Check if the session variable is set
    if (!isset($_SESSION['Name'])) {
        echo "Session variable not set";
        exit();
    }

    // Connect to the database
    require 'config.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the updated contact number, email, and address from the form
    
    $name = $_POST['Name'];
    $contact = $_POST['Contact'];
    $email = $_POST['Email'];

    // Get the nurse's username from the session 
    $username = $_SESSION['Name'];

    // Update the nurse's contact number, email, and address in the database
    $sql = "UPDATE warddoctor SET Name_With_Initials = '$name', ContactNumber = '$contact', Email = '$email' WHERE UserName = '$username'";

    if ($conn->query($sql) === TRUE) {
        // Generate JavaScript popup message for success
        echo '<script>alert("Profile updated successfully."); window.location.href = "update.php";</script>';
        exit();
    } else {
        // Generate JavaScript popup message for error
        echo '<script>alert("Error updating profile: ' . $conn->error . '"); window.location.href = "update.php";</script>';
        exit();
    }

    $conn->close();
?>
