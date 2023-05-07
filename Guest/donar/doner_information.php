<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../database.php';

$db = Database::getInstance();

$userdata = null;
if (isset($_SESSION['username'])) {
    $userdata = $db->getUserData($_SESSION['username']);
}

$changes_success = false;

$password_match = true;
if (isset($_GET["password_match"])) {
	$password_match = $_GET["password_match"];
}

if (isset($_POST['save']) && $_POST['save'] === "success") {
    $fullname = $_POST['fullname'];
    $name_with_initials = $_POST['name_with_initials'];
    $nic = $_POST['nic'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $postal_code = $_POST['postal_code'];
    $mobile_no = $_POST['mobile_no'];
    $telephone = $_POST['telephone_no'];
    $blood_grp = $_POST['blood_grp'];
    $rhd = $_POST['rhd'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
		header("Location: /nbts/donar/doner_information.php?password_match=0");
    }
    
    $strDOB = str_replace('/', '-', $dob);
    $birthdate = date('Y-m-d', strtotime($strDOB));

    $query = "UPDATE user_nbts SET full_name='$fullname',
    name_with_initials='$name_with_initials', 
    nic_no='$nic',
    dob='$birthdate',
    email='$email',
    gender='$gender',
    address='$address',
    province='$province',
    postal_code='$postal_code',
    mobile_no='$mobile_no',
    telephone='$telephone',
    blood_grp='$blood_grp',
    rhd='$rhd',
    user_name='$user_name',
    password='$password' WHERE user_name='$_SESSION[username]'";

    $result = $db->executeQuery($query);
    if (!$result) {
		$changes_success = false;
    }

	$changes_success = true;
	$userdata = $db->getUserData($_SESSION['username']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    <title>Donor Registration</title>


    <!-- Vanilla Datepicker CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="../css/mediaquery.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Demo CSS (No need to include it into your project) -->
    <link rel="stylesheet" href="css/demo.css">



    <style>
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }
        
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }
        
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
        
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }
        
        .list-group-item {
            border: none;
            border-radius: 0 !important;
        }
        
        .dropbtn {
            background-color: #E56262;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #C14246;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown-content a:hover {
            background-color: #D22E2E;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown:hover .dropbtn {
            background-color: #E56262;
        }
         @media only screen and (min-width:1920px){
            .header-nav{max-width:68% !important;}
            .dropdown-content {margin-left: 30px!important;}
                .dropbtn { padding-top: 16px !important;
                     padding-left: 33px !important;
                      padding-bottom: 16px !important;}
                      .nbt-bell{padding-top: 7px !important;}
                      .nbt-alt{padding-top: 5px !important;}
}
  

        @media only screen and (min-width: 768px) {
            .col-md-2 {
                -ms-flex: 0 0 16.666667% !important;
                flex: 0 0 20.667% !important;
                max-width: 22.667% !important;
            }
		.icons-header{margin-right: 67px !important;}
        }
        @media only screen and (max-width:1366px){
            .header-nav{max-width:62% !important;}
            .icons-header{margin-right: 67px !important;
                flex: 0 0 33.667% !important;}
                .dropdown-content {margin-left: 30px !important;}
                .dropbtn { padding-top: 16px !important;
                     padding-left: 33px !important;
                      padding-bottom: 16px !important;}
                      .nbt-bell{padding-top: 7px !important;}
                      .nbt-alt{padding-top: 5px !important;
                  }
        }
    </style>
</head>

