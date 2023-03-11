
<?php 
session_start();

?>

<?php

require 'conp.php';            //make connection here
if(isset($_POST['BtnSubmit']))
{
  //here getting result from the post array after submitting the form.
    $Name=$_POST["Name"];
	$NIC=$_POST["NIC"];
	
    $HName=$_POST["hospital"];  
    $position=$_POST["position"];
	$DOB=$_POST["DOB"];
	$SLMC=$_POST["SLMC"];
	$Email=$_POST["Email"];
	$contactNumber=$_POST["contactNumber"];
	$DOA=$_POST["DOA"];
	$Uname=$_POST["Uname"];
	$password=$_POST["password"];
    $x= $_SESSION["ID"];
     			
		$vql="select *from hospital where HospitalName='$HName'";	
		
		$result = $conn->query($vql);
		 
		//  echo "Error in ".$vql."<br>".$conn->error;

if($result->num_rows>0)

{        
    
   while($row = $result->fetch_assoc())
   
   {
	    


	   
       $y= $row["Hospital_ID"];
	 
	
	

	  
	}
	
      
}	


//insert the user into the database.
$jql="insert into system_users(User_ID,UserName,Password,Type)VALUES('','$Uname','$password',4)";
if($conn->query($jql))
{
 
	echo '<script type="text/javascript">';
	echo 'alert("user successfully");';
	
	 echo 'window.location.href="AddNurseI.php";';
	echo '</script>';

 
 
 
}
else
{
	
	  
	echo '<script type="text/javascript">';
	  echo "Error in ".$jql."<br>".$conn->error;
   
	echo 'alert("Error in entering try again!");';

	echo '</script>';
	 

	
}
    $sql="insert into system_users(Nurse_ID,Name_With_Initials,NIC,Hospital_ID,HospitalName,Position,DOB,SLMC_Number,Email,ContactNumber,Date_of_appoinment,UserName,Password,Remark,Director_ID)VALUES(' ','$Name','$NIC','$y','$HName','$position','$DOB','$SLMC','$Email','$contactNumber','$DOA','$Uname','md5($password)','Added','$x')";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("Added successfully");';
         
	     echo 'window.location.href="AddNurseI.php";';
		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		   echo "Error in ".$sql."<br>".$conn->error;
		
		 echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 
 
  // echo "Error in ".$sql."<br>".$conn->error;
 
 
	
}
 
$conn->close();

?>