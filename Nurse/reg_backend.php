<?php 
session_start();

// make connection here
require 'conp.php';
if (isset($_POST['BtnSubmit'])) {

    
        $NIC = $_POST["NIC"];
    
        // Check if the NIC number already exists in the donors table
        $nsql = "SELECT * FROM donors WHERE NIC_Number = '$NIC'";
        $nsql = $conn->query($nsql);
        
        if ($nsql->num_rows > 0) {
            // Display an alert message if the NIC number already exists
            echo '<script type="text/javascript">';
            echo 'alert("This donor already exists!");';
            echo 'window.location.href="reg.php";';
            echo '</script>';
            exit; // Stop execution if the NIC number exists
        }


        $username = $_POST["username"];
    
        // Check if the NIC number already exists in the donors table
        $esql = "SELECT * FROM donors WHERE Email = '$username'";
        $esql = $conn->query($esql);
        
        if ($esql->num_rows > 0) {
            // Display an alert message if the NIC number already exists
            echo '<script type="text/javascript">';
            echo 'alert("This username already exists!");';
            echo 'window.location.href="reg.php";';
            echo '</script>';
            exit; // Stop execution if the NIC number exists
        }
    

    $date = date("Y/m/d");
    $Prefix = $_POST["prefix"];
    $Fullname = $_POST["fullname"];
    $Initial = $_POST["Initials"];
    $NIC = $_POST["NIC"];
    $DOB = $_POST["DOB"];
    $Email = $_POST["email"];
    $Gender = $_POST["gender"];
    $Address = $_POST["address"];
    $province = $_POST["province"];
    $postal = $_POST["postal"];
    $mobile_number = $_POST["mobile"];
    $land_number = $_POST["land"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $Type = 6;

    // insert the user into the database.
    $jql = "INSERT INTO system_users(User_ID, UserName, Password, Type) VALUES('', '$username', '$password', 6)";
    if ($conn->query($jql)) {
        $sql = "INSERT INTO donors (Prefix, Full_Name, Initials, NIC_Number, DOB, Email, Gender, Address, province, postal, mobile_number, land_number, username, password, date, Remark) 
                VALUES ('$Prefix', '$Fullname', '$Initial', '$NIC', '$DOB', '$Email', '$Gender', '$Address', '$province', '$postal', '$mobile_number', '$land_number', '$username', '$password', '$date', 'Added')";
        if ($conn->query($sql)) {
            echo '<script type="text/javascript">';
            echo 'alert("Registration is successful");';
            echo 'window.location.href="reg.php";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo "Error in " . $sql . "<br>" . $conn->error;
            echo 'alert("Error in entering try again!");';
            echo 'window.location.href="reg.php";';
            echo '</script>';
        }
    }

    $conn->close();
}
?>
