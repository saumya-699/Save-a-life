<?php

session_start();
include "config.php";
if (isset($_SESSION["Donor_ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $today = date("Y-m-d");
  $query = "SELECT * FROM donors WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $x = $row["Donor_Id"];
    }
  }


 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>donation_history</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
  <link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="../css/style2.css">
  <link rel="stylesheet" href="../style.css">
</head>

<body>
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
                <a href="../index.html">
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
                <a href="#">
                  <span class="menu-icon">
                    <i class="ri-history-line"></i>
                  </span>
                  <span class="menu-title">Donation History</span>
                </a>
                <div class="sub-menu-list">

                </div>
              </li>
              <li class="menu-item">
                <a href="../filldeclaration/filldecleration.html">
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
                <a href="#">
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
        <div class="row" style="width:100%;padding-left:5px;padding-top:60px;">
          <div class="col-12">
          </div>
        </div>
        <div>
          <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>
          <div>
            <input type="date" id="dateInput" class="b1">

            <input type="text" id="searchInput" class="b2">

          </div>

          <div class="box">

            <?php
            $vql = "SELECT * FROM donation WHERE Donor_Id='$x'";
            $result = $conn->query($vql);

            if ($result->num_rows > 0) {

              echo  "<div id='dataTable' class='tab'>";
              echo  "<table border=1>" . "<tr>" . "<th style='text-align:center;'>" . "Donation ID" . "</th>" . "<th style='text-align:center;'>" . "Date of Donation" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Place of Donation(Hospital ID)" . "</th>" . "<th>" . "Collection Done by (Nurse ID)" . "</th>" .  "</tr>";
              echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";
              while ($row = $result->fetch_assoc()) {


                echo  "<tr>" . "<td>" . $row["Donation_ID"] . "</td>" . "<td>" . $row["Donation_date"] . "</td>" . "<td>" . $row["Hospital_ID"] . "</td>" . "<td>" . $row["Nurse_ID"] . "</td>";

                echo "</td>";
                echo "</div>";
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

                  const date = cells[1].textContent;

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
      </main>
    </div>
  </div>
  <!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script>
  <script src="./script.js"></script>
  <script type='text/javascript' src='../js/script.js'></script>
  <style>
    table {



      width: 750px;
      height: 15px;
      border-collapse: collapse;
      margin-top: 40px;
      border: 0px transparent;

    }

    h1 {

      margin-top: 20px;
      margin-left: 100px;
      margin-bottom: 70px;
    }


    .b2 {
      height: 35px;
      width: 200px;
      margin-left: 20px;
      border-radius: 20px;
      border: none;
      text-align: center;
      margin-top: 100px;
      color: white;

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

    body {
      font-family: "Poppins", sans-serif;
    }


    .select {
      height: 35px;
      width: 145px;
      border-radius: 20px;
      background-color: #F35050;
      border: none;
      text-align: center;
      margin-left: 10px;
      margin-top: 100px;
      margin-bottom: 50px;
      color: white;
    }

    .selectx {
      height: 35px;
      width: 145px;
      border-radius: 20px;
      background-color: #F35050;
      border: none;
      text-align: center;
      margin-left: 10px;
      margin-top: 100px;
      margin-bottom: 50px;
      color: white;
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





    .tb {
      display: inline-flex;
      justify-content: space-evenly;
      flex-wrap: nowrap;
      align-items: baseline;
      flex-direction: row;
    }

    .tab {
      background-color: #F5F5F5;
      margin-top: -100px;
      margin-left: 60px;
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
  </style>
  </main>
  <!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script>
  <script src="./script.js"></script>



</body>

</html>
