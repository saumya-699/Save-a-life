<?php 

session_start();
include "config.php";
if (isset($_POST['update'])) {


    $patient_name=$_POST['patient_name'];

    $patient_gender = $_POST['patient_gender'];

    $blood_group = $_POST['blood_group'];

    $blood_component =$_POST['bood_component'];

    $required_amount = $_POST['required_amount'];

    $expected_date = $_POST['expected_date'];

    $reason = $_POST['reason'];

    $ward_number =$_POST['ward_number'];

    $remark = $_POST['remark'];

	$userid=$_POST['user_id'];
    $status= $_POST['status'];

    $sql = "UPDATE blood_request SET patient_name='$patient_name',patient_gender ='$patient_gender', blood_group='$blood_group',blood_component='$blood_component',required_amount='$required_amount', expected_date='$expected_date',reason='$reason',ward_number='$ward_number',remark='$remark' WHERE requeste_id='$userid'";

   $result = $conn->query($sql);
        if ($result == TRUE) {

            echo "Record updated successfully.";
           

        }else{
            

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 



    ?>