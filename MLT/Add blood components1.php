<?php
session_start();
?>

<?php
if (isset($_SESSION["ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $date = date("Y/m/d");
  $query = "SELECT * FROM mlt WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $y=$row["Hospital_ID"];

    }
  }}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>side-MLT</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
    <link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
    <link rel="stylesheet" href="./style.css">
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
                            <li class="menu-header"><span> </span></li>
                            <li class="menu-item">
                                <a href="seeMLT.php">
                                    <span class="menu-icon">
                                        <i class="ri-home-fill"></i>
                                    </span>
                                    <span class="menu-title">Home</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="view donated blood information.php">
                                    <span class="menu-icon">
                                        <i class="ri-folder-open-fill"></i>
                                    </span>
                                    <span class="menu-title">View donated blood</span>
                                </a>
                            </li>
                            <li class="menu-item sub-menu">
                                <a href="#">
                                    <span class="menu-icon">
                                        <i class="ri-file-edit-fill"></i>
                                    </span>
                                    <span class="menu-title">Enter test results</span>
                                </a>
                                <div class="sub-menu-list">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="Enter Blood testing result.php">
                                                <span class="menu-title">Blood Testing</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="Cross matching test result.php">
                                                <span class="menu-title">Cross Matching</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="Send test results for approval.php">
                                    <span class="menu-icon">
                                        <i class="ri-file-transfer-line"></i>
                                    </span>
                                    <span class="menu-title">Send test results for<br> approval</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="View approval of blood test results1.php">
                                    <span class="menu-icon">
                                        <i class="ri-folder-open-line"></i>
                                    </span>
                                    <span class="menu-title">View approval of blood <br> test results</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="Add blood components.php">
                                    <span class="menu-icon">
                                        <i class="ri-file-add-line"></i>
                                    </span>
                                    <span class="menu-title">Add blood componets</span>
                                </a>
                            </li>

                            <li class="menu-item sub-menu">
                                <a href="#">
                                    <span class="menu-icon">
                                        <i class="ri-hospital-line"></i>
                                    </span>
                                    <span class="menu-title">Blood Stock</span>
                                </a>
                                <div class="sub-menu-list">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="Blood stock.php">
                                                <span class="menu-title">Stock Info</span>
                                            </a>
                                        </li>

                                        <li class="menu-item">
                                            <a href="LessStockComponentsI.php">
                                                <span class="menu-title">Low stock blood components</span>
                                            </a>
                                        </li>


                                        <li class="menu-item">
                                            <a href="ExpiredComponentsI.php">
                                                <span class="menu-title">Blood expiry Information</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-item sub-menu">
                                <a href="#">
                                    <span class="menu-icon">
                                        <i class="ri-file-edit-fill"></i>
                                    </span>
                                    <span class="menu-title">Reports</span>
                                </a>
                                <div class="sub-menu-list">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="Report.php">
                                                <span class="menu-title">Blood Testing Report</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="Report1.php">
                                                <span class="menu-title">Cross Matching Report</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="ReportGenerationStock.php">
                                                <span class="menu-title">Blood Stock Report</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="menu-header" style="padding-top: 40px"><span> </span></li>
                            <li class="menu-item">
                                <a href="Edit ProfileMlt.php">
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

                  $sql = "SELECT COUNT(countS) AS total_count FROM (
                    SELECT COUNT(*) AS countS FROM donation_records WHERE Hospital_ID='$y' and End_donation ='1' and AddStatus='0' GROUP by Batch,Donation_date) AS subquery";

                  $results = $conn->query($sql);

                  if ($results->num_rows > 0) {
                    $row = $results->fetch_assoc();
                    $status = $row["total_count"];
                    if ($status > 0) {
                      echo '<span class="icon-button__badge">' . $status . '</span>';
                    }
                  }

                  ?>




                  <?php
                  $rql = "SELECT COUNT(*) AS countS FROM blood_request WHERE Hospital_ID = '$y' AND status='Available' and CrossMatching_Add='0'";
                  $result1 = $conn->query($rql);
                  if ($result1->num_rows > 0) {
                    $row = $result1->fetch_assoc();
                    $status = $row["countS"];
                    if ($status > 0) {
                      echo '<span class="icon-button__badge2">' . $status . '</span>';
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

                                                  $sql = "SELECT COUNT(countS) AS total_count FROM (
                                                 SELECT COUNT(*) AS countS FROM donation_records WHERE Hospital_ID='$y' and End_donation ='1' and AddStatus='0' GROUP by Batch,Donation_date) AS subquery";

                                                  $results = $conn->query($sql);

                                                  if ($results->num_rows > 0) {
                                                    $row = $results->fetch_assoc();
                                                    $status = $row["total_count"];
                                                    if ($status > 0) {
                                                      echo '<span class="icon-button__badge3">' . $status . '</span>';
                                                    }
                                                  }

                                                  ?>

                          <span>Donation</span>
                      </a>

                    <li class="menu-item">
                      <a href="Notifications1.php">
                        <span class="menu-title">
                          <?php
                          $rql = "SELECT COUNT(*) AS countS FROM blood_request WHERE Hospital_ID = '$y' AND status='Available' and CrossMatching_Add='0'";
                          $result1 = $conn->query($rql);
                          if ($result1->num_rows > 0) {
                            $row = $result1->fetch_assoc();
                            $status = $row["countS"];
                            if ($status > 0) {
                              echo '<span class="icon-button__badge5">' . $status . '</span>';
                            }
                          }
                          ?>Cross Matching Testing</span>
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
                                    <span class="menu-title">Log out</span>
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
                <div>
                    <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>
                </div>

                <div class="container-shadow">
                    <div class="container">
                        <div class="wrap">
                            <div class="headings">
                                <center>
                                    <h1>Add Blood Components</h1>
                                    <center>
                            </div>
                            <?php
                            include "config.php";
                            if (isset($_POST['add'])) {

                                $did = $_POST['RequestID'];
                                $res_id = $_POST['TestResultID'];
                            ?>
                                <form action="Create_bloodComponent.php " method="POST">

                                    <!-- <label for="exampleFormControlInput1 " class="form-label lbl star ">Blood Bag ID</label>
                                    <input type="text" class="form-control txt-input " name="Blood_bagID" placeholder="Type Blood Bag ID" required=""> -->


                                    <label for="exampleFormControlInput1 " class="form-label lbl star ">Blood Group</label>
                                    <input type="text" class="form-control txt-input " name="blood_group" value="<?php echo $did ?>">
                                    <input type=hidden name=testid value="<?php echo $res_id ?>">


                                    <!-- <label for="exampleFormControlInput1 " class="form-label lbl star ">Blood Component Type</label>
                <select name="blood_component" id=" " class="form-control txt-input " required="">
                  <option value=" " diabled>Select Component </option>
                  <option value="Red cell">Red cell</option>
                  <option value="Platelet">Platelet</option>s
                  <option value="Plasma">Plasma</option>
                </select> --> <label for="exampleFormControlInput1 " class="form-label lbl star ">Blood Component Type</label>
                                    <input type="checkbox" id="Red Cells" name="Red_Cells" value="1" style="display: inline-block;">
                                    <label for="Red Cells" style="display: inline-block;">Red Cells</label><br>
                                    <input type="checkbox" id="White Cells" name="White_Cells" value="1" style="display: inline-block;">
                                    <label for="White Cells" style="display: inline-block;">White Cells</label><br>
                                    <input type="checkbox" id="Platelets" name="Platelets" value="1" style="display: inline-block;">
                                    <label for="Platelets" style="display: inline-block;">Platelets</label><br>
                                    <input type="checkbox" id="Plasma" name="Plasma" value="1" style="display: inline-block;">
                                    <label for="Plasma" style="display: inline-block;">Plasma</label>


                                    <!-- <label for="exampleFormControlInput1 " class="form-label lbl star " name="Expiry date">Expiry date (MM/DD/YYYY)</label>
                                    <div class="input-group mb-4 ">
                                        <i class="fas fa-calendar-alt input-group-text"></i>
                                        <input type="date" class="datepicker_input form-control txt-input" name="expiry_date" placeholder="Select Date" required="" min="<?= date('Y-m-d') ?>">
                                    </div> -->



                                    <div class="buttons ">
                                        <button class="b1" name="submit" value="submit" value="submit">
                                            <font size="2px">Add</font>
                                        </button> &nbsp; &nbsp; &nbsp; &nbsp;
                                        <button class="b1" name="cancel" value="cancel"><a href="Add blood components.php">
                                                <font size="2px">Cancel</font>
                                            </a></button>
                                    </div>
                                </form>

                            <?php } ?>

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
    <style>
        .container-shadow {
            position: absolute;
            height: 630px;
            box-shadow: 0px 80px 50px -20px #000;
        }

        .container {
            position: absolute;
            height: 700px;

            box-shadow: 0px 0px 50px -20px #000;
        }

        .buttons {
            margin-top: 20px;
        }
    </style>
</body>

</html>