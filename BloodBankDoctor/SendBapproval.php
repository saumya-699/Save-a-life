<?php
session_start();
if (isset($_SESSION["ID"])) {
  include "conp.php";
  $date = date("Y/m/d");
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM mlt WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $x = $row["Hospital_ID"];
      $hid = $x;
    }
  }

  $vql = "SELECT process_date, batch_number,status FROM blood_testing_result Where Hospital_ID ='$x' and process_date ='$date' GROUP BY  batch_number ";
  $result = $conn->query($vql);
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>side bar- blood bank doctor</title>

  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
  <link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
  <link rel="stylesheet" href="./styleM.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" href="./stylek.css">
  <script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="StyleSearch.css">
  <link rel="stylesheet" href="./StyleSheetNotification.css">
</head>

<body>
  <!-- partial:index.partial.html -->
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
                <a href="Home.php">
                  <span class="menu-icon">
                    <i class="ri-home-fill"></i>
                  </span>
                  <span class="menu-title">Home</span>
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
                      <a href="stockI.php">
                        <span class="menu-title">Stock Info</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="checkInternalStockI.php">
                        <span class="menu-title">Internal Stock Availability</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="checkExternalStockI.php">
                        <span class="menu-title">External Stock Availability</span>
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
                    <i class="ri-message-2-fill"></i>
                  </span>
                  <span class="menu-title">Request</span>
                </a>
                <div class="sub-menu-list">
                  <ul>
                    <li class="menu-item">
                      <a href="ViewInternalRequestI.php">
                        <span class="menu-title">Check Internal Requests</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="checkExternalRequestI.php">
                        <span class="menu-title">Check External Requests</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="sendRequestI.php">
                        <span class="menu-title">Send requests</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="sentRequestHistoryI.php">
                        <span class="menu-title">Send Request History</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item sub-menu">
                <a href="#">
                  <span class="menu-icon">
                    <i class="ri-article-fill"></i>
                  </span>
                  <span class="menu-title">Test Results</span>
                </a>
                <div class="sub-menu-list">
                  <ul>
                    <li class="menu-item">
                      <a href="BloodREsultsI.php">
                        <span class="menu-title">Blood Test</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="CheckCrossMatchingResultsI.php">
                        <span class="menu-title">Cross Matching</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item sub-menu">
                <a href="#">
                  <span class="menu-icon">
                    <i class="ri-article-fill"></i>
                  </span>
                  <span class="menu-title">Donors</span>
                </a>
                <div class="sub-menu-list">
                  <ul>
                    <li class="menu-item">
                      <a href="View_Donors_BI.php">
                        <span class="menu-title">View</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="donorEmail.php">
                        <span class="menu-title">Send Non -Emergency Email</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="menu-item sub-menu">
                <a href="#">
                  <span class="menu-icon">
                    <i class="ri-message-2-fill"></i>
                  </span>
                  <span class="menu-title">Reports</span>
                </a>
                <div class="sub-menu-list">
                  <ul>
                    <li class="menu-item">
                      <a href="ReportGenerationStock.php">
                        <span class="menu-title">Stock Reports</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ReportGenerationCrossMatching.php">
                        <span class="menu-title">Cross Matching Reports</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ReportGenerationBlood.php">
                        <span class="menu-title">Blood Request Reports</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ReportGeneration_BI.php">
                        <span class="menu-title">Donation Details Reports</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="ReportGeneration_Request.php">
                        <span class="menu-title">External Requests Reports</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>



              <li class="menu-header" style="padding-top: 40px"><span> </span></li>
              <li class="menu-item">
                <a href="profileBI.php">
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

                  $sql = "SELECT Count(*) AS countS from blood_request where Hospital_ID='$hid' and status ='Pending' and send_status='1'";

                  $results = $conn->query($sql);

                  if ($results->num_rows > 0) {
                    $row = $results->fetch_assoc();
                    $status = $row["countS"];
                    if ($status > 0) {
                      echo '<span class="icon-button__badge">' . $status . '</span>';
                    }
                  }

                  ?>
                  <?php

                  $vql = "SELECT COUNT(countS) AS total_count FROM (
                                    SELECT COUNT(*) AS countS FROM blood_testing_result WHERE send_status='1' and status = 'Pending' and Hospital_ID='$hid' GROUP by process_date,batch_number) AS subquery";

                  $result = $conn->query($vql);

                  if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $status = $row["total_count"];
                    if ($status > 0) {
                      echo '<span class="icon-button__badge1">' . $status . '</span>';
                    }
                  }

                  ?>



                  <?php
                  $rql = "SELECT COUNT(*) AS countS FROM cross_matching_testing_result WHERE Hospital_ID = '$hid' AND Status = 'Pending' and send_status='1'";
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

                                                  $sql = "SELECT Count(*) AS countS from blood_request where Hospital_ID='$hid' and status ='Pending' and send_status='1'";

                                                  $results = $conn->query($sql);

                                                  if ($results->num_rows > 0) {
                                                    $row = $results->fetch_assoc();
                                                    $status = $row["countS"];
                                                    if ($status > 0) {
                                                      echo '<span class="icon-button__badge3">' . $status . '</span>';
                                                    }
                                                  }

                                                  ?>Blood Request</span>
                      </a>
                    <li class="menu-item">
                      <a href="Notifications1.php">
                        <span class="menu-title">
                          <?php

                          $vql = "SELECT COUNT(countS) AS total_count FROM (
                            SELECT COUNT(*) AS countS FROM blood_testing_result WHERE send_status='1' and status = 'Pending' and Hospital_ID='$hid' GROUP by process_date,batch_number) AS subquery";

                          $result = $conn->query($vql);

                          if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $status = $row["total_count"];
                            if ($status > 0) {
                              echo '<span class="icon-button__badge4">' . $status . '</span>';
                            }
                          }

                          ?>Blood Testing</span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="Notifications2.php">
                        <span class="menu-title">
                          <?php
                          $rql = "SELECT COUNT(*) AS countS FROM cross_matching_testing_result WHERE Hospital_ID = '$hid' AND Status = 'Pending' and send_status='1'";
                          $result1 = $conn->query($rql);
                          if ($result1->num_rows > 0) {
                            $row = $result1->fetch_assoc();
                            $status = $row["countS"];
                            if ($status > 0) {
                              echo '<span class="icon-button__badge5">' . $status . '</span>';
                            }
                          }
                          ?>Cross Matching</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="menu-item">
                <a href="logoutI.php">
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
        <div>
          <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>
        </div>
        <form method="post" action="search_donor.php">

          <div class="ta">


            <font size=3> Search by </font></b> <br /> <br /><select name="search" class="select">
              <option value="Donor_Id" selected><b> Donor Id</b></option>
              <option value="Donor_Name"><b> Donor Name</b></option>
              <option value="NIC"><b>NIC</b></option>
              <option value="Blood_Group"><b>Blood Group</b></option>
              <option value="Gender"><b>Gender</b></option>
              <option value="province"><b>Provicel</b></option>
              <option value="postal"><b> Postal Code</b></option>
            </select>


            <input type="text" placeholder="type here" name="data" id="data" class="box">

            <button type="submit" name="BtnSubmit" id="search" class="b1"><b>Search</b></button>
          </div>


        </form>



        <form action="SendBapproval1.php" method="POST">

          <?php
          if ($result->num_rows > 0) {

            //   echo  "<div class='tab'>";
            echo  "<table border=1>" . "<tr>" . "<th style='text-align:center'>" . "Processed Date" . "</th>" . "<th style='text-align:center;'>" . "Batch number" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Click to view more information" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Click button to request for approval" . "</th>" . "</tr>";
            echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";
            while ($row = $result->fetch_assoc()) {


              echo  "<tr>" . "<td>" . $row["process_date"] . "</td>" . "<td>" . $row["batch_number"] . "</td>";

              echo "<td><form method='POST' action ='Send test results for approval1.php'>
   <input type=hidden name=Requestbatch value=" . $row["batch_number"] . " >
   <input type=hidden name=RequestID value=" . $row["process_date"] . " >
   <button type=submit value=view name=view  id=btn class='x'><i class='fa-sharp fa-solid fa-eye'></i></button>
     </form>    	

    </td>";
              echo "<td><form method='POST' action =''>
    <input type=hidden name=RequestID value=" . $row["process_date"] . " >
    <input type=hidden name=Requestbatch value=" . $row["batch_number"] . " >
    <button type=submit value=submit   class='b2'>Send</button>
     </form>    	

    </td>";
              //echo "</div>";	
              echo "</tr>";

              echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";
            }
            echo  "</font>";
            echo  "</font>";
            echo "</table>";
          } else {
            echo "Error in " . $vql . "<br>" . $conn->error;

            echo "no results";
          }

          $conn->close();
          ?>

          <style>
            .b2 {
              margin-top: 5px;
              background-color: red;
              color: white;
              border: 5px solid red;
              border-radius: 5px;
              width: 80px;
              height: 35px;


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