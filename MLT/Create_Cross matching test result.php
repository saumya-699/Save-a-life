<?php

session_start();
include "config.php";

  if (isset($_POST['submit'])) {

    $request_id=$_POST['request_id'];

    $blood_group = $_POST['blood_group'];

    $test_result = $_POST['Cross_matching_test_result'];

    $process_date=date("Y/m/d");
	
    $x = $_SESSION['Hospital_ID'];

    $y= $_SESSION['MLT_ID'];

    $sql= "INSERT INTO cross_matching_testing_result (request_id, blood_group, test_result ,process_date,MLT_ID,Hospital_ID) VALUES ('$request_id','$blood_group','$test_result','$process_date','$y','$x')";
  
   $result = $conn->query($sql);

   if ($result == TRUE) {
    header('location:successbloodcmresult.php');       
  } 
  else{
      echo "Error:". $sql . "<br>". $conn->error;
    }


    $conn->close(); 

  }



?>
