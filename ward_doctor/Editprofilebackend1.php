<?php 

session_start();
include "config.php";

if (!empty($_POST)) {

        $Email = $_POST['Email'];

        $ContactNumber = $_POST['ContactNumber'];

        $UserName = $_POST['UserName'];

        $Password = $_POST['Password'];

        $id=$_POST['id'];
        $sql = "UPDATE warddoctor SET Email='$Email',ContactNumber='$ContactNumber',UserName='$UserName', Password='$Password' WHERE WardDoctor_ID='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    }
