
<?php 
session_start();

?>

<?php

//make connection here
require 'conection.php'; 

if(isset($_POST['BtnSubmit']))
{
  
    $Donor_Id=$_POST["donorid"];
    $Weight=$_POST["weight"];
    $Height=$_POST["height"];
	$Blood_Group = $_POST["blood"];
	$Blood_Pressure=$_POST["bpressure"];
	$Hemoglobine=$_POST["hemoglobine"];
	
    
    //database connection

        $sql = "INSERT INTO pre_medical (Donor_Id,Weight,Height,Blood_Group,Blood_Pressure,Hemoglobine)
VALUES ('$Donor_Id','$Weight','$Height','$Blood_Group','$Blood_Pressure','$Hemoglobine')";

if($conn->query($sql)){
      
	echo '<script type="text/javascript">';	 
	echo 'alert("Added successfully");';
         
	
		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		   echo "Error in ".$sql."<br>".$conn->error;
		
		// echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 
 
 //  echo "Error in ".$sql."<br>".$conn->error;
 
 
	
}
 
$conn->close();

?>


 
