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
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
		header("Location: /Save-a-life/Guest/donar/doner_information.php?password_match=0");
    }
    
    $strDOB = str_replace('/', '-', $dob);
    $birthdate = date('Y-m-d', strtotime($strDOB));

    $query = "UPDATE donors SET Full_Name='$fullname',
    Initials='$name_with_initials', 
    NIC_Number='$nic',
    DOB='$birthdate',
    Email='$email',
    Gender='$gender',
    Address='$address',
    province='$province',
    postal='$postal_code',
    mobile_number='$mobile_no',
    land_number='$telephone',
    username='$user_name',
    password='$password' WHERE username='$_SESSION[username]'";

    $result = $db->executeQuery($query);
    if (!$result) {
		$changes_success = false;
    }

	$changes_success = true;
	$userdata = $db->getUserData($_SESSION['username']);
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>doner_information</title>
  <link rel="stylesheet" href="../css/style2.css">
  <link rel="stylesheet" href="../style.css">
  <link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>

<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
 <!-- Vanilla Datepicker CSS -->
 <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>
 
 
 <link rel="stylesheet" href="../css/nbtssl/nbtssl.min.css">
 <link rel="stylesheet" href="../css/fontawesome-free-5.15.4/css/all.css">
 <link rel="stylesheet" href="../css/mediaquery.css">



 <!-- Demo CSS (No need to include it into your project) -->
 <link rel="stylesheet" href="css/demo.css">
</head>
<style>
  .btn-reg :hover {
    background-color: #5a96ff !important;
}
.btn-can :hover {
    background-color: #5a96ff !important;
}
.input-wrapper {
        display:inline-block;
        position: relative
    }
    .input-wrapper:after {
        font-family: 'FontAwesome';
        content: '\f274';
        position: absolute;
        right: 6px;
    }
  
</style>
<body>

