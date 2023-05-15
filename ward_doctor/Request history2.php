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
      $y = $row["Hospital_ID"];
    }
  }
}
?>
<?php
include "config.php";
if (isset($_POST['view'])) {

  $did = $_POST['RequestID'];
  $sql = "SELECT * FROM blood_request where requeste_id='$did' ";
  $result = $conn->query($sql);
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
                  <h1>Blood Request History</h1>
                  <center>
              </div>
              <?php

              //print_r($row)
              if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
              ?>
                  <form action="create.php " method="POST">

                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Request ID</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['requeste_id']; ?>">


                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Patient Name</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['patient_name']; ?>">


                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Patient Age</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['patient_age']; ?>">


                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Patient Gender</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['patient_gender']; ?>">


                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Blood Group</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['blood_group']; ?>">


                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Required Blood Component</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['blood_component']; ?>">

                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Required Amount (packets)</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['required_amount']; ?>">

                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Expected date to receive</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['expected_date']; ?>">

                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Requested_date to receive</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['requested_date']; ?>">

                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Reason for the request</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['reason']; ?>">

                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Ward number</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['ward_number']; ?>">

                    <label for="exampleFormControlInput1 " name="remark " class="form-label lbl ">Remark</label>
                    <input type="text" class="form-control txt-input " name="remark" value="<?php echo $rows['remark']; ?>">

                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Status</label>
                    <input type="text" class="form-control txt-input " name="patient_name" value="<?php echo $rows['status']; ?>">





                  </form>
              <?php
                }
              }

              ?>

              <div class="buttons ">
                <center> <button class="b1" name="back" value="back">
                    <font size="2px"><a href="Request History1.php">Back</font size></a>
                  </button> </center>

              </div>
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

</html>

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

  .container-shadow {
    position: absolute;
    height: 1530px;
    box-shadow: 0px 80px 50px -20px #000;
  }

  .b1 {
    margin-left: 244px;
  }

  .container {
    position: absolute;
    height: 1530px;

    box-shadow: 0px 0px 50px -20px #000;
  }

  .buttons {
    margin-top: 20px;
  }

  .buttons {
    margin-top: 20px;
  }
</style>
</body>

</html>