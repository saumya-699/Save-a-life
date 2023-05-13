<?php
session_start();
include "config.php";
if (isset($_SESSION["ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM mlt WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $x = $row["MLT_ID"];
      $y = $row["Hospital_ID"];
    }
  }
}

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
  <script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>

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
        <div>
          <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>
        </div>
        <h1></h1>


        <h1>Enter Cross Matching Test Result</h1>
        <form method="post" action="Cross matching test result.php">

          <div class="midiv">


            <font size=3> </font></b> <br /> <br /><select name="search" class="select">
              <option value="requeste_id"><b> Request ID</b></option>
            </select>


            <input type="text" placeholder="type here" name="data" id="data" class="box">

            <button type="submit" name="BtnSubmit" id="search" class="b1"><b>Search</b></button>


        </form>

        <div class="box1">

          <?php
          if (isset($_POST['BtnSubmit'])) {
            $search = $_POST["search"];
            $data = $_POST["data"];
            $sql = "SELECT * FROM blood_request WHERE $search = '$data' AND Hospital_ID = '$y'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
              echo  "<div class='tab'>";
              echo "<font color=black>";
              echo "<font size=3>";


              echo  "<table >" . "<tr>" . "<th>" . "Requested Date" . "</th>" . "<th>" . "Receive date" . "</th>" . "<th>" . "Request ID" . "</th>" . "<th>" . "Blood Group" . "</th>" . "<th>" . "Status" . "</th>" . "<th>" . "Action" . "</th>" . "</tr>";
              echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=6'>" . "</td>" . "</tr>";

              // while ($row = $result->fetch_assoc()) {

              //   echo  "<tr style='height:60px'>" . "<td>" . $row["requested_date"] . "</td>" . "<td>" . $row["expected_date"] . "</td>" . "<td>" . $row["requeste_id"] . "</td>" . "<td>" . $row["blood_group"] . "</td>" . "<td>" . $row["status"] . "</td>";

              //   echo "<td class='tb'><form method='POST' action ='Cross matching test result1.php'>
              // <input type=hidden name=RequestID value=" . $row["requeste_id"] . " >
              // <button type=submit value=add name=add  class='fp'><i class='fa-solid fa-plus'></i></button>
              // </form>  

              //   </td>";
              //   echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=6'>" . "</td>" . "</tr>";
              // }
              while ($row = $result->fetch_assoc()) {
                // Retrieve the status value from the current row
                $status = $row["status"];
                $Add = $row["CrossMatching_Add"];
                // Set the disabled flag based on the status value

                $disabled = (($status !== 'Available') || ($Add == '1')) ? 'disabled' : '';


                // Generate the button HTML with the disabled flag
                $button_html = "<button type='submit' value='add' name='add' class='fp' $disabled><i class='fa-solid fa-pen-to-square'></i></button>";

                // Generate the table row HTML with the button included
                echo "<tr style='height:60px'>" .
                  "<td>" . $row["requested_date"] . "</td>" .
                  "<td>" . $row["expected_date"] . "</td>" .
                  "<td>" . $row["requeste_id"] . "</td>" .
                  "<td>" . $row["blood_group"] . "</td>" .
                  "<td>" . $row["status"] . "</td>" .
                  "<td class='tb'>" .
                  "<form method='POST' action='Cross matching test result1.php'>" .
                  "<input type='hidden' name='RequestID' value='" . $row["requeste_id"] . "'>" .
                  $button_html .

                  "</form>" .
                  "</td>" .
                  "</tr>" .
                  "<tr>" .
                  "<td style='height:20px;background-color:#F5F5F5;' colspan='6'></td>" .
                  "</tr>";
              }



              echo "</font>";
              echo  "</font>";

              echo  "</div>";

              echo "</table>";
            } else {
              ///printf("Query failed: %s\n", $conn->error);
              echo "no results";
            }
          }

          $conn->close();
          ?>
          <style>
            table {



              width: 750px;
              height: 15px;
              border-collapse: collapse;
              margin-top: 40px;
              border: 0px transparent;

            }

            h1 {
              margin-top: -10px;
              margin-left: 200px;
              margin-bottom: 100px;
            }

            .box1 {
              height: 30px;
              width: 150px;
              margin-left: -170px;
              margin-top: 100px;
              border-radius: 20px;
              border: none;
              text-align: center;
            }


            th {


              white-space: nowrap;
              overflow: hidden;
              text-overflow: ellipsis;
              text-align: center;
              padding-top: 25px;
              padding-bottom: 25px;
              padding-left: 20px;
              padding-right: 10px;
              border: 0px transparent;

            }

            td {
              text-align: center;
              padding: 1px;


            }

            .select {

              height: 40px;
              width: 130px;
              color: #FFF5F3;
              margin-left: 6px;
              border-radius: 20px;
              background-color: #F35050;
              border: none;
              cursor: pointer;
              text-align: center;
              margin-top: 10px;
              margin-bottom: 50px;

            }

            .box {

              width: 130px;
              height: 40px;
              margin-left: 20px;
              margin-top: 10px;
              border-radius: 30px;
              border: none;
              text-align: center;


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



            .b1 {
              height: 40px;
              width: 130px;
              color: #d9dbdb;
              margin-left: 6px;
              border-radius: 20px;
              background-color: #d9dbdb;
              border: none;
              cursor: pointer;
              margin-top: 10px;
              margin-bottom: 50px;



            }




            .midiv {

              margin-left: 150px;
              margin-bottom: -10px;
              padding: 15px 10px 30px 20px;
              margin-top: -100px;
              outline: none;
              width: 774.5px;
            }



            .f2 {

              margin-left: 50px;
              margin-top: -100px;
              background-color: transparent;
              border: none;
              cursor: pointer;
              margin-bottom: 0px;


            }


            .f1 {

              background-color: transparent;
              margin-left: 10px;
              margin-right: 20px;
              margin-bottom: 10px;
              margin-top: 10px;
              border: none;
              cursor: pointer;


            }

            .fp {
              margin-top: 10px;
              margin-left: 30px;
              margin-bottom: -100px;
              background-color: transparent;
              border: none;
              cursor: pointer;
              font-size: 20px;
              padding: 10px 20px;
            }

            .tb {
              display: inline-flex;
              justify-content: space-evenly;
              flex-wrap: nowrap;
              align-items: baseline;
              flex-direction: row;
            }

            .tab {

              background-color: #F5F5F5;
              margin-top: -55px;
              margin-left: 65px;
              margin-right: 265px;




            }


            .ta {

              background-color: #F5F5F5;
              margin-top: 60px;
              margin-bottom: 0px;
              margin-left: 370px;
              margin-right: 119px;
              padding-left: 20px;

            }



            tr {

              background-color: white;

            }

            .visible {
              cursor: pointer;


            }

            .layout {
              background-color: #d9dbdb;
            }
          </style>


        </div>
      </main>

    </div>
  </div>
  <!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script>
  <script src="./script.js"></script>
</body>

</html>