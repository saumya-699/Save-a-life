
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
	$m= $_SESSION["Name"];

	 $check1= "select * from director where NIC ='$NIC'";

    
     $resultc1 = $conn->query($check1);
     
	  
  if(!empty($resultc1) && $resultc1->num_rows>0)

{        
	echo '<script type="text/javascript">';
	echo 'alert("NIC number already exists1");';
	
	 echo 'window.location.href="addNurseI.php";';
	echo '</script>';
 }
 else 
 
   {
	
	$check2= "select * from bloodbank_doctor where NIC ='$NIC'";
	$resultc2 = $conn->query($check2);

	if(!empty($resultc2) && $resultc2->num_rows>0)

	{        
	   	
		echo '<script type="text/javascript">';
		echo 'alert("NIC number already exists2");';
		
		 echo 'window.location.href="addNurseI.php";';
		echo '</script>';
	 }
	 else {
	
	    
		$check3= "select * from warddoctor where NIC ='$NIC'";
		$resultc3 = $conn->query($check3);
		if(!empty($resultc3) && $resultc3->num_rows>0)

		{        
				
			echo '<script type="text/javascript">';
			echo 'alert("NIC number already exists3");';
			
			 echo 'window.location.href="addNurseI.php";';
			echo '</script>';
		 }
		 else {
		
		
			$check4= "select * from MLT where NIC ='$NIC'";
			$resultc4 = $conn->query($check4);
			if(!empty($resultc4) && $resultc4->num_rows>0)

			{       	
				echo '<script type="text/javascript">';
	echo 'alert("NIC number already exists4");';
	
	 echo 'window.location.href="addNurseI.php";';
	echo '</script>';
			  
			 }
			 else {
			
			
				$check5= "select * from nurse where NIC ='$NIC'";
				$resultc5 = $conn->query($check5);
				if(!empty($resultc5) && $resultc5->num_rows>0)

			{        
				
				echo '<script type="text/javascript">';
	echo 'alert("NIC number already exists5");';
	
	 echo 'window.location.href="addNurseI.php";';
	echo '</script>';

			 }
			
			   else
			   {


			           
				echo '<script type="text/javascript">';
				//echo 'alert("NIC number already exists5");';
				
				 echo 'window.location.href="addNurseI.php";';
				echo '</script>';
		  
			   }  
			
			} 
		
		} 
	
	}



   }
 







	
 
  // echo "Error in ".$sql."<br>".$conn->error;
 
 
	
}
 
$conn->close();

?>