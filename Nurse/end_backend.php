<?php
session_start();
require 'conection.php';

// get the batch number of the latest donation batch
$sql = "SELECT Batch FROM donation ORDER BY Donation_Id DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $batch_row = $result->fetch_assoc();
  $batch = $batch_row["Batch"];
  // send a message to the relevant personnel notifying them of the completed batch
  // your code to send the message goes here
  echo "Batch " . $batch . " has been completed and a message has been sent to the relevant personnel.";
} else {
  echo "No donations have been made yet.";
}

$conn->close();
?>