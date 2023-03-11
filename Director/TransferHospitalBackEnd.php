

<?php 
session_start();

?>

    

<?php

require 'conp.php';            //make connection here
if(isset($_POST['BtnSubmit']))
{
  //here getting result from the post array after submitting the form.
    
	$Hospital_ID=  $_POST["Hospital_ID"];
    $HName=$_POST["HName"];
	$Transfer=$_POST["Transfer"];
	$TransferBy=$_POST["TransferBy"];
	$date=$_POST["date"];
	$m= $_SESSION["Name"];


	$query = "select * from director where UserName ='$m'";


   		
		$resultd = $conn->query($query);
		
		//echo "Error in ".$vql."<br>".$conn->error;

if($resultd->num_rows>0)

{        
  
 while($row = $resultd->fetch_assoc())
 
 {
	  


   
	 $x= $row["Name_With_Initials"];
   
  
  

	
  }
  
	
}	
     			
			
  $mql="update hospital set Remark='Non-functioning',Director_ID='$x+1' WHERE Hospital_ID='$Hospital_ID'";
  
  if($conn->query($mql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("updated successfully");';
          echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

		 echo '</script>';

	  
	  
	  
     }
//insert the user into the database.
    $sql="insert into transferdetails(Transfer_ID,Hospital_ID,HospitalName,Transfered_to,Transfered_By,Date)VALUES('','$Hospital_ID','$HName','$Transfer','$TransferBy','$date')";
	$vql="update nurse set Remark='Removed' where Hospital_ID ='$Hospital_ID'";
	$cql="update mlt set Remark='Removed' where Hospital_ID = '$Hospital_ID'";
	$gql="update bloodbank_doctor set Remark='Removed' where Hospital_ID = '$Hospital_ID'";
	$wql="update warddoctor set Remark='Removed' where Hospital_ID = '$Hospital_ID'";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("Trasfereing is successfully");';
         echo 'window.location.href="DeactivateOrUpdateHospital.php";';

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