<?php

session_start();

include '../database.php';

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

    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($db->checkUserExists($username, $password)) {
        $_SESSION['username'] = $_POST['username'];
        header('Location: /nbts/home/home.php?success=true');
    } else {
        header('Location: /nbts/login/login.php?invalid=true');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="../css/mediaquery.css">
    <title>Login Form</title>
</head>

<body>

	<?php if ($invalid_login) {?>
	<script>
		alert("Invalid login");
	</script>
	<?php } ?>

	<?php if ($register_success) {?>
	<script>
		alert("Registration successful");
	</script>
	<?php } ?>

    <div class="container-fulid header-nbts">
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
                            <h1>National Blood Transfusion Service - Sri Lanka</h1>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="nav-bar">
        <div class="container">
            <div class="nav">
                <ul>
                    <li style="padding-top: 10px;">
                        <a href="../index.html">HOME</a>
                    </li>
                    <li style="padding-top: 10px;">
                        <a href="../contactus/contactus.html">CONTACT  US</a>
                    </li>
                    <li class="btn btn-primary btn-h-login" style="margin-top:5px;background-color: #ff722d !important;">
                        <a href="/nbts/login/login.php" style=" color: #fff;">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container frm-login">
        <div class="card frm-form">
            <div class="card-body frm-body">
                <form action="/nbts/login/login.php" method="POST">
                    <div class="circle-bg"></div>
                    <i class="far fa-user-circle user"></i>
                    <h1 class="txt-l">Login</h1>
				 <label for="exampleFormControlInput1" class="form-label lbl star">Select User Role</label>
                    <select name="" id="" class="form-control txt-input" required>Province
                        <option value="" diabled> Select </option>
                        <option value=""> Donor</option>
                        <option value=""> Nurse</option>
                        <option value=""> Ward Doctor</option>
                        <option value=""> Blood Bank Doctor </option>
                        <option value=""> Director Of the Blood Bank</option>
                        <option value=""> MLT </option>
                    </select>
                    <label for="exampleFormControlInput1" class="form-label lbl" >Username</label>
                    <input type="text" class="form-control txt-input" placeholder="Enter the Username" name="username" required>



                    <label for="exampleFormControlInput1" class="form-label lbl" >Password</label>
                    <input type="password" class="form-control txt-input" placeholder="Enter the Password" name="password" required>
                    <p class="lbl" style="color:#2686F6;"><a href="http://">Forgot password?</a></p>
                    <input type="submit" value="Login" class="btn btn-primary btn-login">
                    <p class="lbl txt-reg" style="text-align:center;">if you are not a registered donor,<a href="/nbts/register/ragister.php" style="color:#F35050">Register</a></p>
                </form>



            </div>
        </div>

    </div>
</body>

</html>