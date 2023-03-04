<?php

session_start();
include "config.php";

  if (isset($_POST['submit'])) {

    $donar_id=$_POST['donar_id'];

    $blood_group = $_POST['blood_group'];

    $blood_component = $_POST['blood_component'];

    $process_date=date("Y/m/d");

    $expiry_date = $_POST['expiry_date'];
	
    $y= $_SESSION['MLT_ID'];

    $x = $_SESSION['Hospital_ID'];

    $sql= "INSERT INTO blood_components (donar_id,blood_group,blood_component,processed_date,expiry_date,MLT_ID,Hospital_ID) VALUES ('$donar_id','$blood_group','$blood_component','$process_date','$expiry_date','$y','$x')";
  
   $result = $conn->query($sql);

   if ($result == TRUE) {
    header('location:successbc.php');       
  } 
  else{
      echo "Error:". $sql . "<br>". $conn->error;
    }


    $conn->close(); 

  }



?>
