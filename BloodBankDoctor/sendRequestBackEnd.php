<?php

require 'conp.php';            //make connection here
if(isset($_POST['BtnSubmit']))
{
  //here getting result from the post array after submitting the form.
    
   $H1Name=$_POST["H1Name"];
   
   $H2Name=$_POST["H2Name"];
    $RBDN=$_POST["RBDN"];
	$RBC=$_POST["RBC"];
	$RBG=$_POST["RBG"];
	$RBP=$_POST["RBP"];
	$Date=$_POST["Date"];
   // $x= $_SESSION["ID"];
     			
			

//insert the user into the database.
    $sql="insert into sent_request(Request_ID,Requesting_hospital_name,Requested_hospital_name,Requested_by,Requeired_blood_group ,Requeired_blood_component,Requeired_no_of_packs,Date)VALUES(' ','$H1Name','$H2Name','$RBDN','$RBC','$$RBG','$RBP','$Date')";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("Insrtion is successfully");';
	     echo 'window.location.href="sendRequest.php";';
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