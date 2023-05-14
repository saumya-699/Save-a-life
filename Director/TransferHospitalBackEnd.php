

<?php 
session_start();

?>

    

<?php

require 'conp.php';      
if(isset($_POST['btnCancel']))
{
	
	
	
	
	     echo '<script type="text/javascript">';
		
         echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

		 echo '</script>';
	
}
      //make connection here
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
	 $ID= $row["Director_ID"];
   
  
  

	
  }
  
	
}	
$hid=null;
$hos ="select Hospital_ID from hospital  where HospitalName ='$Transfer'";
$resulth = $conn->query($hos);
		
if($resulth->num_rows>0)

{        
  
 while($row = $resulth->fetch_assoc())
 
 {
	  


   
	 $hid= $row["Hospital_ID"];
   
  
  

	
  }
  
	
}	
     




			
  $mql="update hospital set Remark='Non-functioning',Director_ID= $ID  WHERE Hospital_ID= $Hospital_ID";
  
  if($conn->query($mql))
     {
      
	     echo '<script type="text/javascript">';
		 //echo 'alert("Transfered successfully");';
         // echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

		 echo '</script>';

	  
	  
	  
     }

   else
	 {

		echo '<script type="text/javascript">';
		echo "Error in ".$sql."<br>".$conn->error;
	  
	   echo 'alert("Error in entering try again!");';
   
	   echo '</script>';
		

	 }

//insert the user into the database.
    $sql="insert into transferdetails(Transfer_ID,Hospital_ID,HospitalName,Transfered_to,Transfered_By,Date)VALUES('','$Hospital_ID','$HName','$Transfer','$TransferBy','$date')";
	$vql="update nurse set Remark='Removed' where Hospital_ID = $Hospital_ID";
	$cql="update mlt set Remark='Removed' where Hospital_ID = $Hospital_ID";
	$doql="update donors set Remark='Removed' where Hospital_ID = $Hospital_ID";
	$gql="update bloodbank_doctor set Remark='Removed' where Hospital_ID = $Hospital_ID";
	$wql="update warddoctor set Remark='Removed' where Hospital_ID = $Hospital_ID";
	$srql="update stock set Hospital_ID=$hid where Hospital_ID = $Hospital_ID";


    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		// echo 'alert("Trasfereing is successfully");';
       //  echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		  echo "Error in ".$sql."<br>".$conn->error;
		
		 echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 
 
 
	 if($conn->query($vql))
     {
      
	     echo '<script type="text/javascript">';
		// echo 'alert("Trasfereing is successfully");';
      //   echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		  echo "Error in ".$sql."<br>".$conn->error;
		
		 echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 

	 if($conn->query($cql))
     {
      
	     echo '<script type="text/javascript">';
		 //echo 'alert("Trasfereing is successfully");';
       //  echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		  echo "Error in ".$sql."<br>".$conn->error;
		
		 echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 

	 if($conn->query($gql))
     {
      
	     echo '<script type="text/javascript">';
		// echo 'alert("Trasfereing is successfully");';
        // echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		  echo "Error in ".$sql."<br>".$conn->error;
		
		 echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 
 
	 if($conn->query($wql))
     {
      
	     echo '<script type="text/javascript">';
		 //echo 'alert("Trasfereing is successfully");';
         //echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		  echo "Error in ".$sql."<br>".$conn->error;
		
		 echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 



	 if($conn->query($srql))
     {
      
	     echo '<script type="text/javascript">';
		 //echo 'alert("Trasfereing is successfully");';
         //echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

		 echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		  echo "Error in ".$sql."<br>".$conn->error;
		
		 echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 
 

	 
	 if($conn->query($doql))
     {
      
	     echo '<script type="text/javascript">';
		// echo 'alert("Trasfereing is successfully");';
        // echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

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
	
		  $sysql = "DELETE FROM system_users
          WHERE UserName IN (
              SELECT UserName
              FROM mlt
              WHERE Hospital_ID = $Hospital_ID
          )";



if($conn->query($sysql))
{
 
	echo '<script type="text/javascript">';
	//echo 'alert("Deleted  successfully");';
	//echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

	echo '</script>';

 
 
 
}
else
{
	
	  
	echo '<script type="text/javascript">';
	 echo "Error in ".$sql."<br>".$conn->error;
   
	//echo 'alert("Error in entering try again!");';

	echo '</script>';
	 

	
}



$wardql = "DELETE FROM system_users
          WHERE UserName IN (
              SELECT UserName
              FROM warddoctor
              WHERE Hospital_ID = $Hospital_ID
          )";



if($conn->query($wardql))
{
 
	echo '<script type="text/javascript">';
//	echo 'alert("Deleted  successfully");';
	//echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

	echo '</script>';

 
 
 
}
else
{
	
	  
	echo '<script type="text/javascript">';
	 echo "Error in ".$sql."<br>".$conn->error;
   
	echo 'alert("Error in entering try again!");';

	echo '</script>';
	 

	
}
         
         



$nurseql = "DELETE FROM system_users
          WHERE UserName IN (
              SELECT UserName
              FROM nurse
              WHERE Hospital_ID = $Hospital_ID
          )";



if($conn->query($nurseql))
{
 
	echo '<script type="text/javascript">';
	//echo 'alert("Deleted  successfully");';
	//echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

	echo '</script>';

 
 
 
}
else
{
	
	  
	echo '<script type="text/javascript">';
	 echo "Error in ".$sql."<br>".$conn->error;
   
	echo 'alert("Error in entering try again!");';

	echo '</script>';
	 

	
}
         






$bloodql = "DELETE FROM system_users
          WHERE UserName IN (
              SELECT UserName
              FROM bloodbank_doctor
              WHERE Hospital_ID = $Hospital_ID
          )";



if($conn->query($bloodql))
{
 
	echo '<script type="text/javascript">';
	//echo 'alert("Deleted  successfully");';
	//echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

	echo '</script>';

 
 
 
}
else
{
	
	  
	echo '<script type="text/javascript">';
	 echo "Error in ".$sql."<br>".$conn->error;
   
	echo 'alert("Error in entering try again!");';

	echo '</script>';
	 

	
}
    


$dnrql = "DELETE FROM system_users
          WHERE UserName IN (
              SELECT UserName
              FROM donors
              WHERE Hospital_ID =$Hospital_ID
          )";



if($conn->query($dnrql))
{
 
	echo '<script type="text/javascript">';
	//echo 'alert("Deleted  successfully");';
	//echo 'window.location.href="DeactivateOrUpdateHospitalI.php";';

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
 
$conn->close();

?>