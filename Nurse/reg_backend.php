
<?php 
session_start();

?>

<?php

//make connection here
require 'conection.php'; 

if(isset($_POST['BtnSubmit']))
{
  
    $Prefix=$_POST["prefix"];
    $Fullname=$_POST["fullname"];
	$Initial=$_POST["Initials"];
	$NIC=$_POST["NIC"];
	$DOB=$_POST["DOB"];
	$Email=$_POST["email"];
	$Gender=$_POST["gender"];
	$Address= $_POST["address"];
	$province= $_POST["province"];
	$postal= $_POST["postal"];
	$mobile_number=$_POST["mobile"];
	$land_number=$_POST["land"];
	$username = $_POST["username"];
	$password = $_["password"];
    
   
    
    
    //database connection

        $sql = "INSERT INTO donors (Prefix,Full_Name,Initials,NIC_Number,DOB,Email,Gender,Address,province,postal,mobile_number,land_number,username,password)
VALUES ('$Prefix','$Fullname','$Initial','$NIC','$DOB','$Email','$Gender','$Address','$province','$postal','$mobile_number','$land_number','$username','$password')";

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


 
