
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

    // check if the donor has made a previous donation within the last 4 months
    $last_donation_sql = "SELECT Donation_date FROM donation_records WHERE Donor_Id = '$Donor_Id' ORDER BY Donation_date DESC LIMIT 1";
    $last_donation_result = $conn->query($last_donation_sql);
    if ($last_donation_result->num_rows > 0) {
        $last_donation_row = $last_donation_result->fetch_assoc();
        $last_donation_date = $last_donation_row["Donation_date"];
        
        // compare the last donation date with the current date
        $last_donation_timestamp = strtotime($last_donation_date);
        $current_timestamp = strtotime($date);
        $months_since_last_donation = floor(($current_timestamp - $last_donation_timestamp) / (30 * 24 * 60 * 60));
        
        if ($months_since_last_donation < 4) {
            // Display an alert message if the donor has donated within the last 4 months
            echo '<script type="text/javascript">';
            echo 'alert("Donor is not eligible to donate. Minimum 4 months required between donations.");';
            echo 'window.location.href="add_medical.php";';
            echo '</script>';
            exit; // Stop execution if the donor is not eligible to donate
        }
    }


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


 
