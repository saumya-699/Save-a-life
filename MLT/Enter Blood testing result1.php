<?php
session_start();

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
  }}
?>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
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


              <li class="menu-header" style="padding-top: 40px"><span> | </span></li>
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
        <div>
          <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>
        </div>

        <div class="container-shadow">
          <div class="container">
            <div class="wrap">
              <div class="headings">
                <center>
                  <h1>Blood Testing Result of Donor</h1>
                  <center>
              </div>
              <?php
              include "config.php";
              if (isset($_POST['add'])) {

                $did = $_POST['DID'];
                $bid = $_POST['BID'];
                $pid = $_POST['PID'];

              ?>

                <form action="createresult.php " method="POST">

                  <label for="exampleFormControlInput1" class="form-label lbl star ">Donor ID</label>
                  <input type="text" class="form-control txt-input " name="Donor_Id" value="<?php echo $did ?>">

                  <label for="exampleFormControlInput1" class="form-label lbl star">Blood Group</label>
                  <select name="blood_group" id="blood_group" class="form-control txt-input" required>
                    <option value="" disabled selected> Select Group </option>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                  </select>

                  <label for="exampleFormControlInput1" class="form-label lbl star">Malaria Test Result</label>
                  <select name="malaria_result" id="malaria_result" class="form-control txt-input " required>
                    <option value="" disabled selected>Select Result </option>
                    <option value="Positive">Positive</option>
                    <option value="Negative">Negative</option>

                  </select>

                  <label for="exampleFormControlInput1" class="form-label lbl star">HIV Test Result</label>
                  <select name="hiv_result" id="hiv_result" class="form-control txt-input " required>
                    <option value="" disabled selected>Select Result </option>
                    <option value="Positive">Positive</option>
                    <option value="Negative">Negative</option>

                  </select>

                  <label for="exampleFormControlInput1" class="form-label lbl star">HBV Test Result</label>
                  <select name="hbv_result" id="hbv_result" class="form-control txt-input" required="">
                    <option value="" disabled selected>Select Result </option>
                    <option value="Positive">Positive</option>
                    <option value="Negative">Negative</option>

                  </select>

                  <label for="exampleFormControlInput1 " class="form-label lbl star ">HCV Test Result</label>
                  <select name="hcv_result" id="hcv_result" class="form-control txt-input" required="">
                    <option value="" disabled selected>Select Result </option>
                    <option value="Positive">Positive</option>
                    <option value="Negative">Negative</option>

                  </select>

                    <label for="exampleFormControlInput1" class="form-label lbl star">VDSRL Test Result</label>
                    <select name="vdrl_result" id="vdrl_result" class="form-control txt-input" required>
                      <option value="" disabled selected>Select Result</option>
                      <option value="Positive">Positive</option>
                      <option value="Negative">Negative</option>
                    </select>



                  <label for="exampleFormControlInput1 " class="form-label lbl star ">Batch Number</label>
                  <input type="text" class="form-control txt-input " name="batch_number" value="<?php echo $bid ?>">



                  <div class="buttons ">
                    <button class="b1" name="submit" value="submit" value="submit">
                      <font size="2px">Add</font>
                    </button> &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp;<button class="b1" name="cancel" value="cancel"><a href="Enter Blood testing result.php">
                        <font size="2px">Cancel</font>
                      </a></button>
                  </div>
                </form>


            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="col " width="10 "></div>
  </div>
<?php } ?>
</main>
<script>
function validateForm() {
  var result = document.getElementById("vdrl_result").value;
  var result1 = document.getElementById("blood_group").value;
  var result2 = document.getElementById("hcv_result").value;
  var result3 = document.getElementById("hbv_result").value;
  var result4 = document.getElementById("hiv_result").value;
  var result5 = document.getElementById("malaria_result").value;


  if (result === ""||result1 === ""||result2===""||result3===""||result4===""||result5==="") {
    alert("Please select a result");
    return false;
  }
  return true;
}
</script>

</div>
</div>
<!-- partial -->
<script src='https://unpkg.com/@popperjs/core@2'></script>
<script src="./script.js"></script>
<style>
  .container-shadow {
    position: absolute;
    height: 540px;

  }

  .container {
    position: absolute;
    height: 1130px;



    box-shadow: 0px 0px 50px -20px #000;
  }

  .buttons {
    margin-top: 20px;
  }
  .icon-button__badge {
              position: absolute;
              top: 7px;
              right: 220px;
              width: 15px;
              height: 18px;
              background: red;
              color: #ffffff;
              display: flex;
              justify-content: center;
              align-items: center;
              border-radius: 50%;
            }



            .icon-button__badge1 {
              position: absolute;
              top: 0;
              right: 228;
              width: 15px;
              height: 18px;
              background: green;
              color: #ffffff;
              display: flex;
              justify-content: center;
              align-items: center;
              border-radius: 50%;
            }

            .icon-button__badge2 {
              position: absolute;
              top: 4px;
              right: 239;
              width: 15px;
              height: 18px;
              background: purple;
              color: #ffffff;
              display: flex;
              justify-content: center;
              align-items: center;
              border-radius: 50%;
            }

            .icon-button__badge3 {
              position: absolute;
              top: 15;
              right: 235px;
              width: 15px;
              height: 18px;
              background: red;
              color: #ffffff;
              display: flex;
              justify-content: center;
              align-items: center;
              border-radius: 50%;
            }


            .icon-button__badge5 {
              position: absolute;
              top: 115;
              right: 235px;
              width: 15px;
              height: 18px;
              background: purple;
              color: #ffffff;
              display: flex;
              justify-content: center;
              align-items: center;
              border-radius: 50%;
            }

</style>

</body>

</html>