<body>

	<?php if ($changes_success === true) { ?>
		<script>
			alert("Saved changes");
		</script>
	<?php } ?>

	<?php if ($password_match == false) {?>
		<script>
			alert("Passwords do not match");
		</script>
	<?php } ?>

    <div class="container-fulid header-m" style="height:58px;background-color:#E56262;">


        <div class="header-bar">
            <div class="row">
                <div class="col-md-1">

                    <img src="../img/icon.png" alt="" width="40" style="padding-top:0px;">


                </div>

            </div>
            <div class="col-md-8 header-nav">
                <div class="txt-nbt-head">
                    <h3 style="color:#fff;font-style:italic;">National Blood Transfusion Service </h3>
                </div>

            </div>
            <div class="col-md-4 icons-header">
                <div class="txt-nbt-head">



                    <ul style="display:flex;">



                        <li style="list-style:none;color: #fff;
                      padding-top: 15px;
                     padding-right: 18px;"><i class="fas fa-bell nbt-bell" style="font-size:20px;color: #fff;cursor: pointer;"></i></li>
                        <li style="list-style:none; padding-top: 17px;
                        padding-right: 18px;"><i class="fas fa-user-alt nbt-alt" style="font-size:20px;color: #fff;"></i></li>
                        <li style="list-style:none;">
                            <h5 style=" padding-top:20px;color: #fff;"><?php echo $userdata['full_name'] ?><br>Donor</h5>

                        </li>
                        <li style="list-style:none;">
                            <div class="dropdown">
                                <button class="dropbtn" style="outline: none;"><i class="fas fa-chevron-down"></i></button>
                                <div class="dropdown-content">
                                    <a href="/nbts/donar/doner_information.php" style="font-size:14px;"><i class="fas fa-user-alt" style="font-size:20px;word-spacing:10px;"></i>&ensp; Profile</a>
                                    <a href="/nbts/home/home.php?logout=true" style="font-size:14px;"><img src="../img/sign-out-alt.svg" alt="" width="20">&ensp; Sign Out</a>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

    </div>

    </header>

    <div class="container-fulid">
        <div class="row">
            <div class="col" width="2" style="
            padding: 0;
            width: 233px;
            background-color: #C14246;
            
            flex-basis: auto !important;
            flex-grow: 0 !important;
       
            height: 1330px;">
                <ul class="list-group">

                    <a href="http://" style="text-decoration:none;">
                        <li style="list-style:none;height: 50px; background-color:#C14246;
                        margin-top: 5px;" class="list-group-item">

                        </li>



                        <li style="list-style:none;height: 40px;background: #D9D9D9;
                      margin-top: 5px;" class="list-group-item"><i class="fas fa-arrow-circle-right" style="font-size:32px;color: #F35050;position: relative;bottom:5px; "></i><a href="../home/home.php" style="text-decoration:none;text-decoration: none;
                      position: relative;
                      left: 10px;
                      font-size: 14px;
                      color: #2F4858;
                      font-weight: 800;bottom: 12px"> Home</a>
                        </li>

                        <a href="http://" style="text-decoration:none;">
                            <li style="list-style:none;height: 40px; background-color:#D22E2E;
                        margin-top: 5px;" class="list-group-item">
                                <i class="fas fa-arrow-circle-right " style="font-size:32px;color: #F35050;position: relative;bottom:5px; "></i>
                                <a href="../donar/doner_information.php" style="text-decoration:none;text-decoration: none;
                    position: relative;
                    bottom: 12px;left: 10px;
                    font-size: 14px;
                    color: #2F4858;
                    font-weight: 800;">Personal Information</a></li>

                            <a href="http:// " style="text-decoration:none; ">
                                <li style="list-style:none;height: 40px;background: #D9D9D9; margin-top: 5px; " class="list-group-item "><i class="fas fa-arrow-circle-right " style="font-size:32px;color: #F35050;position: relative;bottom:5px;  "></i>
                                    <a href="../donation_history/donation_history.html" style="text-decoration:none;text-decoration:
                                none; position: relative; bottom:12px;left: 10px;
                    font-size: 14px;
                    color: #2F4858;
                    font-weight: 800;">Donation History</a></li>

                                <a href="http:// " style="text-decoration:none; ">
                                    <li style="list-style:none;height: 40px;background: #D9D9D9; margin-top: 5px; " class="list-group-item "><i class="fas fa-arrow-circle-right " style="font-size:32px;color: #F35050;position: relative;bottom:12px; "></i>
                                        <a href="http:// " style="text-decoration:none;font-size:32px;
                                "></i><a href="../filldeclaration/filldecleration.html" style="text-decoration:none;text-decoration: none; position: relative; bottom: 17px;left: 10px;
