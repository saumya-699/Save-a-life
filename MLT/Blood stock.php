<?php

session_start();
include "config.php";
if (isset($_SESSION["ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $today = date("Y-m-d");
  $query = "SELECT * FROM mlt WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $x = $row["MLT_ID"];
      $ty = $row["Hospital_ID"];
    }
  }


  $sql = "SELECT * FROM stock where Hospital_ID='$ty' and ExpiryDate >'$today'";

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
                <li class="menu-item">
                  <a href="sell.php">
                    <span class="menu-icon">
                      <i class="ri-notification-line"></i>
                    </span>
                    <span class="menu-title">Notification</span>

                  </a>
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

              <select id="ComponentDropdown" class="selectx">
                <option value="All">Component</option>
                <option value="Red cell"> Red cell </option>
                <option value="Platelet">Platelet</option>
                <option value="Plasma">Plasma</option>

              </select>
              <input type="date" id="dateInput" class="b1">
              <input type="text" id="searchInput" class="box">

            </div>


            <?php




            //echo $row["Hospital_ID"];



            if ($result->num_rows > 0) {


              // echo  "<div class='tab'>";
              echo  "<table  id='dataTable' border=1>" . "<tr>" . "<th style='text-align:center;width:120px;'>" . "Blood Bag ID" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Blood Group" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Component Type" . "</th>" . "<th style='width:120px;'>" . "Process Date" . "</th>" . "</tr>";
              echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=7'>" . "</td>" . "</tr>";
              while ($row = $result->fetch_assoc()) {
                $position_class = strtolower(str_replace(' ', '-', $row['Blood_group']));

                echo '<tr class="' . $position_class . '">';
                echo "<td>" . $row["Blood_bagID"] . "</td>" . "<td>" . $row["Blood_group"] . "</td>" . "<td>" . $row["Component_type"] . "</td>" . "<td>" . $row["ProcessDate"] . "</td>";

                echo "</tr>";

                echo "<tr>" . "<td style='height:8px;background-color:#F5F5F5;'colspan=7'>" . "</td>" . "</tr>";
              }

              echo "</font>";
              echo  "</font>";
              echo "</table>";
              echo "</div>";
            } else {

              echo "no results";
              //echo "Error in ".$sql."<br>".$conn->error;



            }
            //echo "Error in ".$vql."<br>".$conn->error;
            $conn->close();
            ?>


            <script>
              function filterTable() {
                const input = document.getElementById('searchInput');
                const filter = input.value.toUpperCase();
                const select = document.getElementById('filterDropdown');
                const filterValue = select.options[select.selectedIndex].value;
                const dateInput = document.getElementById('dateInput').value;
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
                  const ComponentName = cells[2].textContent;
                  const ExpiryDate = cells[3].textContent;

                  if ((filterValue === 'All' || positionClass === filterValue.toLowerCase()) &&
                    Array.from(cells).some(cell => cell.textContent.toUpperCase().includes(filter)) &&
                    (dateInput === '' || ExpiryDate === dateInput) &&
                    (ComponentValue === 'All' || ComponentName === ComponentValue)) {
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

              const dateInput = document.getElementById('dateInput');
              dateInput.addEventListener('input', filterTable);

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
    margin-top: 10px;
    border: 0px transparent;
    margin-left: 100px;

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






  .tb {
    display: inline-flex;
    justify-content: space-evenly;
    flex-wrap: nowrap;
    align-items: baseline;
    flex-direction: row;
  }

  .tab {

    background-color: #F5F5F5;
    margin-top: -40px;
    margin-left: 60px;
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



  .layout {
    background-color: #d9dbdb;
  }
</style>


</div>
</main>
</style>