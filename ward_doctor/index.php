<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylelogin.css">
    <link rel="stylesheet" href="./css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="./css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="./css/mediaquery.css">
    <title>Login Form</title>
</head>

<body>
    <div class="container-fulid">
        <div class="container">

            <div class="header-bar">
                <div class="row">
                    <div class="col-md-1">
                        <div class="logo">
                            <img src="./img/NBTS LOGO.png" alt="">

                        </div>
                    </div>
                    <div class="col-md-11">
                        <div class="txt-nbt-head">
                            <h1>Welcome to National Blood Transfusion Service - Sri Lanka</h1>
                        </div>

                    </div>
                </div>
            </div>
           

        </div>
      

    </div>
    <div style="position:absolute; left:40%; color:red; " >
                <?php if (isset($_GET["error3"])){
						$error3=$_GET["error3"];

                         echo "<br>$error3"; 
                    
                    } ?>
                    </div>

    <div class="container frm-login">
 

        <div class="card frm-form">
   
            <div class="card-body frm-body">
            <form action="login.php" method="POST">
              
                    <i class="far fa-user-circle user"></i>
                    <h3 class="txt-l"><b>Ward doctor Login</b></h3>
                    <label for="exampleFormControlInput1" class="form-label lbl" ><b>Username</b></label>
                    <input type="text" class="form-control txt-input" placeholder="Enter the SLMC number" name="UserName" style="width:280px" >
                    <div style="position:absolute;  color:red;">
                <?php if (isset($_GET["error1"])){
						$error1=$_GET["error1"];

                         echo "$error1"; 
                    
                    } ?>
                    </div>
                    <br><br>
				

                    <label for="exampleFormControlInput1" class="form-label lbl" ><div style="margin-top:-20px;" ><b>Password</b></label></div>
                    <input type="password" class="form-control txt-input" placeholder="Enter the Password" name="Password" style="width:280px">
                    <div style="position:absolute; color:red;">
                <?php if (isset($_GET["error2"])){
						$error2=$_GET["error2"];

                         echo "$error2"; 
                    
                    } ?>
                    </div>
               <p></p>
               <br>
               <p></p>  <p><button type="submit"  class="btn btn-primary btn-login">Login</button></p>
               <a href="forgot.php" id="forgot">Forgot Your Password?</a><br><br>
               <a href="signup.php" id="signup">signup</a>
               
                </form>


            </div>

        </div>
       

    </div>
   
</body>

</html>