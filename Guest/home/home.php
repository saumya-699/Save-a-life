<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../database.php';

if (isset($_GET['logout']) && $_GET['logout'] == true) {
    session_destroy();
    header("Location: /Save-a-life/Guest/login/login.php");
}

$display_name = "Invalid user";
$userdata = null;
$db = Database::getInstance();

if (isset($_SESSION['username'])) {
    $userdata = $db->getUserData($_SESSION['username']);

    switch ($userdata['Gender'])
    {
        case 'M':
            $display_name = "Mr. ".$userdata['Full_Name'];
            break;
        case 'F':
            $display_name = "Miss. ".$userdata['Full_Name'];
            break;
        default:
            $display_name = $userdata['Full_Name'];
    }
} else {
	header("Location: /Save-a-life/Guest/login/login.php");
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="../css/style2.css">
<link rel="stylesheet" href="../style.css">
</head>
<body>
<?php if (isset($_GET['success']) && $_GET['success']) {?>
	<script>
		alert("Login Successful");
	</script>
<?php } ?>
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
                  <a href="/Save-a-life/Guest/home/home.php" class="active">
                    <span class="menu-icon">
                      <i class="ri-home-fill"></i>
                    </span>
                    <span class="menu-title">Home</span>
                  </a>
                  <div class="sub-menu-list">
                  </div>
                </li>
                <li class="menu-item">
                  <a href="../donar/doner_information.php">
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
                  <a href="/Save-a-life/Guest/home/home.php?logout=true">
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
          <div class="frm-login" style="margin-top:60px!important;width:100px;">
                    <div class="card frm-form" style="">
                        <div class="card-body frm-body" style="margin-left: 10%;
                       text-align: center !important;
                       width: auto !important;
                        margin-top: 30%;line-height: 4rem">
                            

                                <h1>Welcome back to NBTS</h1>
			<h1>Dear <?php echo $display_name ?></h1>
			<h2>You have sucessfully accessed to your Donor Account</h1>
                                

                        </div>
                    </div>
</div>
        </main>
      </div>
    </div>
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>
  <script type='text/javascript' src='../js/script.js'></script>
</body>
</html>