font-size: 14px;
color: #2F4858;
font-weight: 800;">Fill Decleration Form</a></li>

                </ul>
            </div>
            <div class="col-9 ">
                <div class="frm-login ">
                    <div class="card frm-form ">
                        <div class="card-body frm-body ">
                            <form action="/nbts/donar/doner_information.php" method="POST">

                                <h1 class="txt-l">Personal Infromation</h1>
                                <label for="exampleFormControlInput1" class="form-label lbl star">Full Name</label>

                                <input type="text" name="fullname" value="<?php echo $userdata['full_name'] ?>" class="form-control txt-input" placeholder="Type your Full Name" required>



                                <label for="exampleFormControlInput1" class="form-label lbl star">Name with Initials</label>
                                <input type="text" value="<?php echo $userdata['name_with_initials'] ?>" class="form-control txt-input" placeholder="Type your Name with Initials" name="name_with_initials" required>

                                <label for="exampleFormControlInput1" class="form-label lbl star">NIC No</label>
                                <input type="text" value="<?php echo $userdata['nic_no'] ?>" class="form-control txt-input" placeholder="Type NIC Number" name="nic" required>

                                <label for="exampleFormControlInput1" class="form-label lbl star">Date Of Birth Day (DD/MM/YYYY)</label>
                                <div class="input-group mb-4">
                                    <i class="fas fa-calendar-alt input-group-text"></i>

                                    <input type="datetime" value="<?php echo date('d/m/Y', strtotime($userdata['dob'])) ?>" name="dob" class="datepicker_input form-control txt-input" placeholder="Select Date" required>
                                </div>

                                <label for="exampleFormControlInput1" class="form-label lbl">Email Address (If having)</label>
                                <input type="email" value="<?php echo $userdata['email'] ?>" class="form-control txt-input" placeholder="Type your Email Address" name="email" >

                                <label for="exampleFormControlInput1" class="form-label lbl star">Gender</label>
                                <select name="gender" id="" class="form-control txt-input" required>Gender
                                    <option value="N" <?php echo ($userdata['gender'] != 'M' || $userdata['gender'] != 'F') ? "selected" : "" ?>>None</option>
                                    <option value="M" <?php echo ($userdata['gender'] == 'M') ? "selected" : "" ?>>Male</option>
                                    <option value="F" <?php echo ($userdata['gender'] == 'F') ? "selected" : "" ?>>Female</option>
                                    
                                </select>

                                <label for="exampleFormControlInput1" class="form-label lbl star">Address</label>
                                <textarea name="address" id="" cols="30" rows="10" class="form-control txt-input" placeholder="Type your Address" required><?php echo $userdata['address'] ?></textarea>

                                <label for="exampleFormControlInput1" class="form-label lbl star">Province</label>
                                <select name="province" id="" class="form-control txt-input" required>Province
                                    <option value="Not Provided"> None</option>
                                    <option value="Northern" <?php echo ($userdata['province'] == 'Northern') ? "selected" : "" ?>> Northern</option>
                                    <option value="North Western" <?php echo ($userdata['province'] == 'North Western') ? "selected" : "" ?>> North Western</option>
                                    <option value="North Central" <?php echo ($userdata['province'] == 'North Central') ? "selected" : "" ?>> North Central</option>
                                    <option value="Western" <?php echo ($userdata['province'] == 'Western') ? "selected" : "" ?>> Western </option>
                                    <option value="Central" <?php echo ($userdata['province'] == 'Central') ? "selected" : "" ?>> Central</option>
                                    <option value="Sabaragamuwa" <?php echo ($userdata['province'] == 'Sabaragamuwa') ? "selected" : "" ?>> Sabaragamuwa </option>
                                    <option value="Eastern" <?php echo ($userdata['province'] == 'Eastern') ? "selected" : "" ?>> Eastern</option>
                                    <option value="Uva" <?php echo ($userdata['province'] == 'Uva') ? "selected" : "" ?>> Uva </option>
                                    <option value="Southern" <?php echo ($userdata['province'] == 'Southern') ? "selected" : "" ?>> Southern </option>
                                </select>

                                <label for="exampleFormControlInput1" class="form-label lbl star">Postal Code</label>
                                <input type="number" 
							oninput="javascript: if (this.value.length > 5) this.value = this.value.slice(0, 5);"
						value="<?php echo $userdata['postal_code'] ?>" class="form-control txt-input" placeholder="Type the Postal Code of your Area" name="postal_code" required>

                                <label for="exampleFormControlInput1" class="form-label lbl star">Telephone Number (Mobile)</label>
                                <input type="number"
							 oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
						value="<?php echo $userdata['mobile_no'] ?>" class="form-control txt-input" placeholder="eg:0777123456" name="mobile_no" required>

                                <label for="exampleFormControlInput1" class="form-label lbl">Telephone Number (Land) (If having)</label>
                                <input type="number" 
							 oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
						value="<?php echo $userdata['telephone'] ?>" class="form-control txt-input" placeholder="eg:0112345678 " name="telephone_no" >



                                <!--<label for="exampleFormControlInput1" class="form-label lbl">Blood Group (If knowing)</label>
                                <select name="blood_grp" id="" class="form-control txt-input">Blood Group
                                    <option value="Not Provided"> None</option>
                                    <option value="A" <?php echo ($userdata['blood_grp'] == 'A') ? "selected" : "" ?>> A</option>
                                    <option value="B" <?php echo ($userdata['blood_grp'] == 'B') ? "selected" : "" ?>> B</option>
                                    <option value="AB" <?php echo ($userdata['blood_grp'] == 'AB') ? "selected" : "" ?>> AB</option>
                                    <option value="O" <?php echo ($userdata['blood_grp'] == 'O') ? "selected" : "" ?>> O</option>
                                </select>


                                <label for="exampleFormControlInput1" class="form-label lbl">RhD (If knowing)</label>
                                <select name="rhd" id="" class="form-control txt-input">RhD
                                    <option value="Not Provided"> None</option>
                                    <option value="Positive" <?php echo ($userdata['rhd'] == 'Positive') ? "selected" : "" ?>> Positive</option>
                                    <option value="Negative" <?php echo ($userdata['rhd'] == 'Positive') ? "selected" : "" ?>> Negative</option>
                                    
                                </select>-->

                                <label for="exampleFormControlInput1" class="form-label lbl star">User Name</label>
                                <input type="text" class="form-control txt-input" value="<?php echo $userdata['user_name'] ?>" placeholder="Type a User Name" name="username" required>
                                <label for="exampleFormControlInput1" class="form-label lbl star"> Password</label>
                                <input type="password" class="form-control txt-input" placeholder="Enter a password" name="password" required>



                                <label for="exampleFormControlInput1" class="form-label lbl star">Re-enter the Password</label>
                                <input type="password" class="form-control txt-input" placeholder="Re-enter the password" name="confirm_password" required>

                                <div class="row btn-buttons">
                                    <input type="hidden" name="save" value="success"/>
                                    <div class="col btn-but"> <input type="submit" value="Save" class="btn btn-danger btn-reg"></div>
                                    <div class="col btn-but"> <input type="submit" value="Cancel" class="btn btn-secondary btn-can"></div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col " width="10 "></div>
    </div>



    <!-- nbtssl 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/nbtssl@5.1.0/dist/js/nbtssl.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>

    <!-- Vanilla Datepicker JS -->
    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>

    <script>
        /* nbtssl 5 JS included */
        /* vanillajs-datepicker 1.1.4 JS included */

        const getDatePickerTitle = elem => {
            // From the label or the aria-label
            const label = elem.nextElementSibling;
            let titleText = '';
            if (label && label.tagName === 'LABEL') {
                titleText = label.textContent;
            } else {
                titleText = elem.getAttribute('aria-label') || '';
            }
            return titleText;
        }

        const elems = document.querySelectorAll('.datepicker_input');
        for (const elem of elems) {
            const datepicker = new Datepicker(elem, {
                'format': 'dd/mm/yyyy', // UK format
                title: getDatePickerTitle(elem)
            });
        }
    </script>
</body>

</html>