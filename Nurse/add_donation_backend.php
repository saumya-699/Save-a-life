
<?php 
session_start();

?>

<?php

//make connection here
require 'conection.php'; 

if(isset($_POST['BtnSubmit']))
{
  
    $Donation_Date=date("Y-m-d");
	$Batch_No=$_POST["batch_no"];
	$Donor_Id=$_POST["Donor_Id"];
	$Packet_Id=$_POST["Packet_Id"];
	$P_Quantity=$_POST["packet_quantity"];
	$Nurse_ID=$_POST["Nurse_ID"];
	
   
    
    
    //database connection


$sql = "INSERT INTO donation (Donation_date,Batch,Donor_Id,packet_no,packet_quantity,Nurse_ID)
VALUES ('Donation_Date','$Batch_No','$Donor_Id','$Packet_Id','$P_Quantity','$Nurse_ID')";

if($conn->query($sql)){
      
	echo '<script type="text/javascript">';	 
	echo 'alert("Registration is successfully");';
	echo 'window.location.href="add_donation.php";';
	echo '</script>';    
	

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		echo "Error in ".$sql."<br>".$conn->error;
		echo 'alert("Error in entering try again!");';
		echo 'window.location.href="add_donation.php";';
		echo '</script>';

 
		 
	 }
	 
 
 //  echo "Error in ".$sql."<br>".$conn->error;
 
 
	
}
 
$conn->close();

?>


 
