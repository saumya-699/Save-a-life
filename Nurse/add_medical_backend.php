
<?php 
session_start();

?>

<?php

//make connection here
require 'conection.php'; 

if(isset($_POST['BtnSubmit']))
{
  
    $Donor_ID=$_POST["Donor_ID"];
    $Weight=$_POST["Weight"];
    $Height=$_POST["Height"];
	$Blood_Pressure=$_POST["Blood_Pressure"];
	$Hemoglobine=$_POST["Hemoglobine"];
	
    
    //database connection

        $sql = "INSERT INTO pre_medical (Donor_ID,Weight,Height,Blood_Pressure,Hemoglobine)
VALUES ('$Donor_ID','$Weight','$Height','$Blood_Pressure','$Hemoglobine')";

if($conn->query($sql)){
      
	echo '<script type="text/javascript">';	 
	echo 'alert("Registration is successfully");';
         
	
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


 
