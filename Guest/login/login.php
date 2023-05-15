<?php

session_start();

include '../database.php';
require 'conp.php';
$invalid_login = false;

if (isset($_GET['invalid'])) {
	$invalid_login = $_GET['invalid'];
}

$register_success = false;

if(isset($_GET['register'])) {
	$register_success = $_GET['register'];
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $db = Database::getInstance();

    $UserName = $_POST['username'];
    $Password = $_POST['password'];
   
    $sql= "select * from system_users where UserName='$UserName' and Password='$Password'";
	  
    $result= $conn->query($sql);

   if($result->num_rows >0) 

   {
          
       
        while($row = $result->fetch_assoc())
             { 

             $Name = $row['UserName'];
                  $_SESSION["Name"] = $Name; 
                 $ID = $row['User_ID']; 
               $_SESSION["ID"] = $ID; 
               $_SESSION["Type"] =$row['Type'];
    
     
         }
         
    
    if(isset($_SESSION["ID"]))
        {

              if( $_SESSION["Type"]   == '1')
              {
             header("Location:../../BloodBankDoctor/Home.php");
             //printf("Query failed: %s\n", $conn->error);
              }
             
             
              else if($_SESSION["Type"]   == '2'){
                header("Location:../../MLT/seeMLT.php");
            }
             else if($_SESSION["Type"]   == '3'){
                header("Location:../../ward_doctor/see.php");}
         
           else if($_SESSION["Type"]   == '4'){
           header("Location:../../Nurse/Home.php");}
         
         else if($_SESSION["Type"]   == '5'){
         header("Location:../../Director/Home.php");}
         
         else {
			  
			  $u=$_POST['username'];
			  
			  $rql="select * from donors where username =  '$u'";
			  
			   $result= $conn->query($rql);

   if($result->num_rows >0) 

   {
	   
	    $_SESSION['username'] = $u;
        while($row = $result->fetch_assoc())
             { 

              
                $_SESSION['username'] = $_POST['username'];
                   $_SESSION['Donor_ID']        =    $row['Donor_Id'];
    
     
         }
         
	 
	 
	    header("Location:../home/home.php");

   }	 
			  
      
		 
		 }
         
         
}	 
      
    }








}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="../css/mediaquery.css">
    <title>Login Form</title>
</head>

<body>

	
<div class="container-fulid header-nbts" style="background-color: #0c1e35 !important;">
        <div class="container">

            <div class="header-bar">
                <div class="row">
                    <div class="col-md-1">
                        <div class="logo">
                            <img src="../img/NBTS LOGO.png" alt="">

                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="txt-nbt-head">
                            <h1 style="font-size: 2.5rem !important;">National Blood Transfusion Service - Sri Lanka</h1>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="nav-bar" style="background: #b2c0e0;">
        <div class="container">
            <div class="nav">
                <ul class="nav-itmes">
                    <li style="padding-top: 17.5px;">
                        <a href="../index.html">HOME</a>
                    </li>
                    <li style="padding-top: 17.5px;">
                        <a href="../contactus/contactus.html">CONTACT  US</a>
                    </li>
                    <li class="btn btn-primary btn-h-login" style="margin-top:15px;background-color: #ff722d !important;padding-top: 3.5px;">
                        <a href="/Save-a-life/Guest/login/login.php" style=" color: #fff;">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container frm-login" style="boder:none;">
        <div class="card frm-form" style="width: 500px;
    height: 250px;">
            <div class="card-body frm-body" style="height: 410px;background-color:#b2c0e0 !important;boder:none !important;">
                <form action="/Save-a-life/Guest/login/login.php" method="POST">
                    <div class="circle-bg" style=" background-color:#b2c0e0 !important;position: absolute;
    top: -60px;
    left: 41% !important;"></div>
                    <i class="far fa-user-circle user" style=" color:#5a96ff !important;    position: absolute;
    left: 54px;"></i>
                    <h1 class="txt-l" style="color: #666;
                      bottom: 56px;"><b>Login</h1>
				
                    <label for="exampleFormControlInput1" class="form-label lbl" style="margin-top: 16px;">Username</label>
                    <input type="text" class="form-control txt-input" placeholder="Enter the Username" name="username" required>



                    <label for="exampleFormControlInput1" class="form-label lbl" >Password</label>
                    <input type="password" class="form-control txt-input" placeholder="Enter the Password" name="password" required>
                    <p class="lbl" style="color:#2686F6;margin-top: 10px;"><a href="http://"><b>Forgot password?</a></p>
                    <input type="submit" value="Login" class="btn btn-primary btn-login"style=" background-color: #5a96ff !important;color:">
                    <p class="lbl txt-reg" style="text-align:center;margin-top: 10px;font-weight: 700;"><b>if you are not a registered donor,<a href="/Save-a-life/Guest/register/ragister.php" style="color:#F35050">Register</a></p>
                </form>



            </div>
        </div>

    </div>
</body>

</html>
