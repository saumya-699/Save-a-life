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
      $x = $row["WardDoctor_ID"];
      $y= $row["Hospital_ID"];


    }
  }

  $vql = "SELECT * FROM blood_request WHERE WardDoctor_ID ='$x' ORDER BY requeste_id DESC";
  $result = $conn->query($vql);
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
  <script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style.css">
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
                <a href="Edit Profile.php">
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

        <div>
          <input type="date" id="dateInput" class="b1">

          <select id="filterDropdown" class="select">
            <option value="All">Group</option>
            <option value='A+'>A+</option>
            <option value='A-'>A-</option>
            <option value='B+'>B+</option>
            <option value='B-'>B-</option>
            <option value='O+'>O+</option>
            <option value='O-'>O-</option>
            <option value='AB+'>AB+</option>
            <option value='AB-'>AB-</option>
          </select>

          <select id="ResultDropdown" class="selectx">
            <option value="All">Status</option>
            <option value='Pending'>Pending</option>
            <option value='Available'>Available</option>
            <option value='Not Available'>Not Available</option>


          </select>


          <input type="text" id="searchInput" class="box">

        </div>



        <div class="box">

          <form action="Request history2.php" method="POST">

            <?php

            if ($result->num_rows > 0) {

              echo  "<div id='dataTable' class='tab'>";
              echo  "<table border=1>" . "<tr>" .  "<th style='text-align:center;'>" . "Receive date" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Patient Name" . "</th>" . "<th>" . "Blood Group" . "</th>" . "<th>" . "Status" . "</th>" . "<th style='text-align:center;width:40px;'>" . "Action" . "</th>" . "</tr>";
              echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";
              while ($row = $result->fetch_assoc()) {


                echo  "<tr>" . "<td>" . $row["expected_date"] . "</td>" . "<td>" . $row["patient_name"] . "</td>" . "<td>" . $row["blood_group"] . "</td>" . "<td>" . $row["status"] . "</td>";

                echo "<td class='tb'><form method='POST' action ='Request history2.php'>
     <input type=hidden name=RequestID value=" . $row["requeste_id"] . " >
     <button type=submit value=view name=view  class='fp'><i class='fa-sharp fa-solid fa-eye'></i></button>
     </form>  
 	

    </td>";
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
                const select = document.getElementById('filterDropdown');
                const filterValue = select.options[select.selectedIndex].value;
                const Result = document.getElementById('ResultDropdown');
                const ResultValue = Result.options[Result.selectedIndex].value;
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

                  const result = cells[3].textContent;
                  const group = cells[2].textContent;
                  const date = cells[0].textContent;


                  if ((filterValue === 'All' || group.toLowerCase() === filterValue.toLowerCase()) &&
                    Array.from(cells).some(cell => cell.textContent.toUpperCase().includes(filter)) &&
                    (ResultValue === 'All' || result.toLowerCase() === ResultValue.toLowerCase()) &&
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

              const filterDropdown = document.getElementById('filterDropdown');
              filterDropdown.addEventListener('change', filterTable);

              const ResultDropdown = document.getElementById('ResultDropdown');
              ResultDropdown.addEventListener('change', filterTable);

              const dateInput = document.getElementById('dateInput');
              dateInput.addEventListener('input', filterTable);
            </script>
        </div>
    </div>
  </div>


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
      margin-left: 280px;
      margin-bottom: 70px;
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
      margin-left: 170px
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
      font-size: 25px;
      padding: 10px 10px;
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
      margin-top: -120px;
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

    .visible {
      cursor: pointer;


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


    .layout {
      background-color: #d8d8d8;
    }
  </style>
  </main>
  <!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script>
  <script src="./script.js"></script>




</body>

</html>