
<?php 
session_start();

?>

<?php

require 'conp.php';            //make connection here
if(isset($_POST['BtnSubmit']))
{
  //here getting result from the post array after submitting the form.
    $Name=$_POST["Name"];
    $HName=$_POST["hospital"];
    $Specialization=$_POST["Specialization"];
	$SLMC=$_POST["SLMC"];
	$Email=$_POST["Email"];
	$contactNumber=$_POST["contactNumber"];
	$Uname=$_POST["Uname"];
	$password=$_POST["password"];
    $x= $_SESSION["ID"];
     			
		$vql="select *from hospital where HospitalName='$HName'";	
		
		$result = $conn->query($vql);
		
		  //echo "Error in ".$vql."<br>".$conn->error;

if($result->num_rows>0)

{        
    
   while($row = $result->fetch_assoc())
   
   {
	    


	 
       $y= $row["Hospital_ID"];
	 
	
	

	  
	}
	
      
}	


//insert the user into the database.
    $sql="insert into warddoctor(WardDoctor_ID,Name_With_Initials,Hospital_ID,HospitalName,Specialization,SLMC_Number,Email,ContactNumber,UserName,Password,Remark,Director_ID)VALUES(' ','$Name','$y','$HName','$Specialization','$SLMC','$Email','$contactNumber','$Uname','$password','Added','$x')";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("Added successfully");';
         echo 'window.location.href="HomepageDirector.php";';
	
		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		   //echo "Error in ".$sql."<br>".$conn->error;
		
		// echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 
 
 //  echo "Error in ".$sql."<br>".$conn->error;
 
 
	
}
 
$conn->close();

?>