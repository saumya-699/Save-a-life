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
      $y = $row["Hospital_ID"];
    }
  }
}

if (isset($_POST['view'])) {
  $did = $_POST['Requestdate'];
  $batchid = $_POST['RequestBatch'];
  $sql = "SELECT * FROM donation_records where Donation_date ='$did' AND Batch='$batchid'";
  $result = $conn->query($sql);


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

            <div>
              <input type="date" id="dateInput" class="b1">


              <input type="text" id="searchInput" class="box">

            </div>



            <div class="box">

              <form action="Request history2.php" method="POST">

              <?php


              echo  "<div class='tab'>";
              echo  "<table  id='dataTable' border=1>" . "<tr>" . "<th style='text-align:center;'>" . "Donation Date" . "</th>" . "<th style='text-align:center;'>" . "Batch Number" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Donar ID" . "</th>" . "<th>" . "Donation ID" . "</th>" . "<th>" . "Blood Packet ID" . "</th>" .  "<th style='text-align:center;width:40px;'>" . "Nurse ID" . "</th>" . "</tr>";
              echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=6'>" . "</td>" . "</tr>";
              while ($row = $result->fetch_assoc()) {


                echo  "<tr>" . "<td>" . $row["Donation_date"] . "</td>" . "<td>" . $row["Batch"] . "</td>" . "<td>" . $row["Donor_Id"] . "</td>" . "<td>" . $row["Donation_ID"] . "</td>" . "<td>" . $row["packet_no"] . "</td>" . "<td>" . $row["Nurse_ID"] . "</td>";


                echo "</div>";
                echo "</tr>";

                echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=6'>" . "</td>" . "</tr>";
              }
              echo  "</font>";
              echo  "</font>";
              echo "</table>";
            } else {
              // echo "Error in " . $sql . "<br>" . $conn->error;

              echo "no results";
            }

            $conn->close();
              ?>
              <button class="b2" name="back" value="back">
                <font size="2px"><a href="view donated blood information.php">Back</font size></a>
              </button>
              <script>
                function filterTable() {
                  const input = document.getElementById('searchInput');
                  const filter = input.value.toUpperCase();
                  const dateInput = document.getElementById('dateInput').value;

                  const table = document.getElementById('dataTable');
                  const rows = table.getElementsByTagName('tr');

                  for (let i = 1; i < rows.length; i++) {
                    const row = rows[i];
                    if (row.cells.length === 1) {
                      continue;
                    }
                    const cells = row.getElementsByTagName('td');
                    const positionClass = row.className;

                    const date = cells[0].textContent;

                    if (
                      Array.from(cells).some(cell => cell.textContent.toUpperCase().includes(filter)) &&
                      (dateInput === '' || date === dateInput)) {
                      row.style.display = '';
                    } else {
                      row.style.display = 'none';
                    }
                  }
                }

                // Attach filterTable function to events (e.g. button click, input change)
                const searchInput = document.getElementById('searchInput');
                searchInput.addEventListener('input', filterTable);

                const dateInput = document.getElementById('dateInput');
                dateInput.addEventListener('input', filterTable);
              </script>
            </div>
            <style>
              table {
                width: 750px;
                height: 15px;
                border-collapse: collapse;
                margin-top: 40px;
                margin-left: -60px;
                border: 0px transparent;
              }

              h1 {

                margin-top: 70px;
                margin-left: 200px;
                margin-bottom: 100px;
              }



              th {

                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                text-align: center;
                padding-top: 25px;
                padding-bottom: 25px;
                padding-left: 10px;
                padding-right: 10px;
                border: 0px transparent;

              }



              td {
                text-align: center;
                padding: 1px;


              }

              .box {
                height: 35px;
                width: 200px;
                margin-left: 20px;
                border-radius: 20px;
                border: none;
                text-align: center;
                margin-top: 100px;
              }



              .b1 {
                height: 40px;
                width: 130px;
                color: #FFF5F3;
                margin-left: 6px;
                border-radius: 20px;
                background-color: #F35050;
                border: none;
                text-align: center;
                cursor: pointer;
                margin-top: 100px;
                margin-bottom: 50px;
                margin-left: 200px
              }


              .b2 {


                border: none;
                cursor: pointer;
                margin-top: 20px;
                margin-bottom: 30px;
                margin-left: 550px;
                margin-right: 10px;
                width: 130px;
                height: 40px;
                border-radius: 30px;
                background: #4082f5;
                text-transform: uppercase;
                box-shadow: 0px 10px 40px 0px rgba(17, 97, 237, 0.4);
                font-weight: 700;
                font-size: 14px;


              }


              a {
                text-decoration: none;
                color: white;
                cursor: pointer;
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
                margin-top: 0px;
                margin-left: 30px;
                margin-bottom: -100px;
                background-color: transparent;
                border: none;
                cursor: pointer;
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
                margin-top: -50px;
                margin-left: 120px;
                margin-right: 100px;
                padding-left: 0px;
                padding-right: 0px;



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


          </div>
        </main>

      </div>
    </div>
    <!-- partial -->
    <script src='https://unpkg.com/@popperjs/core@2'></script>
    <script src="./script.js"></script>

  </body>

  </html>