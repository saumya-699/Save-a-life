<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../database.php');

$password_match = true;
if (isset($_GET["password_match"])) {
	$password_match = $_GET["password_match"];
}

if (isset($_POST['registration']) && $_POST['registration'] === "success") {
    $db = Database::getInstance();

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
		header("Location: /nbts/register/ragister.php?password_match=0");
		return;
	}
    
    $strDOB = str_replace('/', '-', $dob);
    $birthdate = date('Y-m-d', strtotime($strDOB));

    $query = "INSERT INTO user_nbts(full_name, name_with_initials, nic_no, dob, email, gender, address, province, postal_code, mobile_no, telephone, blood_grp, rhd, user_name, password) VALUES
    ('$fullname', '$name_with_initials', '$nic', '$birthdate', '$email', '$gender', '$address', '$province', '$postal_code', '$mobile_no', '$telephone', '$blood_grp', '$rhd', '$user_name', '$password')";

    $result = $db->executeQuery($query);
    if (!$result) {
        echo '<h2><span style="color: red">Registration Failed</span></h2>';
    }
	header('Location: /nbts/login/login.php?register=true');
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

</head>

<body>

	<?php if ($password_match == false) {?>
		<script>
			alert("Passwords do not match");
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
                    <li class="btn btn-primary btn-h-login" style="margin-top:5px;">
                        <a href="../login/login.php">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </header>

    <div class="container frm-login">
        <div class="card frm-form">
            <div class="card-body frm-body">
                <form action="ragister.php" method="POST">

                    <h1 class="txt-l">Donor Registration</h1>
                    <label for="exampleFormControlInput1" class="form-label lbl star">Full Name</label>

                    <input type="text" name="fullname" class="form-control txt-input" placeholder="Type your Full Name" required>



                    <label for="exampleFormControlInput1" class="form-label lbl star">Name with Initials</label>
                    <input type="text" class="form-control txt-input" placeholder="Type your Name with Initials" name="name_with_initials" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">NIC No</label>
                    <input type="text" class="form-control txt-input" placeholder="Type NIC Number" name="nic" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Date Of Birth Day (DD/MM/YYYY)</label>
                    <div class="input-group mb-4">
                        <i class="fas fa-calendar-alt input-group-text"></i>

                        <input type="datetime" name="dob" class="datepicker_input form-control txt-input" placeholder="Select Date" required>
                    </div>




                    <label for="exampleFormControlInput1" class="form-label lbl">Email Address (If having)</label>
                    <input type="email" class="form-control txt-input" placeholder="Type your Email Address" name="email" >

                    <label for="exampleFormControlInput1" class="form-label lbl star">Gender</label>
                    <select name="gender" id="" class="form-control txt-input" required>Gender
                        <option value="N" selected>None</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        
                    </select>
		
                    <label for="exampleFormControlInput1" class="form-label lbl star">Address</label>
                    <textarea name="address" id="" cols="30" rows="10" class="form-control txt-input" placeholder="Type your Address" required></textarea>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Province</label>
                    <select name="province" id="" class="form-control txt-input" required>Province
                        <option value="Not Provided"> None</option>
                        <option value="Northern"> Northern</option>
                        <option value="North Western"> North Western</option>
                        <option value="North Central"> North Central</option>
                        <option value="Western"> Western </option>
                        <option value="Central"> Central</option>
                        <option value="Sabaragamuwa"> Sabaragamuwa </option>
                        <option value="Eastern"> Eastern</option>
                        <option value="Uva"> Uva </option>
                        <option value="Southern"> Southern </option>
                    </select>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Postal Code</label>
                    <input type="number" 
						oninput="javascript: if (this.value.length > 5) this.value = this.value.slice(0, 5);"
					class="form-control txt-input" placeholder="Type the Postal Code of your Area" name="postal_code" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Telephone Number (Mobile)</label>
                    <input type="number" 
						oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
					class="form-control txt-input" placeholder="eg:0777123456" name="mobile_no" required>

                    <label for="exampleFormControlInput1" class="form-label lbl">Telephone Number (Land) (If having)</label>
                    <input type="number" 
						oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 10);"
					class="form-control txt-input" placeholder="eg:0112345678 " name="telephone_no" >



                   <!-- <label for="exampleFormControlInput1" class="form-label lbl">Blood Group (If knowing)</label>
                    <select name="blood_grp" id="" class="form-control txt-input">Blood Group
                        <option value="Not Provided"> None</option>
                        <option value="A"> A</option>
                        <option value="B"> B</option>
                        <option value="AB"> AB</option>
                        <option value="O"> O</option>
                    </select>


                    <label for="exampleFormControlInput1" class="form-label lbl">RhD (If knowing)</label>
                    <select name="rhd" id="" class="form-control txt-input">RhD
                        <option value="Not Provided"> None</option>
                        <option value="Positive"> Positive</option>
                        <option value="Negative"> Negative</option>
                        
                    </select>-->

                    <label for="exampleFormControlInput1" class="form-label lbl star">User Name</label>
                    <input type="text" class="form-control txt-input" placeholder="Type a User Name" name="username" required>
                    <label for="exampleFormControlInput1" class="form-label lbl star"> Password</label>
                    <input type="password" class="form-control txt-input" placeholder="Enter a password" name="password" required>



                    <label for="exampleFormControlInput1" class="form-label lbl star">Re-enter the Password</label>
                    <input type="password" class="form-control txt-input" placeholder="Re-enter the password" name="confirm_password" required>

                    <div class="row btn-buttons">
                        <input type="hidden" name="registration" value="success"/>
                        <div class="col btn-but"> <input type="submit" value="Register" class="btn btn-danger btn-reg"></div>
                        <div class="col btn-but"> <input type="submit" value="Cancel" class="btn btn-secondary btn-can"></div>
                    </div>
                </form>

            </div>
        </div>
    </div>







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
</body>

</html>