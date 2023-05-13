<?php

session_start();
include "config.php";
if (isset($_SESSION["ID"])) {
  include "config.php";
  $today = date("Y-m-d");
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM mlt WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $x = $row["MLT_ID"];
      $y=$row["Hospital_ID"];
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="./stylek.css">
    <link rel="stylesheet" href="StyleSearchss.css">


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


            <div>
              <select id="filterDropdown" class="select">
                <option value="All">All Groups</option>
                <option value='A+'>A+</option>
                <option value='A-'>A-</option>
                <option value='B+'>B+</option>
                <option value='B-'>B-</option>
                <option value='O+'>O+</option>
                <option value='O-'>O-</option>
                <option value='AB+'>AB+</option>
                <option value='AB-'>AB-</option>


              </select>

              <select id="ComponentDropdown" class="selectx">
                <option value="All">Component</option>
                <option value="Red cell"> Red cell </option>
                <option value="Platelet">Platelet</option>
                <option value="Plasma">Plasma</option>

              </select>


              <input type="text" id="searchInput" class="box">
            </div>



            <?php


            require 'config.php';
            $today = date("Y-m-d");
            $vql = "select * from MLT where MLT_ID ='$x'";
            $resultx = $conn->query($vql);

            while ($row = $resultx->fetch_assoc()) {

              $ty = $row["Hospital_ID"];
            }



            //echo $row["Hospital_ID"];

            $tql = "select Hospital_ID,Blood_bagID,Blood_group,Component_type,ExpiryDate,Count(*) AS count
from stock
where ExpiryDate >'$today'
group by Blood_group,Component_type,Hospital_ID
HAVING COUNT(*) < 4 AND Hospital_ID='$ty'";

            $result = $conn->query($tql);

            $result = $conn->query($tql);
            if (!$result) {
              echo "Error: " . $tql . "<br>" . $conn->error;
            } else {
              // Your code here
            }

            //$sql= "select * from stock where Hospital_ID='$ty' and No_of_packs <= 2";
            //$result = $conn->query($sql);

            if ($result->num_rows > 0) {



              //echo  "<div class='tab'>";
              echo  "<table id='dataTable'  border=1>" . "<tr>" . "<th style='text-align:center;width:120px;'>" . "Blood Group" . "</th>" . "<th>" . "Component Type" . "</th>" . "<th>" . "No of Packs" . "</th>" . "</tr>";
              //  echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
              while ($row = $result->fetch_assoc()) {

                $position_class = strtolower(str_replace(' ', '-', $row['Blood_group']));
                echo '<tr class="' . $position_class . '">';
                echo  "<td>" . $row["Blood_group"] . "</td>" . "<td>" . $row["Component_type"] . "</td>" . "<td>" . $row["count"] . "</td>";

                echo "</tr>";

                echo "<tr>" . "<td style='height:8px;background-color:#F5F5F5;'colspan=3'>" . "</td>" . "</tr>";
              }

              echo "</font>";
              echo  "</font>";
              echo "</table>";
              // echo "</div>";


            } else {
              //echo "Error in ".$tql."<br>".$conn->error;

              echo "<center><b>no results</b></center>";
            }
            //echo "Error in ".$vql."<br>".$conn->error;
            $conn->close();
            ?>


            <script>
              // Filter the table based on the selected position, SLMC number, and search query
              function filterTable() {
                const input = document.getElementById('searchInput');
                const filter = input.value.toUpperCase();
                const positionSelect = document.getElementById('filterDropdown');
                const positionFilter = positionSelect.options[positionSelect.selectedIndex].value;
                const ComponentSelect = document.getElementById('ComponentDropdown');
                const ComponentValue = ComponentSelect.options[ComponentSelect.selectedIndex].value;

                const table = document.getElementById('dataTable');
                const rows = table.getElementsByTagName('tr');

                for (let i = 1; i < rows.length; i++) {
                  const row = rows[i];
                  if (row.cells.length === 1) {
                    continue;
                  }
                  const cells = row.getElementsByTagName('td');
                  const positionClass = row.className;
                  console.log(`Row ${i} class: ${positionClass}`);
                  const ComponentName = cells[1].textContent;

                  if ((positionFilter === 'All' || positionClass === positionFilter.toLowerCase()) &&
                    (ComponentValue === 'All' || ComponentName === ComponentValue) &&
                    Array.from(cells).some(cell => cell.textContent.toUpperCase().includes(filter))) {
                    row.style.display = '';
                  } else {
                    row.style.display = 'none';
                  }
                }
              }

              // Attach filterTable function to events (e.g. button click, input change)
              // const searchInput = document.getElementById
              // Attach filterTable function to events (e.g. button click, input change)
              const searchInput = document.getElementById('searchInput');
              searchInput.addEventListener('input', filterTable);

              const filterDropdown = document.getElementById('filterDropdown');
              filterDropdown.addEventListener('change', filterTable);

              const ComponentDropdown = document.getElementById('ComponentDropdown');
              ComponentDropdown.addEventListener('change', filterTable);
            </script>



        </main>

        <!-- partial -->
        <script src='https://unpkg.com/@popperjs/core@2'></script>
        <script src="./script.js"></script>

  </body>

  </html>
<?php

} else {
  echo '<script type="text/javascript">';
  echo 'alert("Please log in first");';

  echo 'window.location.href="userloginFront.php";';
  echo '</script>';
}

?>
<style>
  table {



    width: 750px;
    height: 15px;
    border-collapse: collapse;
    margin-top: 40px;
    border: 0px transparent;

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



  tr {

    background-color: white;

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