<?php 
session_start();

require 'conp.php'; // make database connection here
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
    $Donor_Id = $_POST["Donor_Id"];
    $Packet_Id = $_POST["Packet_Id"];
    $Nurse_ID = $_POST["Nurse_ID"];
    $Hospital_ID=$y;
    
    
    // get current date
    $Donation_Date = date("Y-m-d");
    
    // get the last donation ID and the batch number
    $last_donation_sql = "SELECT Donation_ID, Batch FROM donation_records ORDER BY Donation_ID DESC LIMIT 1";
    $last_donation_result = $conn->query($last_donation_sql);
    if ($last_donation_result->num_rows > 0) {
        $last_donation_row = $last_donation_result->fetch_assoc();
        $last_donation_id = $last_donation_row["Donation_ID"];
        $last_batch = $last_donation_row["Batch"];
    } else {
        $last_donation_id = 0;
        $last_batch = 0;
    }
    
    // increment the batch number if 10 donations have been added to the current batch
    if (($last_donation_id % 15) == 0) {
        $batch_no = $last_batch + 1;
    } else {
        $batch_no = $last_batch;
    }
    
    
     // insert new donation record
     $sql = "INSERT INTO donation (Donation_date, Batch, Donor_Id, packet_no, Nurse_ID,Hospital_ID)
     VALUES ('$Donation_Date', '$batch_no', '$Donor_Id', '$Packet_Id', '$Nurse_ID','$Hospital_ID')";
 if($conn->query($sql)){
     echo '<script type="text/javascript">';
     echo 'alert("Added successfully");';
     echo 'window.location.href="end.php";';
     echo '</script>';
 } else {
     echo '<script type="text/javascript">';
     echo "Error in ".$sql."<br>".$conn->error;
     echo 'alert("Error in entering try again!");';
     echo 'window.location.href="add_donation.php";';
     echo '</script>';
 }
}

$conn->close();
?>

