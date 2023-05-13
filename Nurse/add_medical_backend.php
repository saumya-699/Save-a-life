
<?php 
session_start();

?>

<?php

//make connection here
require 'conp.php'; 
$m = $_SESSION["Name"];
$query = "SELECT * FROM nurse WHERE UserName ='$m'";
$result1 = $conn->query($query);

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $y = $row["Hospital_ID"];
    }
  
  }

if(isset($_POST['BtnSubmit']))
{
  
    $Donor_Id=$_POST["donorid"];
	$Donor_Name=$_POST["dname"];
    $Weight=$_POST["weight"];
    $Height=$_POST["height"];
	$Blood_Pressure=$_POST["bpressure"];
	$Hemoglobine=$_POST["hemoglobine"];
	$Hospital_ID=$y;
	$date=date("Y/m/d");

    
    //database connection

        $sql = "INSERT INTO pre_medical (Donor_Id,Donor_Name,Weight,Height,Blood_Pressure,Hemoglobine,Hospital_ID,date)
VALUES ('$Donor_Id','$Donor_Name','$Weight','$Height','$Blood_Pressure','$Hemoglobine','$Hospital_ID','$date')";

if($conn->query($sql)){
      
	echo '<script type="text/javascript">';	 
	echo 'alert("Added successfully");';
	echo 'window.location.href="add_medical.php";';
	echo '</script>';

	  
	  
	  
     }
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		echo "Error in ".$sql."<br>".$conn->error;
		echo 'alert("Error in entering try again!");';
		echo 'window.location.href="add_medical.php";';
		echo '</script>';
		  
 
		 
	 }
	 
 
 //  echo "Error in ".$sql."<br>".$conn->error;
 
 
	
}
 
$conn->close();

?>


 
