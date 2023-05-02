<?php

require 'conection.php';

if (isset($_POST['Donor_Id'])) {
    $donor_id = $_POST['Donor_Id'];
    $sql = "DELETE FROM pre_medical WHERE Donor_Id = $donor_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: View_med.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>