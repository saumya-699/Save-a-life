<?php
session_start();
include "config.php";
if (isset($_SESSION["ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM mlt WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $x = $row["MLT_ID"];
    }
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

              <li class="menu-item">
                <a href="Report.php">
                  <span class="menu-icon">
                    <i class="ri-file-chart-line"></i>
                  </span>
                  <span class="menu-title">Reports</span>
                </a>
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
                <a href="#">
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
        </div>
        <h1>View approval of the blood test results</h1>



        <form method="post" action="View approval of blood test results2 Search.php">

          <div class="midiv">


            <font size=3> Search by </font></b> <br /> <br /><select name="search" class="select">
              <option value="test_result_id"><b>Test result ID</b></option>
              <option value="donar_id"><b> Donar ID</b></option>
              <option value="blood_group"><b>Blood group</b></option>
              <option value="malaria_result" selected><b>Malaria result</b></option>
              <option value="hiv_result"><b> HIV result</b></option>
              <option value="hbv_result"><b>HBV result</b></option>
              <option value="hcv_result"><b>HCV result</b></option>
              <option value="vdrl_result"><b>VDRL result</b></option>
              <option value="process_date" selected><b>Processed Date</b></option>
              <option value="batch_number" selected><b>Batch number</b></option>
            </select>


            <input type="text" placeholder="type here" name="data" id="data" class="box">

            <button type="submit" name="BtnSubmit" id="search" class="b1"><b>Search</b></button>
          </div>

    </div>

    </form>

    <div class="box">



      <?php
      if (isset($_POST['BtnSubmit'])) {
        $search = $_POST["search"];
        $data = $_POST["data"];
        $sql = "SELECT * FROM blood_testing_result WHERE $search = '$data' AND MLT_ID ='$x'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          echo  "<table border=1>" . "<tr>" . "<th style='text-align:center;width:200px;'>" . "Test Result ID" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Donar ID" . "</th>" . "<th style='text-align:center;width:100px;'>" . "Blood Group" . "</th>" . "<th>" . "Malaria Result" . "</th>" . "<th>" . " HIV Result" . "</th>" . "<th>" . "HBV Result" . "</th>" . "<th>" . "HCV Result" . "</th>" . "<th>" . "VDRL Result" . "</th>" . "<th>" . "Processed Date" . "</th>" . "<th>" . "Batch Number" . "</th>" . "</tr>";
          echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=12'>" . "</td>" . "</tr>";
          while ($row = $result->fetch_assoc()) {
            echo  "<tr>" . "<td>" . $row["test_result_id"] . "</td>" . "<td>" . $row["donar_id"] . "</td>" . "<td>" . $row["blood_group"] . "</td>" . "<td>" . $row["malaria_result"] . "</td>" . "<td>" . $row["hiv_result"] . "</td>" . "<td>" . $row["hbv_result"] . "</td>" . "<td>" . $row["hcv_result"] . "</td>" . "<td>" . $row["vdrl_result"] . "</td>" . "<td>" . $row["process_date"] . "</td>" . "<td>" . $row["batch_number"] . "</td>";

            echo "</tr>";


            echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=12'>" . "</td>" . "</tr>";
          }
          echo  "</font>";
          echo  "</font>";
          echo "</table>";
        } else {
          echo "Error in " . $sql . "<br>" . $conn->error;

          echo "no results";
        }
      }
      $conn->close();
      ?>
      <style>
        table {



          width: 750px;
          height: 15px;
          border-collapse: collapse;
          margin-top: 40px;
          border: 0px transparent;

        }

        h1 {

          margin-top: 70px;
          margin-left: 300px;
          margin-bottom: 100px;
        }

        .select {


          height: 35px;
          width: 138px;
          border-radius: 20px;
          background-color: #56CE94;
          border: none;
          text-align: center;




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

          height: 30px;
          width: 120px;
          border-radius: 20px;
          background-color: #56CE94;
          border: none;
          text-align: center;
          margin-left: 30px;

        }

        .box {

          height: 30px;
          width: 130px;
          margin-left: 20px;
          margin-top: 0px;
          border-radius: 20px;
          border: none;
          text-align: center;

        }

        .b1 {
          height: 30px;
          width: 100px;
          color: #FFF5F3;
          margin-left: 20px;
          border-radius: 20px;
          background-color: #F3506D;
          border: none;
          cursor: pointer;

        }



        .midiv {

          margin-left: 150px;
          margin-bottom: -10px;
          padding: 15px 10px 30px 20px;
          margin-top: -100px;
          outline: none;
          width: 774.5px;
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

        .visible {
          cursor: pointer;


        }

        .layout {
          background-color: #d9dbdb;
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