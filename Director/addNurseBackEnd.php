
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
    $position=$_POST["position"];
	$DOB=$_POST["DOB"];
	$SLMC=$_POST["SLMC"];
	$Email=$_POST["Email"];
	$contactNumber=$_POST["contactNumber"];
	$DOA=$_POST["DOA"];
	$Uname=$_POST["Uname"];
	$password=$_POST["password"];
	$m= $_SESSION["Name"];

	 $check1= "select * from system_users where UserName ='$Email'";
	 $resultc1 = $conn->query($check1);
	 if(!empty($resultc1) && $resultc1->num_rows>0)

	 {


		echo '<script type="text/javascript">';
		echo 'alert("Email already exists");';
		
		 echo 'window.location.href="addNurseI.php";';
		echo '</script>';



	 }

    
    /* $resultc1 = $conn->query($check1);
     
	  
  if(!empty($resultc1) && $resultc1->num_rows>0)

{        
	echo '<script type="text/javascript">';
	echo 'alert("Email already exists");';
	
	 echo 'window.location.href="addNurseI.php";';
	echo '</script>';
 }
 else 
 
   {
	
	$check2= "select * from bloodbank_doctor where Email ='$Email'";
	$resultc2 = $conn->query($check2);

	if(!empty($resultc2) && $resultc2->num_rows>0)

	{        
	   	
		echo '<script type="text/javascript">';
		echo 'alert("Email number already");';
		
		 echo 'window.location.href="addNurseI.php";';
		echo '</script>';
	 }
	 else {
	
	    
		$check3= "select * from warddoctor where Email ='$Email'";
		$resultc3 = $conn->query($check3);
		if(!empty($resultc3) && $resultc3->num_rows>0)

		{        
				
			echo '<script type="text/javascript">';
			echo 'alert("Email number already");';
			
			 echo 'window.location.href="addNurseI.php";';
			echo '</script>';
		 }
		 else {
		
		
			$check4= "select * from MLT where Email ='$Email'";
			$resultc4 = $conn->query($check4);
			if(!empty($resultc4) && $resultc4->num_rows>0)

			{       	
				echo '<script type="text/javascript">';
	echo 'alert("Email already exists4");';
	
	 echo 'window.location.href="addNurseI.php";';
	echo '</script>';
			  
			 }
			 else {
			
			
				$check5= "select * from nurse where Email ='$Email'";
				$resultc5 = $conn->query($check5);
				if(!empty($resultc5) && $resultc5->num_rows>0)

			{        
				
				echo '<script type="text/javascript">';
	echo 'alert("Email already exists5");';
	
	 echo 'window.location.href="addNurseI.php";';
	echo '</script>';

			 }*/
			
			   else
			   {


			           
				//echo '<script type="text/javascript">';
				//echo 'alert("NIC number already exists5");';
				
				 //echo 'window.location.href="addNurseI.php";';
				//echo '</script>';


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
	
	 echo 'window.location.href="addNurseI.php";';
	echo '</script>';

 
 
 
}
else
{
	
	  
	echo '<script type="text/javascript">';
	  echo "Error in ".$jql."<br>".$conn->error;
   
	echo 'alert("Error in entering try again!");';

	echo '</script>';
	 

	
}

    $sql="insert into nurse(Nurse_ID,Name_With_Initials,Hospital_ID,HospitalName,Position,DOB,SLMC_Number,Email,ContactNumber,Date_of_appoinment,UserName,Password,Remark,Director_ID)VALUES(' ','$Name','$y','$HName','$position','$DOB','$SLMC','$Email','$contactNumber','$DOA','$Uname','md5($password)','Added','$x')";
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
	 
		  
			   }  
			
			}  
		
	
 







	
 
  // echo "Error in ".$sql."<br>".$conn->error;
 
 
	

 
$conn->close();

?>