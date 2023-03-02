<?php

session_start();
include "config.php";

  if (isset($_POST['submit'])) {


    $donar_id = $_POST['donar_id'];

    $blood_group = $_POST['blood_group'];

    $malaria_result =$_POST['malaria_result'];

    $hiv_result = $_POST['hiv_result'];

    $hbv_result = $_POST['hbv_result'];

    $hcv_result = $_POST['hcv_result'];

    $vdrl_result =$_POST['vdrl_result'];

    $batch_number = $_POST['batch_number'];

    $process_date=date("Y/m/d");
	
    $status= ("Pending");

    $x = $_SESSION['Hospital_ID'];

    $y= $_SESSION['MLT_ID'];

    $sql= "INSERT INTO blood_testing_result (test_result_id, donar_id, blood_group, malaria_result, hiv_result, hbv_result,hcv_result,vdrl_result,batch_number,process_date,status,MLT_ID,Hospital_ID) VALUES ('$test_result_id',' $donation_id','$blood_group','$malaria_result', '$hiv_result','$hbv_result','$hcv_result','$vdrl_result','$batch_number','$process_date','$status','$y','$x')";
  
   $result = $conn->query($sql);

   if ($result == TRUE) {
    header('location:successbloodresult.php');       
  } 
  else{
      echo "Error:". $sql . "<br>". $conn->error;
    }


    $conn->close(); 

  }



 /* 
echo $patient_gender;
echo $blood_group;
echo $blood_component ;
echo "sucess:";
*/
?>
