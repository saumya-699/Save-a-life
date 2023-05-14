<?php
session_start();
require "conp.php";
?>

<?php
if (isset($_SESSION["ID"])) {
 
  $m = $_SESSION["Name"];
  $date = date("Y/m/d");
  $query = "select * from bloodbank_doctor where UserName ='$m'";



  $resultd = $conn->query($query);

  //echo "Error in ".$vql."<br>".$conn->error;

  if ($resultd->num_rows > 0) {

    while ($row = $resultd->fetch_assoc()) {

      $x = $row["BloodBank_doctor_ID"];
      $y = $row["Hospital_ID"];
    }
  }

?>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>side bar-director</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
    <link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
    <link rel="stylesheet" href="./styleM.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="./AddbbStyle.css">
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
                          <span class="menu-title">Low Stock Blood Components</span>
                        </a>
                      </li>


                      <li class="menu-item">
                        <a href="ExpiredComponentsI.php">
                          <span class="menu-title">Blood Expiry Information</span>
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
                          <span class="menu-title">Send Requests</span>
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

                    $sql = "SELECT Count(*) AS countS from blood_request where Hospital_ID='$y' and status ='Pending' and send_status='1'";

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
                                    SELECT COUNT(*) AS countS FROM blood_testing_result WHERE send_status='1' and status = 'Pending' and Hospital_ID='$y' GROUP by process_date,batch_number) AS subquery";

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
                    $rql = "SELECT COUNT(*) AS countS FROM cross_matching_testing_result WHERE Hospital_ID = '$y' AND Status = 'Pending' and send_status='1'";
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

                                                    $sql = "SELECT Count(*) AS countS from blood_request where Hospital_ID='$y' and status ='Pending' and send_status='1'";

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
                            SELECT COUNT(*) AS countS FROM blood_testing_result WHERE send_status='1' and status = 'Pending' and Hospital_ID='$y' GROUP by process_date,batch_number) AS subquery";

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
                            $rql = "SELECT COUNT(*) AS countS FROM cross_matching_testing_result WHERE Hospital_ID = '$y' AND Status = 'Pending' and send_status='1'";
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


          <div class="container-shadow">
          </div>
          <div class="container">
            <div class="wrap">
              <div class="headings">
                <center><span>
                    <h1>Notification</h1>
                  </span>
                  <center>

              </div>
              <h4><b>Notification Received</b></h4>
              &nbsp; &nbsp;  From <input type="date" name="From" id="From" class="yu">
              &nbsp; &nbsp; &nbsp;To <input type="date" name="To" id="To" class="yu"><br><br>
              &nbsp; &nbsp; Search: <input type="text" id="searchInput" class="box">

              <h2>Blood Request</h2>
            <?php
            $vql = "SELECT Warddoctor.Name_With_Initials
               FROM Warddoctor
               INNER JOIN blood_request ON Warddoctor.WardDoctor_ID =blood_request.WardDoctor_ID";
            $result = $conn->query($vql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $z = $row['Name_With_Initials'];
              }
            }

            $rql = "SELECT * from blood_request where Hospital_ID ='$y' and send_status='1' ORDER BY requested_date DESC";
            $resultx = $conn->query($rql);

            if ($resultx->num_rows > 0) {

              echo "<table id='dataTable'><thead><tr><th style='text-align:center;width:120px;'>Requested Blood Group</th><th style='text-align:center;width:120px;'>Requested Date</th><th style='text-align:center;width:120px;'>Requested Doctor</th><th style='width:120px;'>Action</th></tr></thead><tbody>";

              while ($row = $resultx->fetch_assoc()) {
                $status = $row['status'];
                $status_class = ($status === 'Pending') ? 'pending-row' : '';

                echo "<tr class='$status_class'><td>" . $row["blood_group"] . "</td><td>" . $row["requested_date"] . "</td>
                <td>" . $z . "</td>
                <td><form method='POST' action ='bloodrequestnotify.php'>
                <input type=hidden name=Request_ID value=".$row["requeste_id"]." >
                <button type=submit value=view name=view  class='fp'><i class='fa-solid fa-arrow-right'></i></button>
                </form></td></tr>";
              }

              echo "</tbody></table>";
              echo "<br>";
              echo "<br>";
              echo "<br>";
            }
          }
          $conn->close();
            ?>

            </div>
          </div>
      </div>

      </main>
    </div>
    </div>
    <!-- partial -->
    <script src='https://unpkg.com/@popperjs/core@2'></script>
    <script src="./script.js"></script>

  </body>

  <script>
    function filterTable() {
      // Get the table, rows, and search/filter values
      const table = document.getElementById('dataTable');
      const rows = table.getElementsByTagName('tr');
      const fromDate = document.getElementById('From').value;
      const toDate = document.getElementById('To').value;
      const searchInput = document.getElementById('searchInput').value.toUpperCase();

      // Loop through all rows in the table, hide rows that don't match the filter criteria
      for (let i = 1; i < rows.length; i++) { // start at i=1 to skip header row
        const row = rows[i];
        const date = row.cells[1].textContent.trim(); // assumes date is in second cell of each row

        if ((fromDate && date < fromDate) || (toDate && date > toDate)) { // hide rows outside date range
          row.style.display = 'none';
        } else if (searchInput) { // hide rows that don't match search text
          let matchFound = false;
          const cells = row.getElementsByTagName('td');
          for (let j = 0; j < cells.length; j++) {
            const cell = cells[j];
            const text = cell.textContent.toUpperCase().trim();
            if (text.includes(searchInput)) {
              matchFound = true;
              break;
            }
          }
          if (matchFound) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        } else { // show rows that match date range but have no search text
          row.style.display = '';
        }
      }
    }

    // Add event listeners to date range and search inputs
    document.getElementById('From').addEventListener('input', filterTable);
    document.getElementById('To').addEventListener('input', filterTable);
    document.getElementById('searchInput').addEventListener('input', filterTable);
  </script>

  <style>
    table {
      border: 10px;
      width: 440px;
    }

    tr {

      background-color: #ffffff;

    }

    td {
      text-align: center;

    }

    .wrap {
      width: 440px;
    }

    .container {
      /* width: 550px; */
      height: fit-content;
    }

    .icon-button__badge {
      position: absolute;
      top: 6;
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

    .pending-row {
      background-color: #fad2c3;
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

    .container {
      background-color: #B2C0E0;

    }

    .fp {
      margin-top: 15px;
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

    .icon-button__badge4 {
      position: absolute;
      top: 65;
      right: 235;
      width: 15px;
      height: 18px;
      background: green;
      color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
    }

    .icon-button__badge5 {
      position: absolute;
      top: 115;
      right: 236;
      width: 15px;
      height: 18px;
      background: purple;
      color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
    }

    input {
      width: 35%;
      color: black;
      font-weight: 700;
      font-size: 14px;
      letter-spacing: 1px;
      background-color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 20px;
      outline: none;
      box-sizing: border-box;
      border-color: #0c1e35;
      margin-bottom: 10px;
    }
  </style>

  </html>
 