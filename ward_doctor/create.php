<?php

session_start();
include "config.php";
if(isset($_SESSION["ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM warddoctor WHERE UserName ='$m'";
  $result1 = $conn->query($query);

   if($result1->num_rows > 0) {        
    while($row = $result1->fetch_assoc()) {
      $x = $row["WardDoctor_ID"];
    }
  }

  
}

		$vql="select * from warddoctor where WardDoctor_ID='$x'";	
		
		$resultr = $conn->query($vql);
		 
		//  echo "Error in ".$vql."<br>".$conn->error;
if($resultr->num_rows>0)

{        
    
   while($rowx = $resultr->fetch_assoc())
   
   {
       $y= $rowx["Hospital_ID"];

	}
}
  if (isset($_POST['submit'])) {


    $patient_name=$_POST['patient_name'];
    
    $date_Of_birth = ($_POST['date_Of_birth']) ;
    $today = date("Y-m-d");
    $diff = date_diff(date_create($date_Of_birth), date_create($today));
    $Age= $diff->format('%y');

    $patient_age = '$Age';

    $patient_gender = $_POST['patient_gender'];

    $blood_group = $_POST['blood_group'];

    $blood_component =$_POST['blood_component'];

    $required_amount = $_POST['required_amount'];

    $expected_date = $_POST['expected_date'];

    $reason = $_POST['reason'];

    $ward_number =$_POST['ward_number'];

    $remark = $_POST['remark'];

    $requested_date=date("Y/m/d");


    $vql = "SELECT * FROM warddoctor"; 
    $result = $conn->query($vql);
   
    
    $status= ("Pending");

    $sql= "INSERT INTO blood_request (patient_name, date_Of_birth, patient_age, patient_gender, blood_group, blood_component,required_amount,expected_date,requested_date,reason,ward_number,remark,status,Hospital_ID,WardDoctor_ID) VALUES ('$patient_name',' $date_Of_birth','$Age','$patient_gender', '$blood_group','$blood_component','$required_amount','$expected_date','$requested_date','$reason','$ward_number','$remark','$status','$y','$x')";
  
   $result = $conn->query($sql);

   if ($result == TRUE) {
    header('location:success.php');       
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
