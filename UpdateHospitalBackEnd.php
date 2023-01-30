
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
    $Type=$_POST["Type"];
	$district=$_POST["district"];
	$headName=$_POST["headName"];
	$address=$_POST["address"];
	$number1=$_POST["number1"];
	$number2=$_POST["number2"];
      $x= $_SESSION["ID"];
     			
			

//insert the user into the database.
  //$vql ="select *from hospital where HospitalName='$HName'";
  //$result = $conn->query($vql);


    $sql="update hospital set HospitalName='$HName',Type='$Type',District='$district',Head_Of_Hospital='$headName',Address='$address',Landline_Number='$number1',ContactNum_Hospital_Head='$number2',Remark='updated',Director_ID=' $x' WHERE Hospital_ID='$Hospital_ID'";
	     
 		      
    
		 if ($conn->query($sql) === TRUE) {
			 
		 echo '<script type="text/javascript">';
		 echo 'alert("Updated successfully");';
         
	
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
 		  //echo "Error in ".$sql."<br>".$conn->error;
 
	

 
$conn->close();

?>


