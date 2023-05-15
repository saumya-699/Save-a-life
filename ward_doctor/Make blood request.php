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
      $y= $row["Hospital_ID"];
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>side-ward doctor</title>

  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
  <link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" href="./stylek2.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="layout has-sidebar fixed-sidebar fixed-header">
    <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
      <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>

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
                <a href="Profile.php">
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

                  $sql = "SELECT Count(*) AS countS from blood_request where Hospital_ID='$y' AND notifyView='0' AND (status='Available' OR status='Not Available')";

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

                                                  $sql = "SELECT Count(*) AS countS from blood_request where Hospital_ID='$y' AND notifyView='0' AND (status='Available' OR status='Not Available')";

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
        <!-- add your content from here -->
        <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>


        <div class="container-shadow">
          <div class="container">
            <div class="wrap">
              <div class="headings">
                <center>
                  <h1>Make Blood Request</h1>
                  <center>
              </div>

              <form action="create.php " method="POST" name="myForm">

                <label for="exampleFormControlInput1" class="form-label lbl star">Patient Name</label>
                <input type="text" class="form-control txt-input " name="patient_name" placeholder="Type patient name " required="">


                <label for="exampleFormControlInput1" class="form-label lbl star" name="date_Of_birth">Patient's Date of birth (MM/DD/YYYY)</label>
                <div class="input-group mb-4 ">
                  <i class="fas fa-calendar-alt input-group-text"></i>
                  <input type="date" name="date_Of_birth" class="datepicker_input form-control txt-input" placeholder="Select Date" required="" max="<?= date('Y-m-d') ?>">
                </div>

                <label for="exampleFormControlInput1" class="form-label lbl star">Patient Gender</label>
                <select name="patient_gender" id="patient_gender" class="form-control txt-input" required>
                  <option value=""> Select gender </option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>


                <label for="exampleFormControlInput1" class="form-label lbl star">Blood Group</label>
                <select name="blood_group" id="blood_group" class="form-control txt-input" required>
                  <option value="">Select group</option>
                  <option value="O-">O-</option>
                  <option value="O+">O+</option>
                  <option value="A-">A-</option>
                  <option value="A+">A+</option>
                  <option value="B-">B-</option>
                  <option value="B+">B+</option>
                  <option value="AB-">AB-</option>
                  <option value="AB+">AB+</option>
                </select>


                <label for="exampleFormControlInput1" class="form-label lbl star">Required Blood Component</label>
                <select name="blood_component" id="blood_component" class="form-control txt-input" required>
                  <option value="">Select component </option>
                  <option value="Whole Blood">Whole Blood</option>
                  <option value="Red cells">Red Cells</option>
                  <option value="White Cells">Red Cells</option>
                  <option value="Platelets">Platelets</option>
                  <option value="Plasma">Plasma</option>
                </select>

                <label for="exampleFormControlInput1" class="form-label lbl star">Required Amount (packets)</label>
                <select name="required_amount" id="required_amount" class="form-control txt-input " required>
                  <option value="">Select no.of.packets </option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                </select>


                <label for="exampleFormControlInput1" class="form-label lbl star" name="expected_date">Expected date to receive (MM/DD/YYYY)</label>
                <div class="input-group mb-4">
                  <i class="fas fa-calendar-alt input-group-text"></i>
                  <input type="date" class="datepicker_input form-control txt-input" name="expected_date" placeholder="Select Date" required="" min="<?= date('Y-m-d') ?>">
                </div>

                <label for="exampleFormControlInput1" class="form-label lbl star" name="reason">Reason for the request</label>
                <textarea name="reason" id="" cols="30 " rows="10 " class="form-control txt-input " placeholder="Type reason " required></textarea>

                <label for="exampleFormControlInput1" class="form-label lbl star">Ward number</label>
                <select name="ward_number" id="ward_number" class="form-control txt-input " required>
                  <option value=""> Select Ward number </option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                <label for="exampleFormControlInput1" name="remark" class="form-label lbl">Remark</label>
                <textarea name="remark" id="" cols="30 " rows="10 " class="input " placeholder="Type remark "></textarea>

                <div class="buttons ">
                  <button class="b1" name="submit" value="submit" value="submit">
                    <font size="2px">Request</font>
                  </button> &nbsp; &nbsp; &nbsp; &nbsp;
                  <button class="b1" name="cancel" value="cancel"><a href="Make blood request.php">
                      <font size="2px">Cancel</font>
                    </a></button>
                </div>
              </form>

            </div>
          </div>
        </div>
    </div>
    <div class="col " width="10 "></div>
  </div>

  </main>
  </div>
  </div>
  <!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script>
  <script src="./script.js"></script>

</body>
<script>
  const form = document.querySelector('form');
  const bloodGroupSelect = form.querySelector('#blood_group');
  const validBloodGroups = ['O-', 'O+', 'A-', 'A+', 'B-', 'B+', 'AB-', 'AB+'];

  form.addEventListener('submit', (event) => {
    if (!validBloodGroups.includes(bloodGroupSelect.value)) {
      event.preventDefault();
      alert('Please select a valid blood group');
    }
  });
</script>

</html>

<style>
  .container-shadow {
    position: absolute;
    height: 1330px;
    box-shadow: 0px 80px 50px -20px #000;
  }

  .container {
    position: absolute;
    height: 1330px;

    box-shadow: 0px 0px 50px -20px #000;
  }

  .buttons {
    margin-top: 20px;
  }
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