<?php

session_start();
include "config.php";

if (isset($_POST['update'])) {

    $Email = $_POST['Email'];

    $ContactNumber = $_POST['ContactNumber'];

    $UserName = $_POST['UserName'];

    $Password = $_POST['Password'];

    $id = $_POST['id'];
    $sql = "UPDATE `warddoctor` SET `Email	`='$Email',`ContactNumber`='$ContactNumber',`UserName`='$UserName', `Password`='$Password' WHERE `WardDoctor_ID`='$id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Record updated successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} ?>

if (isset($_GET['id'])) {

$WardDoctor_ID = $_GET['id'];

$sql = "SELECT * FROM `warddoctor` WHERE `id`='$WardDoctor_ID'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {

$Email = $row['Email'];

$ContactNumber = $row['ContactNumber'];

$UserName = $row['UserName'];

$Password = $row['Password'];

$id = $row['id'];

} }}

?>