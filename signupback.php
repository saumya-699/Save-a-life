
<?php 
session_start();

?>

<?php

require 'conp.php';            //make connection here
if(isset($_POST['BtnSubmit']))
{
  //here getting result from the post array after submitting the form.
    $Name=$_POST["Name"];
	$Email=$_POST["Email"];
	$contactNumber=$_POST["contactNumber"];
	$Uname=$_POST["Uname"];
	$password=$_POST["password"];
    //$x= $_SESSION["ID"];
     			
		//$vql="select *from hospital where HospitalName='$HName'";	
		
		//$result = $conn->query($vql);
		
		  //echo "Error in ".$vql."<br>".$conn->error;




//insert the user into the database.
    $sql="insert into director(Director_ID,Name_With_Initials,Email,ContactNumber,UserName,Password,Remark)VALUES(' ','$Name','$Email','$contactNumber','$Uname','$password','Signed up')";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("Registered successfully");';
         
	echo 'window.location.href="HomepageDirector.php";';
		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		   echo "Error in ".$sql."<br>".$conn->error;
		
		// echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 
 
 echo "Error in ".$sql."<br>".$conn->error;
 
 
	
}
 
$conn->close();

?>