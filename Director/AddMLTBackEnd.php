
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
	$SLMC=$_POST["SLMC"];
	$Email=$_POST["Email"];
	$contactNumber=$_POST["contactNumber"];
	$Uname=$_POST["Uname"];
	$password=$_POST["password"];
	$m= $_SESSION["Name"];


	$query = "select * from director where UserName ='$m'";


   		
		$resultd = $conn->query($query);
		
		//echo "Error in ".$vql."<br>".$conn->error;

if($resultd->num_rows>0)

{        
  
 while($row = $resultd->fetch_assoc())
 
 {
	  


   
	 $x= $row["Director_ID"];
   
  
  

	
  }
  
	
}	


     			
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

$Type=2;
//insert the user into the database.
$jql="insert into system_users(User_ID,UserName,Password,Type)VALUES('','$Uname','$password',2)";


if($conn->query($jql))
{
 
	echo '<script type="text/javascript">';
	echo 'alert("user successfully");';
	
	 echo 'window.location.href="AddMLTI.php";';
	echo '</script>';

 
 
 
}
else
{
	
	  
	echo '<script type="text/javascript">';
	  echo "Error in ".$jql."<br>".$conn->error;
   
	echo 'alert("Error in entering try again!");';

	echo '</script>';
	 

	
}

    $sql="insert into MLT(MLT_ID,Name_With_Initials,Hospital_ID,HospitalName,SLMC_Number,Email,ContactNumber,UserName,Password,Remark,Director_ID)VALUES(' ','$Name','$y','$HName','$SLMC','$Email','$contactNumber','$Uname','$password','Added','$x')";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("Added successfully");';
         
	      echo 'window.location.href="AddMLTI.php";';
		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		   echo "Error in ".$sql."<br>".$conn->error;
		
		 echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 
 
 //  echo "Error in ".$sql."<br>".$conn->error;
 
 
	
}
 
$conn->close();

?>