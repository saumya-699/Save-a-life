
<?php 
session_start();

?>
<?php

require 'conp.php';  


if(isset($_POST['btnCancel']))
{
	
	
	
	
	     echo '<script type="text/javascript">';
		
         echo 'window.location.href="Home.php";';

		 echo '</script>';
	
}
   

          //make connection here
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
	$m= $_SESSION["Name"];
	$DOA=$_POST["DOA"];


	$query = "select * from director where UserName ='$m'";


   		
		$resultd = $conn->query($query);
		
		//echo "Error in ".$vql."<br>".$conn->error;
$x =null;
if($resultd->num_rows>0)

{        
  
 while($row = $resultd->fetch_assoc())
 
 {
	  


   
	 $x= $row["Director_ID"];
   
  
  

	
  }
  
	
}	


     			
			

//insert the user into the database.
    $sql="insert into hospital(Hospital_ID,HospitalName,Type,District,Head_Of_Hospital,Address,Landline_Number,ContactNum_Hospital_Head,Added_Date,Remark,Director_ID)VALUES(' ','$HName','$Type','$district','$headName','$address','$number1','$number2','$DOA','Added','$x')";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		 echo 'alert("Added successfully");';
         
		 echo 'window.location.href="AddHospitalI.php";';
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