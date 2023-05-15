<?php
session_start();

?>


<?php
if (isset($_SESSION["ID"])) {

  require "conp.php";
  $m = $_SESSION["Name"];
  $x=null;
  $hid=null;
  $ID=null;
  $query = "SELECT * FROM bloodbank_doctor WHERE UserName ='$m'";
  $result1 = $conn->query($query);

 
  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $x = $row["Hospital_ID"];
      $hid = $x;
      $ID = $row["BloodBank_doctor_ID"];
    }
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
    <script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="./stylek.css">
    <link rel="stylesheet" href="StyleSearchNew.css">
    <link rel="stylesheet" href="StyleIcons.css">
    <link rel="stylesheet" href="./StyleSheetNotification.css">


  </head>

  <body>
    <!-- partial:index.partial.html --><!-- partial:index.partial.html -->
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



          <select id="filterDropdown" class="b1">
            <option value="All">Gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>

          </select>


          <input type="text" id="searchInput" class="box">





          <?php


          require 'conp.php';

          ///$m = $_SESSION["Name"];
          ///$query = "select * from bloodbank_doctor where UserName ='$m'";



         /// $resultd = $conn->query($query);

          ///echo "Error in ".$vql."<br>".$conn->error;
         // /$x = null;
         // /if ($resultd->num_rows > 0) {

           /// while ($row = $resultd->fetch_assoc()) {




            ///  $x = $row["BloodBank_doctor_ID"];
           /// }
         /// }
          ///$vql = "select * from bloodbank_doctor where BloodBank_doctor_ID ='$x'";
          ///$resultx = $conn->query($vql);
          ///$tz = null;
          ///while ($row = $resultx->fetch_assoc()) {

            ///$tz = $row["Hospital_ID"];
          ///}


        //-----------------------------------------get  the user name of the blood bank doctor using session and then take the hospital id using blood bank docotr table
        //----------------------------------------then find the donors who have that hospital id in donor table
          $sql = "select * from donation_records,donors where donors.Donor_Id =donation_records.Donor_Id and
           donors.username!='Removed' and donation_records.Hospital_ID=$hid
          group by donation_records.Donor_Id"
           ;
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {


            //echo "<font color=red>";
            //echo "<font size=6>";

            //echo  "<div class='tab'>";
            echo  "<table border=1 id='dataTable'>" . "<tr>" . "<th style='text-align:center;width:120px;'>" . "Donor ID" . "</th>" . "
       <th style='text-align:center;width:120px;'>" . "Donor Name" . "
       <th style='text-align:center;width:120px;'>" . "NIC Number" . "</th>" . "
       <th>" . "Gender" . "</th>" . "
       <th>" . "Contact Number" . "</th>" . "
	   <th>" . "Province" . "</th>" . "
       <th style='width:100px;'>" . "Action" . "</th>" . "
       </tr>";
            //echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
            while ($row = $result->fetch_assoc()) {
              $position_class = strtolower(str_replace(' ', '-', $row['Gender']));
              echo '<tr class="' . $position_class . '">';
              echo  "<td>" . $row["Donor_Id"] . "</td>" . "<td>" . $row["Prefix"] . "." . $row["Full_Name"] . "</td>" . "<td>" . $row["NIC_Number"] . "</td>" . "<td>" . $row["Gender"] . "</td>" . "<td>" . $row["mobile_number"] . "</td>" . "<td>" . $row["province"] . "</td>";
              echo "<td><form method='POST' action ='ViewAll_B.php'>
                <input type=hidden name=Donor_Id value=" . $row["Donor_Id"] . " >
                <button type=submit value=view name=view  id ='btn' class='x'><i class='fa-sharp fa-solid fa-eye'></i></button>
                </form>
				
            </td>";
              echo "</tr>";

              echo "<tr>" . "<td style='height:8px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";
            }

            echo "</font>";
            echo  "</font>";
            echo "</table>";
            echo "</div>";
          }

          /*else

{
  echo "Error in ".$sql."<br>".$conn->error;

 echo "no results";

}
*/
          $conn->close();
          ?>



          <script>
            function myConfirm() {
              var result = confirm("Want to delete?");
              if (result == true) {
                return true;
              } else {
                return false;
              }
            }
          </script>

          <script>
            // Filter the table based on the selected color and search query
            function filterTable() {
              const input = document.getElementById('searchInput');
              const filter = input.value.toUpperCase();
              const select = document.getElementById('filterDropdown');
              const filterValue = select.options[select.selectedIndex].value;

              const table = document.getElementById('dataTable');
              const rows = table.getElementsByTagName('tr');

              for (let i = 1; i < rows.length; i++) {
                const row = rows[i];
                const cells = row.getElementsByTagName('td');
                const positionClass = row.className;

                if ((filterValue === 'All' || positionClass === filterValue.toLowerCase()) &&
                  Array.from(cells).some(cell => cell.textContent.toUpperCase().includes(filter))) {
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



            // Attach filterTable function to events (e.g. button click, input change)
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