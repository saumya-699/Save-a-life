<?php

require 'conp.php';            //make connection here
if(isset($_POST['BtnSubmit']))
{
  //here getting result from the post array after submitting the form.
    
    $HName=$_POST["HName"];
    $Type=$_POST["Type"];
	$district=$_POST["district"];
	$headName=$_POST["headName"];
	$address=$_POST["address"];
	$number1=$_POST["number1"];
	$number2=$_POST["number2"];
         $x= $_SESSION["ID"];
     			
			

//insert the user into the database.
    $sql="insert into hospital(Hospital_ID,HospitalName,Type,District,Head_Of_Hospital,Address,Landline_Number,ContactNum_Hospital_Head,Remark,Director_ID)VALUES(' ','$HName','$Type','$district','$headName','$address','$number1','$number2','Added','$x')";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("Registration is successfully");';
         
	
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