<!-- partial:index.partial.html -->
<div class="layout has-sidebar fixed-sidebar fixed-header">
      <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
        <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
        <div class="sidebar-layout">
          <div class="sidebar-header">
            <div class="pro-sidebar-logo">
              <div><img src="../img/logo.png" alt="logo"></div>
              <h5>Save A Life</h5>
            </div>
          </div>
          <div class="sidebar-content">
            <nav class="menu open-current-submenu">
            <ul>
                <li class="menu-header"></li>
                <li class="menu-item">
                  <a href="../home/home.php">
                    <span class="menu-icon">
                      <i class="ri-home-fill"></i>
                    </span>
                    <span class="menu-title">Home</span>
                  </a>
                  <div class="sub-menu-list">
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-folder-user-fill"></i>
                    </span>
                    <span class="menu-title">Personal Information</span>
                  </a>
                  <div class="sub-menu-list">
                    
                  </div>
                </li>
                <li class="menu-item">
                  <a href="../donation_history/donation_history.html">
                    <span class="menu-icon">
                      <i class="ri-history-line"></i>
                    </span>
                    <span class="menu-title">Donation History</span>
                  </a>
                  <div class="sub-menu-list">
                    
                  </div>
                </li>
                <li class="menu-item">
                  <a href="../filldeclaration/filldecleration.php">
                    <span class="menu-icon">
                      <i class="ri-file-edit-fill"></i>
                    </span>
                    <span class="menu-title">Fill Declaration Form</span>
                  </a>
                  <div class="sub-menu-list">
                </li>
              
                <li class="menu-header" style="padding-top: 40px"><span>|</span></li>
                <li class="menu-item">
                  <a href="../donar/doner_information.php">
                    <span class="menu-icon">
                      <i class="ri-user-line"></i>
                    </span>
                    <span class="menu-title">Profile</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-notification-line"></i>
                    </span>
                    <span class="menu-title">Notifications</span>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="../logout.php">
                    <span class="menu-icon">
                      <i class="ri-logout-box-r-line"></i>
                    </span>
                    <span class="menu-title">Log Out</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </aside>
      <div id="overlay" class="overlay"></div>
      <div class="layout">
        <main class="content">
          <!-- add your content from here -->
          <div class="container frm-login">
            <div class="card frm-form">
                <div class="card-body frm-body">
                        <form action="/Save-a-life/Guest/donar/doner_information.php" method="POST">
       
                                <h1 class="txt-l">Personal Infromation</h1>

                                <label for="exampleFormControlInput1" class="form-label lbl" style="margin-top: 16px;">Donor ID</label>

                                <input type="text" value="<?php echo $userdata['Donor_Id'] ?>" class="form-control txt-input" disabled>

					<label for="exampleFormControlInput1" class="form-label lbl star" name="username">Prefix</label>
                    <select name="prefix" id="" class="form-control txt-input" required>Prefix
                       <option value="" diabled> Select </option>
                        <option  <?php echo ($userdata['Prefix'] == 'Mr') ? "selected" : "" ?> value="Mr">Mr</option>
                        <option <?php echo ($userdata['Prefix'] == 'Ms') ? "selected" : "" ?> value="Ms">Ms</option>
				<option <?php echo ($userdata['Prefix'] == 'Mrs') ? "selected" : "" ?> value="Mrs">Mrs</option>
                        <option <?php echo ($userdata['Prefix'] == 'Rev') ? "selected" : "" ?> value="Rev">Rev</option>
				<option <?php echo ($userdata['Prefix'] == 'Dr') ? "selected" : "" ?> value="Dr">Dr</option>
                    </select>

                                <label for="exampleFormControlInput1" class="form-label lbl star" style="margin-top: 16px;">Full Name</label>

                                <input type="text" name="fullname" value="<?php echo $userdata['Full_Name'] ?>" class="form-control txt-input" placeholder="Type your Full Name" required>
 


                                <label for="exampleFormControlInput1" class="form-label lbl star">Name with Initials</label>
                                <input type="text" value="<?php echo $userdata['Initials'] ?>" class="form-control txt-input" placeholder="Type your Name with Initials" name="name_with_initials" required>

                                <label for="exampleFormControlInput1" class="form-label lbl star">NIC No</label>
			<input type="text" value="<?php echo $userdata['NIC_Number'] ?>" class="form-control txt-input" placeholder="Type NIC Number" name="nic" required>

                                <label for="exampleFormControlInput1" class="form-label lbl star">Date Of Birth Day (DD/MM/YYYY)</label>
                                <div class="input-group mb-4" style="margin-bottom: 0rem!important;">
                                    

                                    <input type="datetime" value="<?php echo date('d/m/Y', strtotime($userdata['DOB'])) ?>" name="dob" class="datepicker_input form-control txt-input input-wrapper" placeholder="Select Date" required>
                                    <i class="fas fa-calendar-alt input-group-text errspan"></i>
                                  </div>

                                <label for="exampleFormControlInput1" class="form-label lbl">Email Address (If having)</label>
                                <input type="email" value="<?php echo $userdata['Email'] ?>" class="form-control txt-input" placeholder="Type your Email Address" name="email" >

                                <label for="exampleFormControlInput1" class="form-label lbl star">Gender</label>
                                <select name="gender" id="" class="form-control txt-input" required>Gender
                                    <option value="N" <?php echo ($userdata['Gender'] != 'M' || $userdata['Gender'] != 'F') ? "selected" : "" ?>>Select</option>
                                    <option value="M" <?php echo ($userdata['Gender'] == 'M') ? "selected" : "" ?>>Male</option>
                                    <option value="F" <?php echo ($userdata['Gender'] == 'F') ? "selected" : "" ?>>Female</option>
                                    
                                </select>

                                <label for="exampleFormControlInput1" class="form-label lbl star">Address</label>
                                <textarea name="address" id="" cols="30" rows="10" class="form-control txt-input" placeholder="Type your Address" required><?php echo $userdata['Address'] ?></textarea>

                                <label for="exampleFormControlInput1" class="form-label lbl star">Province</label>
                                <select name="province" id="" class="form-control txt-input" required>Province
                                    <option value="Not Provided"> Select</option>
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
						value="<?php echo $userdata['postal'] ?>" class="form-control txt-input" placeholder="Type the Postal Code of your Area" name="postal_code" required>

                                <label for="exampleFormControlInput1" class="form-label lbl star">Telephone Number (Mobile)</label>
                                <input type="number"
							 oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
						value="<?php echo $userdata['mobile_number'] ?>" class="form-control txt-input" placeholder="eg:0777123456" name="mobile_no" required>

                                <label for="exampleFormControlInput1" class="form-label lbl">Telephone Number (Land) (If having)</label>
                                <input type="number" 
							 oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
						value="<?php echo $userdata['land_number'] ?>" class="form-control txt-input" placeholder="eg:0112345678 " name="telephone_no" >



                                <label for="exampleFormControlInput1" class="form-label lbl">Blood Group</label>
