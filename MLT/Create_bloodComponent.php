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

    $Blood_bagID=$_POST['Blood_bagID'];

    $blood_group = $_POST['blood_group'];

    $blood_component = $_POST['blood_component'];

    $process_date=date("Y/m/d");

    $expiry_date = $_POST['expiry_date'];

    $sql= "INSERT INTO stock (Blood_bagID,blood_group,Component_type,ExpiryDate,MLT_ID,Hospital_ID) VALUES ('$Blood_bagID','$blood_group','$blood_component','$expiry_date','$x','$y')";
  
   $result = $conn->query($sql);

   if ($result == TRUE) {
    header('location:successbc.php');       
  } 
  else{
      echo "Error:". $sql . "<br>". $conn->error;
    }


    $conn->close(); 

  }

  if (isset($_POST['cancel'])){
      header('location:Add blood components.php');        
  }
