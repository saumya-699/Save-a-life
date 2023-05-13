<?php
session_start();
if (isset($_SESSION["ID"])) {
    include "config.php";
    $m = $_SESSION["Name"];
    $query = "SELECT * FROM mlt WHERE UserName ='$m'";
    $result1 = $conn->query($query);

    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            $x = $row["MLT_ID"];
            $y = $row["Hospital_ID"];
            $HospitalName = $row["HospitalName"];
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
        <link rel="stylesheet" href="./stylek2.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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

                                <li class="menu-header" style="padding-top: 40px"><span> </span></li>
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


            <?php

            include "config.php";
            if (isset($_POST['submit'])) {
              $blood_group = $_POST["blood_group"];
              $component = $_POST["component"];
              $From = $_POST["From"];
                $To = $_POST["To"];

                $date = date("Y/m/d");
                
                if(($blood_group == "A-" || $blood_group == "A+" || $blood_group == "B-" || $blood_group == "B+" || $blood_group == "O-" || $blood_group == "O+" || $blood_group == "AB-" || $blood_group == "AB+" )&& ($component =="Red Cells" || $component=="Plasma" ||$component =="White Cells" || $component =="Plateletes")){
                  $sql = "SELECT * FROM stock where Hospital_ID ='$y' and Blood_group='$blood_group' and  Component_type = '$component' and ProcessDate between '$From' and '$To'";
                  $result = $conn->query($sql);
  
                  if ($result->num_rows > 0) {
  
  
                      //echo "<font color=red>";
                      //echo "<font size=6>";
  
                      echo  "<div class='container_content' id='container_content'>";
                      echo "<h2><center>Blood Testing Details Report of $HospitalName</center> </h2>";
                      echo "<h5><center>Save a Life</center> </h5>";
                      echo "<h5><center>printed on $date</center> </h5><br><br>";
  
  
  
  
                      echo  "<table border=1>" . "<tr>" . "<th style='text-align:center;width:200px;'>" . "Blood Bag ID" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Blood Group" . "</th>" . "<th style='text-align:center;width:100px;'>" . "Component Type" . "</th>" . "<th>" . "Expiry Date" ."</th>"."<th>"."Process Date"."</th>"."</tr>";
                      echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=5'>" . "</td>" . "</tr>";
                      while ($row = $result->fetch_assoc()) {
                          echo  "<tr>" . "<td>" . $row["Blood_bagID"] . "</td>" . "<td>" . $row["Blood_group"] . "</td>" . "<td>" . $row["Component_type"] . "</td>" . "<td>" . $row["ExpiryDate"] . "</td>" . "<td>" . $row["ProcessDate"] . "</td>";
  
                          echo "</tr>";
  
                          echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=5'>" . "</td>" . "</tr>";
                      }
  
                      echo "</font>";
                      echo  "</font>";
                      echo "</table>";
                      echo "</div>";
                  } else {
                      //echo "Error in ".$sql."<br>".$conn->error;
  
                      echo "no results";
                  }
             
             
             
              }
             
             
             else{
  
  
  
  
              $sql = "SELECT * FROM stock where Hospital_ID ='$y'  and ProcessDate between '$From' and '$To'";
              $result = $conn->query($sql);
  
              if ($result->num_rows > 0) {
  
  
                  //echo "<font color=red>";
                  //echo "<font size=6>";
  
                  echo  "<div class='container_content' id='container_content'>";
                  echo "<h2><center>Blood Testing Details Report of $HospitalName</center> </h2>";
                  echo "<h5><center>Save a Life</center> </h5>";
                  echo "<h5><center>printed on $date</center> </h5><br><br>";
  
  
  
  
                  echo  "<table border=1>" . "<tr>" . "<th style='text-align:center;width:200px;'>" . "Blood Bag ID" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Blood Group" . "</th>" . "<th style='text-align:center;width:100px;'>" . "Component Type" . "</th>" . "<th>" . "Expiry Date" ."</th>"."<th>"."Process Date"."</th>". "</tr>";
                  echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=5'>" . "</td>" . "</tr>";
                  while ($row = $result->fetch_assoc()) {
                      echo  "<tr>" . "<td>" . $row["Blood_bagID"] . "</td>" . "<td>" . $row["Blood_group"] . "</td>" . "<td>" . $row["Component_type"] . "</td>" . "<td>" . $row["ExpiryDate"] . "</td>" . "<td>" . $row["ProcessDate"] . "</td>";
  
                      echo "</tr>";
  
                      echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=5'>" . "</td>" . "</tr>";
                  }
  
                  echo "</font>";
                  echo  "</font>";
                  echo "</table>";
                  echo "</div>";
              } else {
                  //echo "Error in ".$sql."<br>".$conn->error;
  
                  echo "no results";
              }}
  
  
                }
            
            $conn->close();
            ?>

            <button onclick="generatePDF()" class="z">Download</button>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
            <script>
                function generatePDF() {
                    const element = document.getElementById('container_content');
                    var opt = {
                        margin: 0,
                        filename: 'Blood Stock Report.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 0.98
                        },
                        html2canvas: {
                            scale: 2
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'letter',
                            orientation: 'landscape'
                        }
                    };
                    // Choose the element that our invoice is rendered in.
                    html2pdf().set(opt).from(element).save();
                }
            </script>

            </main>
        </div>

        <!-- partial -->
        <script src='https://unpkg.com/@popperjs/core@2'></script>
        <script src="./script.js"></script>


        <style>
            .container_content {
                margin-left: 150px;
            }

            table {
                width: 700px;
                height: 15px;
                border-collapse: collapse;
                margin-top: 40px;
                border: 0px transparent;
                margin-left: 10px;

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

            .z {
                font-size: 20px;
                margin-top: auto;
                margin-left: auto;
                margin-right: auto;
                height: 47px;
                border: none;

                background: #4082f5;

                cursor: pointer;
                box-shadow: 0px 10px 40px 0px rgba(17, 97, 237, 0.4);
                font-weight: 700;
                font-size: 20px;
                border-radius: 30px;
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

    </body>

    </html>
<?php

}

?>