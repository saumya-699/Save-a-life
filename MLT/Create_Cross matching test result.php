<?php

session_start();
include "config.php";
if(isset($_SESSION["ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM mlt WHERE UserName ='$m'";
  $result1 = $conn->query($query);

   if($result1->num_rows > 0) {        
    while($row = $result1->fetch_assoc()) {
      $x = $row["MLT_ID"];
    }
  }

  
}

		$vql="select * from mlt where MLT_ID='$x'";	
		
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

    $request_id=$_POST['request_id'];

    $blood_group = $_POST['blood_group'];

    $test_result = $_POST['Cross_matching_test_result'];

    $process_date=date("Y/m/d");
	

    $sql= "INSERT INTO cross_matching_testing_result (request_id, blood_group, test_result ,process_date,MLT_ID,Hospital_ID) VALUES ('$request_id','$blood_group','$test_result','$process_date','$x','$y')";
  
   $result = $conn->query($sql);

   if ($result == TRUE) {
    header('location:successbloodcmresult.php');       
  } 
  else{
      echo "Error:". $sql . "<br>". $conn->error;
    }


    $conn->close(); 

  }

  if (isset($_POST['cancel'])){
    header('location:Cross matching test result.php');        
}

?>
