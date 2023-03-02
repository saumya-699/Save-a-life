<?php
session_start();
include "db_conn.php";

if(isset($_POST['UserName']) && isset($_POST['Password'])){
    

   function validate($data){
        $data =trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
}
$UserName= validate($_POST['UserName']);
$Password= validate($_POST['Password']);

if(empty($UserName)){
    header("Location: index.php?error1=UserName is required");
    exit();
}
elseif(empty($Password)){
    header("Location: index.php?error2=Password is required");
    exit();
}
else{

$sql ="SELECT * FROM warddoctor WHERE UserName='$UserName' AND password='$Password'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)===1){
    $row= mysqli_fetch_assoc($result);
    if($row['UserName']===$UserName && $row['Password'] ===$Password){
        //echo "logged in";
        

        $_SESSION['UserName'] =$row['UserName'];
        $_SESSION['Name_With_Initials'] =$row['Name_With_Initials'];
        $_SESSION['WardDoctor_ID'] =$row['WardDoctor_ID'];
        $_SESSION['Hospital_ID'] =$row['Hospital_ID'];
        
		header("Location: see.php");
        exit();
    } 
}  else {
    header("Location: index.php?error3=Incorrect username or password");
          exit();
  }
   
   
}



?>