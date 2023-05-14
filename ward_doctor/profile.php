<?php
session_start();
include "config.php";
if (isset($_SESSION["ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM warddoctor WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $x = $row["Name_With_Initials"];
      $y = $row["WardDoctor_ID"];
      $z= $row["Hospital_ID"];
    }
  }
}
?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Side bar</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./add_medical.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>
<body>
<!-- partial:index.partial.html -->
<div class="layout has-sidebar fixed-sidebar fixed-header">
      <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
        <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
        <div class="image-wrapper">
          <img src="assets/images/sidebar-bg.jpg" alt="sidebar background" />
        </div>
        <div class="sidebar-layout">
        <div class="sidebar-header">
          <div class="pro-sidebar-logo">
            <div><img src="logo.png" alt="logo"></div>
            <h5>Save A Life</h5>
          </div>
        </div>
        <div class="sidebar-content">
          <nav class="menu open-current-submenu">
            <ul>
              <li class="menu-header"><span></span></li>
              <li class="menu-item">
                <a href="see.php">
                  <span class="menu-icon">
                    <i class="ri-home-fill"></i>
                  </span>
                  <span class="menu-title">Home</span>

                </a>
                <div class="sub-menu-list">

                </div>
              </li>
              <li class="menu-item">
                <a href="Make blood request.php">
                  <span class="menu-icon">
                    <i class="ri-edit-box-fill"></i>
                  </span>
                  <span class="menu-title">Make Blood Request</span>
                </a>
                <div class="sub-menu-list">

                </div>
              </li>
              <li class="menu-item">
                <a href="Request History1.php">
                  <span class="menu-icon">
                    <i class="ri-history-line"></i>
                  </span>
                  <span class="menu-title">Request History</span>
                </a>
                <div class="sub-menu-list">

                </div>
              </li>


              <li class="menu-header" style="padding-top: 40px"><span> </span></li>
              <li class="menu-item">
                <a href="profile.php">
                  <span class="menu-icon">
                    <i class="ri-user-line"></i>
                  </span>
                  <span class="menu-title">Profile</span>

                </a>
              </li>
              <li class="menu-item sub-menu">
                <a href="#">
                  <span class="menu-icon">
                    <i class="ri-notification-line"></i>
                  </span>
                  <?php

                  $sql = "SELECT Count(*) AS countS from blood_request where Hospital_ID='$z' AND notifyView='0' AND (status='Available' OR status='Not Available')";

                  $results = $conn->query($sql);

                  if ($results->num_rows > 0) {
                    $row = $results->fetch_assoc();
                    $status = $row["countS"];
                    if ($status > 0) {
                      echo '<span class="icon-button__badge">' . $status . '</span>';
                    }
                  }

                  ?>



                  <span class="menu-title">Notifications</span>
                </a>
                <div class="sub-menu-list">
                  <ul>
                    <li class="menu-item">
                      <a href="Notifications.php">
                        <span class="menu-title"> <?php

                                                  $sql = "SELECT Count(*) AS countS from blood_request where Hospital_ID='$z' AND notifyView='0' AND (status='Available' OR status='Not Available')";

                                                  $results = $conn->query($sql);

                                                  if ($results->num_rows > 0) {
                                                    $row = $results->fetch_assoc();
                                                    $status = $row["countS"];
                                                    if ($status > 0) {
                                                      echo '<span class="icon-button__badge3">' . $status . '</span>';
                                                    }
                                                  }

                                                  ?>Request Results</span>
                      </a>

                    </li>
                  </ul>
                </div>
              </li>

              <li class="menu-item">
                <a href="logout.php">
                  <span class="menu-icon">
                    <i class="ri-logout-box-r-line"></i>
                  </span>
                  <span class="menu-title">Logout</span>
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


            <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>
            <!-- add your content from here -->

            <?php include('get_info.php') ?>
            <?php 
                if(isset($_SESSION['update-user'])){
                    echo $_SESSION['update-user'];
                    unset($_SESSION['update-user']);

                }
                if(isset($_SESSION['change-pwd']))
                {
                    echo $_SESSION['change-pwd'];
                    unset($_SESSION['change-pwd']);

                }
            ?> 

            <div class="container-shadow">
            </div>
            <div class="container">
              <div class="wrap">
                <div class="headings">
                  <center><span><h1>Profile</h1></span><center>
                
                </div>
                    
                    <label for="exampleFormControlInput1" class="form-label lbl star">Name with Initials</label>
                   <input type="text" class="form-control txt-input" value="<?php echo $name; ?>" readonly>
                           
                    <label for="exampleFormControlInput1" class="form-label lbl star">SLMC Number</label>
                    <input type="text" class="form-control txt-input" value="<?php echo $slmc; ?>" readonly>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Hospital Name</label>
                    <input type="text" class="form-control txt-input" value="<?php echo $hospital; ?>" readonly>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Email</label>
                    <input type="text" class="form-control txt-input" value="<?php echo $email;?> " readonly>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Contact Number</label>
                    <input type="text" class="datepicker_input form-control txt-input" value="<?php echo $contact; ?>" readonly>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Date of Appointment</label>
                    <input type="text" class="form-control txt-input" value="<?php echo $apponitmentdate;?> " readonly>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Username</label>
                    <input type="text" class="form-control txt-input" value="<?php echo $username; ?>" readonly>
                                      <br><br><br><br>
                         
                            <div class='row btn-buttons'>
                                  
                            <a href="update_profile.php"><input type='submit' name='BtnSubmit' value='Edit' class='b1'></a>
                            <input type='submit' name='BtnSubmit' value='Cancel' class='b1' onclick='history.back()'>
                            
                              </div>
               </form>
</div>
</div>
          
        </main>
      </div>
    </div>
<!-- partial -->
<script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>
<style>
  .icon-button__badge {
    position: absolute;
    top: 9px;
    right: 226px;
    width: 15px;
    height: 18px;
    background: red;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
  }
  .icon-button__badge3 {
    position: absolute;
    top: 15px;
    right: 245px;
    width: 15px;
    height: 18px;
    background: red;
    color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
  }
</style>
</body>
</html>
