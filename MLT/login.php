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

$sql ="SELECT *FROM user_nbts WHERE User_name='$UserName' AND password='$Password'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)===1){
    $row= mysqli_fetch_assoc($result);
    if($row['user_name']===$UserName && $row['password'] ===$Password){
        //echo "logged in";
        

        $_SESSION['UserName'] =$row['User_name'];
        $_SESSION['name_with_initials'] =$row['name_with_initials'];
        $_SESSION['id'] =$row['id'];
		 header("Location: seeMLT.php");
        exit();
    } 
}  else {
    header("Location: index.php?error3=Incorrect username or password");
          exit();
  }
   
   
}



?>