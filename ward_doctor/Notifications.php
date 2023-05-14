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
      $x = $row["Name_With_Initials"];
      $y = $row["Hospital_ID"];
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

  <script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" href="./AddbbStyle.css">
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
                <a href="profile.php">
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
            &nbsp; &nbsp; From <input type="date" name="From" id="From" class="yu">
            &nbsp; &nbsp; &nbsp;To <input type="date" name="To" id="To" class="yu"><br><br>
            &nbsp; &nbsp; Search: <input type="text" id="searchInput" class="box">

            <h3>Blood Request Results</h3>
            <?php
            $vql = "SELECT bloodbank_doctor.Name_With_Initials
              FROM bloodbank_doctor
              INNER JOIN blood_request ON bloodbank_doctor.BloodBank_doctor_ID =blood_request.BloodBankDoctor_ID";
            $result = $conn->query($vql);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $z = $row['Name_With_Initials'];
              }
            }

            $sql = "SELECT * FROM blood_request WHERE Hospital_ID ='$y' AND (status='Available' OR status='Not Available') ORDER BY requeste_id DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

              echo "<table id='dataTable'><thead><tr><th style='text-align:center;width:120px;'> Expected Date</th><th style='text-align:center;width:120px;'>Status</th><th style='text-align:center;width:120px;'>Checked by Blood bank Doctor</th><th style='width:120px;'>Action</th><th style='width:120px;'>Notification Checked</th></tr></thead><tbody>";

              while ($row = $result->fetch_assoc()) {
                $status = $row['notifyView'];
                $status_class = ($status === '0') ? 'pending-row' : '';

                echo "<tr class='$status_class'><td>" . $row["expected_date"] . "</td><td>" . $row["status"] . "</td><td>" . $z . "</td>";
                echo"<td><form method='POST' action ='ResultNotify.php'>
                  <button type=submit value=view name=view class='fp'><i class='fa-sharp fa-solid fa-eye'></i></button>
                  <input type=hidden name=RID value=" . $row["requeste_id"] . " >
                  
                 </form></td>";
                 $ID = $row['requeste_id'];

                 echo "<td><form method='POST' action =''>  	
    
    <button type=submit value=Send name='$ID'  class='fp'><i class='fa-regular fa-circle-check'></i></button>

     </form></td>";
                 if (isset($_POST[$ID])) {
                  $updateSqlSend= "UPDATE blood_request SET notifyView	='1' WHERE requeste_id='$ID' ;";
                  $send = mysqli_query($conn, $updateSqlSend);
  
  
                }
                echo"</tr>";
              }

             
              echo "</tbody></table>";
              echo "<br>";
              echo "<br>";
              echo "<br>";

              $conn->close();
            }
            ?>


          </div>



        </div>

    </div>

    </form>


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
      const date = row.cells[0].textContent.trim(); // assumes date is in second cell of each row

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

  .wrap {
    width: 440px;
  }

  .container {
    /* width: 550px; */
    height: fit-content;
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

  .pending-row {
    background-color: #fad2c3;
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


  .container {
    background-color: #B2C0E0;

  }

  .fp {
    margin-top: 15px;
  }
</style>

</html>