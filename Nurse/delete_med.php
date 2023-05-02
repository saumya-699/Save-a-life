
<?php 
session_start();

?>

<?php
require "conection.php";

if(isset($_GET['Donor_Id']){
	$Donor_Id=$_GET['Donor_Id'];
	$query = "DELETE FROM 'pre_medical' WHERE id = '$Donor_Id'";
	if ($run) {  
           header('location:add_med.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>

?>