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
            $y = $row["Hospital_ID"];
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
    <script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
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

                                    $sql = "SELECT Count(*) AS countS from donation_records where Hospital_ID='$y' and End_donation ='1' and AddStatus='0'";

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

                                                                            $sql = "SELECT Count(*) AS countS from donation_records where Hospital_ID='$y' and End_donation ='1' and AddStatus='0'";

                                                                            $results = $conn->query($sql);

                                                                            if ($results->num_rows > 0) {
                                                                                $row = $results->fetch_assoc();
                                                                                $status = $row["countS"];
                                                                                if ($status > 0) {
                                                                                    echo '<span class="icon-button__badge3">' . $status . '</span>';
                                                                                }
                                                                            }

                                                                            ?>Donation</span>
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






        </div>
        <div class="wrap">
            <div class="headings">
                <center>
                    <h1>Donation Details</h1>
                    <center>

            </div>


            <?php

            $donation_date = $_POST['RequestDate'];
            $batch_no = $_POST['RequestBatch'];
            // var_dump($y);
            $vql = "SELECT * FROM donation_records where Donation_date='$donation_date' AND Batch='$batch_no'";
            $result = $conn->query($vql);
            if ($result->num_rows > 0) {

                echo  "<div class='tab'>";
                echo  "<table border=1>" . "<tr>" . "<th style='text-align:center;'>" . "Donation Date" . "</th>" . "<th style='text-align:center;'>" . "Batch Number" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Donar ID" . "</th>" . "<th>" . "Donation ID" . "</th>" . "<th>" . "Blood Packet ID" . "</th>" . "<th>" . "Action" . "</th>" . "</tr>";
                echo "<tr>" . "<td style='height:15px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";
                while ($row = $result->fetch_assoc()) {


                    echo  "<tr>" . "<td>" . $row["Donation_date"] . "</td>" . "<td>" . $row["Batch"] . "</td>" . "<td>" . $row["Donor_Id"] . "</td>" . "<td>" . $row["Donation_ID"] . "</td>" . "<td>" . $row["packet_no"] .  "</td>";
                    echo "<td class='tb'><form method='POST' action ='Enter Blood testing result1.php'>
                                            <input type=hidden name=DID value=" . $row["Donor_Id"] . " >
                                            <input type=hidden name=PID value=" . $row["packet_no"] . " >
                                            <input type=hidden name=BID value=" . $row["Batch"] . " >
                                     <button type=submit value=add name=add  class='fp'><i class='fa-solid fa-pen-to-square'></i></button>
                                    </form>  </td>";

                    echo "</div>";
                    echo "</tr>";
                    echo "<tr>" . "<td style='height:15px;background-color:#F5F5F5;'colspan=8'>" . "</td>" . "</tr>";
                }
                echo  "</font>";
                echo  "</font>";
                echo "</table>";
            } else {
                echo "Error in " . $vql . "<br>" . $conn->error;

                echo "no results";
            }



            echo "</tbody></table>";
            echo "<br>";
            echo "<br>";
            echo "<br>";


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

<style>
    h1 {
        margin-left: -500px;
    }

    .tab {
        background-color: #F5F5F5;
        margin-top: 100px;
        margin-left: 200px;
        margin-right: 265px;
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
    .layout .sidebar {
    width: 280px;
    min-width: 280px;
    position: fixed;}
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

    tr {
        background-color: white;
    }
   

    table {
        width: 750px;
        height: 15px;
        border-collapse: collapse;
        margin-top: 40px;
        margin-left: -30px;
        border: 0px transparent;
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

    body {
        background-color: #d9dbdb;
    }

    .fp {
        margin-top: 15px;
    }
</style>

</html>