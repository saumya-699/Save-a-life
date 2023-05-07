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

    // $Blood_bagID=$_POST['Blood_bagID'];

    $blood_group = $_POST['blood_group'];

    //$blood_component = $_POST['blood_component'];
    $process_date = date("Y/m/d");

    $testid=$_POST['testid'];
    

    if ( $_POST['Red_cell'] == '1') {
      $expiry_date = date("Y/m/d", strtotime("+120 days"));
      $blood_component="Red cell";

      $sql= "INSERT INTO stock (blood_group,Component_type,ExpiryDate,ProcessDate,MLT_ID,Hospital_ID) VALUES ('$blood_group','$blood_component','$expiry_date','$process_date' ,'$x','$y')";
  
      $result = $conn->query($sql);
   
      if ($result == TRUE) {
       header('location:successbc.php');       
     } 
     else{
         echo "Error:". $sql . "<br>". $conn->error;
       }
      
    } 


    if ( $_POST['Platelet'] == '1') {
      $expiry_date = date("Y/m/d", strtotime("+90 days"));
      $blood_component="Platelet";

      $sql= "INSERT INTO stock (blood_group,Component_type,ExpiryDate,ProcessDate,MLT_ID,Hospital_ID) VALUES ('$blood_group','$blood_component','$expiry_date',$process_date,'$x','$y')";
  
      $result = $conn->query($sql);
   
      if ($result == TRUE) {
       header('location:successbc.php');       
     } 
     else{
         echo "Error:". $sql . "<br>". $conn->error;
       }    } 
    if ( $_POST['Plasma'] == '1') {
      $expiry_date = date("Y/m/d", strtotime("+60 days"));
      $blood_component="Plasma";

      $sql= "INSERT INTO stock (blood_group,Component_type,ExpiryDate,ProcessDate,MLT_ID,Hospital_ID) VALUES ('$blood_group','$blood_component','$expiry_date',$process_date,'$x','$y')";
  
      $result = $conn->query($sql);
   
      if ($result == TRUE) {
       header('location:successbc.php');       
     } 
     else{
         echo "Error:". $sql . "<br>". $conn->error;
       }    } 


    $updateSql= "UPDATE blood_testing_result SET AddStatus	='1' WHERE test_result_id= $testid";
    $updateresult = $conn->query($updateSql);

    // if ($updateresult == TRUE) { 
    //    header('location:successbc.php');       
    //  } 
    // else{
    //      echo "Error:". $sql . "<br>". $conn->error;
    //    }    
    

    $conn->close(); 

  }

  if (isset($_POST['cancel'])){
      header('location:Add blood components.php');        
  }
