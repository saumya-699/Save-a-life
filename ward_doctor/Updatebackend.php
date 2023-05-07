<?php 

session_start();
include "config.php";

//print_r($_POST);die();
if (!empty($_POST)) {

    
    $patient_name=$_POST['patient_name'];
    
    $date_of_birth = ($_POST['date_of_birth']) ;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($date_of_birth), date_create($today));
    $Age= $diff->format('%y');
    $patient_age = $Age;

    $patient_gender = $_POST['patient_gender'];

    $blood_group = $_POST['blood_group'];

    $blood_component =$_POST['blood_component'];

    $required_amount = $_POST['required_amount'];

    $expected_date = $_POST['expected_date'];

    $reason = $_POST['reason'];

    $ward_number =$_POST['ward_number'];

    $remark = $_POST['remark'];

    $requested_date=date("Y/m/d");

    $y= $_SESSION['WardDoctor_ID'];
     
    $x=$_SESSION['Hospital_ID'];
   
	$userid=$_POST['user_id'];

    $status= $_POST['status'];

    $sql = "UPDATE blood_request SET patient_name='$patient_name',date_Of_birth='$date_of_birth',patient_age='$Age',patient_gender ='$patient_gender', blood_group='$blood_group',blood_component='$blood_component',required_amount='$required_amount',expected_date='$expected_date', reason='$reason',ward_number='$ward_number',remark='$remark',WardDoctor_ID='$y',Hospital_ID='$x',requested_date='$requested_date' WHERE requeste_id='$userid'";

   // print_r($result);die();
   $result = $conn->query($sql);
   
   if ($result == TRUE) {
            header('location:updatesuccess.php');       
           

        }else{
            

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    }
