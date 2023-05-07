<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../database.php';

if (isset($_GET['logout']) && $_GET['logout'] == true) {
    session_destroy();
    header("Location: /nbts/login/login.php");
}

$display_name = "Invalid user";
$userdata = null;
$db = Database::getInstance();

if (isset($_SESSION['username'])) {
    $userdata = $db->getUserData($_SESSION['username']);

    switch ($userdata['gender'])
    {
        case 'M':
            $display_name = "Mr. ".$userdata['full_name'];
            break;
        case 'F':
            $display_name = "Miss. ".$userdata['full_name'];
            break;
        default:
            $display_name = $userdata['full_name'];
    }
} else {
	header("Location: /nbts/login/login.php");
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

<?php if (isset($_GET['success']) && $_GET['success']) {?>
	<script>
		alert("Login Successful");
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
                                    <a href="home.php?logout=true" style="font-size:14px;"><img src="../img/sign-out-alt.svg" alt="" width="20">&ensp; Sign Out</a>

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



                        <li style="list-style:none;height: 40px;background: #D22E2E;
                      margin-top: 5px;" class="list-group-item"><i class="fas fa-arrow-circle-right" style="font-size:32px;color: #F35050;position: relative;bottom:5px; "></i><a href="http:../home/home.html" style="text-decoration:none;text-decoration: none;
                      position: relative;
                      left: 10px;
                      font-size: 14px;
                      color: #2F4858;
                      font-weight: 800;bottom: 12px"> Home</a>
                        </li>

                        <a href="http://" style="text-decoration:none;">
                            <li style="list-style:none;height: 40px; background-color: #D9D9D9;
                        margin-top: 5px;" class="list-group-item">
                                <i class="fas fa-arrow-circle-right " style="font-size:32px;color: #F35050;position: relative;bottom:5px; "></i>
                                <a href="/nbts/donar/doner_information.php" style="text-decoration:none;text-decoration: none;
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
                            

                                <h1 class="txt-l ">Welcome back to NBTS</h1>
			<h1 class="txt-l ">Dear <?php echo $display_name ?></h1>
			<h2 class="txt-l ">You have sucessfully accessed to your Donor Account</h1>
                                
                            

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