<?php

    // Check if user is logged in
    if (!isset($_SESSION["ID"])) {
        //header("Location: ../loginT.php"); // Redirect to login page if user is not logged in
        exit();
    }

    // Check if the session variable is set
	if (!isset($_SESSION['Name'])) {
		echo "Session variable not set";
		exit();
	}

    //connect with db
    require 'config.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user information
    $username = $_SESSION['Name'];
    $sql = "SELECT * FROM warddoctor WHERE UserName = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $name = $row['Name_With_Initials'];
        $slmc = $row['SLMC_Number'];
        $hospital = $row['HospitalName'];
        $contact = $row['ContactNumber'];
        $email = $row['Email'];
        $apponitmentdate = $row['AppointmentDate'];
        $username = $row['UserName'];
    }

    $conn->close();
?>