<?php
	$query = "SELECT blood_group FROM blood_testing_result";
	$rSet = $db->executeQuery($query);
	$test_data = [];
	if ($rSet)
	{
		$test_data = mysqli_fetch_assoc($rSet);
	}
?>
                                <input type="text" class="form-control txt-input" value="<?php if (!empty($test_data)) echo $test_data['blood_group'] ?>">
                               <!-- <select name="blood_grp" id="" class="form-control txt-input" disabled>Blood Group
                                    <option value="Not Provided"> None</option>
                                    <option value="A+" <?php echo ($userdata['blood_grp'] == 'A+') ? "selected" : "" ?>> A+</option>
						<option value="A-" <?php echo ($userdata['blood_grp'] == 'A-') ? "selected" : "" ?>> A-</option>
                                    <option value="B+" <?php echo ($userdata['blood_grp'] == 'B+') ? "selected" : "" ?>> B+</option>
						<option value="B-" <?php echo ($userdata['blood_grp'] == 'B') ? "selected" : "" ?>> B-</option>
                                    <option value="AB+" <?php echo ($userdata['blood_grp'] == 'AB+') ? "selected" : "" ?>> AB+</option>
						<option value="AB-" <?php echo ($userdata['blood_grp'] == 'AB-') ? "selected" : "" ?>> AB-</option>
                                    <option value="O+" <?php echo ($userdata['blood_grp'] == 'O+') ? "selected" : "" ?>> O+</option>
						<option value="O-" <?php echo ($userdata['blood_grp'] == 'O-') ? "selected" : "" ?>> O-</option>
                                </select>-->


                                <!--<label for="exampleFormControlInput1" class="form-label lbl">RhD (If knowing)</label>
                                <select name="rhd" id="" class="form-control txt-input">RhD
                                    <option value="Not Provided"> None</option>
                                    <option value="Positive" <?php echo ($userdata['rhd'] == 'Positive') ? "selected" : "" ?>> Positive</option>
                                    <option value="Negative" <?php echo ($userdata['rhd'] == 'Positive') ? "selected" : "" ?>> Negative</option>
                                    
                                </select>-->

                                <label for="exampleFormControlInput1" class="form-label lbl star">User Name</label>
                                <input type="text" class="form-control txt-input" value="<?php echo $userdata['username'] ?>" placeholder="Type a User Name" name="username" required>
                                <label for="exampleFormControlInput1" class="form-label lbl star"> Password</label>
                                <input type="password" class="form-control txt-input" placeholder="Enter a password" name="password" required>



                                <label for="exampleFormControlInput1" class="form-label lbl star">Re-enter the Password</label>
                                <input type="password" class="form-control txt-input" placeholder="Re-enter the password" name="confirm_password" required>

                                <div class="row btn-buttons btn-largeform">
                                    <input type="hidden" name="save" value="success"/>
                                    <div class="col btn-but"> <input type="submit" value="Save" class="btn btn-danger btn-reg" style="color:#000;"></div>
                                    <div class="col btn-but"> <input type="submit" value="Cancel" class="btn btn-secondary btn-can"></div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    
                </div>
            </div>
        </div>
    
        </main>
      </div>
    </div>
<!-- partial -->

    <!-- nbtssl 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/nbtssl@5.1.0/dist/js/nbtssl.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

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
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>
  <script type='text/javascript' src='../js/script.js'></script>

</body>
</html>
