<?php 
session_start();
require "conp.php";
?>


 <?php
   if(isset($_SESSION["ID"]))   {
    $m = $_SESSION["Name"];
    $query = "SELECT * FROM bloodbank_doctor WHERE UserName ='$m'";
    $result1 = $conn->query($query);
    $ID =null;
     if($result1->num_rows > 0) {        
      while($row = $result1->fetch_assoc()) {
        $x = $row["Hospital_ID"];
       $hid= $x;
        $ID =$row["BloodBank_doctor_ID"];
      }
    }
  
	
?>
<html lang="en" >
<head>
  
  <meta charset="UTF-8">
  <title>side bar-director</title>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./styleM.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./stylek.css">
 <link rel="stylesheet" href="StyleSearch.css"> 
 <link rel="stylesheet" href="StyleIcons.css"> 
 <script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="./StyleSheetNotification.css">

</head>
<body>
<!-- partial:index.partial.html --><!-- partial:index.partial.html -->
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
                <li class="menu-header"><span>  </span></li>
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



                <li class="menu-header" style="padding-top: 40px"><span>  </span></li>
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
            <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a></div>
          
    <?php
   
	  require "conp.php";
	  $m= $_SESSION["Name"];
    $query = "select * from bloodbank_doctor where UserName ='$m'";
    
    
           $HID=null;
    $resultd = $conn->query($query);
    
    //echo "Error in ".$vql."<br>".$conn->error;
    
    if($resultd->num_rows>0)
    
    {        
    
    while($row = $resultd->fetch_assoc())
    
    {
    
    
    
    
    $HID= $row["Hospital_ID"];
    
    $HospitalName= $row["HospitalName"];
    
    
    
    }
    
    
    }
 

  include "conp.php";
            if (isset($_POST['BtnSubmit'])) {
                $blood_group = $_POST["blood_group"];
                //$HID=$_POST["hid"];
                $From = $_POST["From"];
                $To = $_POST["To"];

                $date = date("Y/m/d");
                //    var_dump($blood_group,$From,); 
                if($blood_group == "A-" || $blood_group == "A+" || $blood_group == "B-" || $blood_group == "B+" || $blood_group == "O-" || $blood_group == "O+" || $blood_group == "AB-" || $blood_group == "AB+"){
                $sql = "SELECT * FROM blood_testing_result where Hospital_ID ='$HID' and blood_group='$blood_group' and process_date between '$From' and '$To'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {


                    //echo "<font color=red>";
                    //echo "<font size=6>";

                    echo  "<div class='container_content' id='container_content'>";
                    echo "<h2><center>Blood Testing Details Report of $HospitalName</center> </h2>";
                    echo "<h5><center>Save a Life</center> </h5>";
                    echo "<h5><center>printed on $date</center> </h5><br><br>";




                    echo  "<table border=1>" . "<tr>" . "<th style='text-align:center;width:200px;'>" . "Test result ID" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Donar ID" . "</th>" . "<th style='text-align:center;width:100px;'>" . "Blood group" . "</th>" . "<th>" . "Malaria result" . "</th>" . "<th>" . " HIV result" . "</th>" . "<th>" . "HBV result" . "</th>" . "<th>" . "HCV result" . "</th>" . "<th>" . "VDRL result" . "</th>" . "<th>" . "Processed Date" . "</th>" . "<th>" . "Batch number" . "</th>" . "</tr>";
                    echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=12'>" . "</td>" . "</tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo  "<tr>" . "<td>" . $row["test_result_id"] . "</td>" . "<td>" . $row["Donor_Id"] . "</td>" . "<td>" . $row["blood_group"] . "</td>" . "<td>" . $row["malaria_result"] . "</td>" . "<td>" . $row["hiv_result"] . "</td>" . "<td>" . $row["hbv_result"] . "</td>" . "<td>" . $row["hcv_result"] . "</td>" . "<td>" . $row["vdrl_result"] . "</td>" . "<td>" . $row["process_date"] . "</td>" . "<td>" . $row["batch_number"] . "</td>";

                        echo "</tr>";

                        echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=12'>" . "</td>" . "</tr>";
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




            $sql = "SELECT * FROM blood_testing_result where Hospital_ID ='$HID' and process_date between '$From' and '$To'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {


                //echo "<font color=red>";
                //echo "<font size=6>";

                echo  "<div class='container_content' id='container_content'>";
                echo "<h2><center>Blood Testing Details Report of $HospitalName</center> </h2>";
                echo "<h5><center>Save a Life</center> </h5>";
                echo "<h5><center>printed on $date</center> </h5><br><br>";




                echo  "<table border=1>" . "<tr>" . "<th style='text-align:center;width:200px;'>" . "Test result ID" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Donar ID" . "</th>" . "<th style='text-align:center;width:100px;'>" . "Blood group" . "</th>" . "<th>" . "Malaria result" . "</th>" . "<th>" . " HIV result" . "</th>" . "<th>" . "HBV result" . "</th>" . "<th>" . "HCV result" . "</th>" . "<th>" . "VDRL result" . "</th>" . "<th>" . "Processed Date" . "</th>" . "<th>" . "Batch number" . "</th>" . "</tr>";
                echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=12'>" . "</td>" . "</tr>";
                while ($row = $result->fetch_assoc()) {
                    echo  "<tr>" . "<td>" . $row["test_result_id"] . "</td>" . "<td>" . $row["Donor_Id"] . "</td>" . "<td>" . $row["blood_group"] . "</td>" . "<td>" . $row["malaria_result"] . "</td>" . "<td>" . $row["hiv_result"] . "</td>" . "<td>" . $row["hbv_result"] . "</td>" . "<td>" . $row["hcv_result"] . "</td>" . "<td>" . $row["vdrl_result"] . "</td>" . "<td>" . $row["process_date"] . "</td>" . "<td>" . $row["batch_number"] . "</td>";

                    echo "</tr>";

                    echo "<tr>" . "<td style='height:20px;background-color:#F5F5F5;'colspan=12'>" . "</td>" . "</tr>";
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
            filename: 'Report.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: [15, 8.5],
                orientation: 'landscape'
            }
        };
        // Choose the element that our invoice is rendered in.
        html2pdf().set(opt).from(element).save();
    }
</script>




     
             
		
		
		
		
		
		
		
		  
        </main>
      
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>
  <style>
.z{
   font-size:20px;
   margin-top:50px;
   margin-left:840px;
   margin-right:45px;
   height:47px;					   
   border: none;
                 //background-color:#F35050;
                 //width: 100%;
background: #4082f5;
//text-transform: uppercase;
// padding: 12px;
cursor: pointer;
box-shadow: 0px 10px 40px 0px rgba(17, 97, 237, 0.4);
font-weight: 700;
font-size: 20px;	
border-radius:30px;
}
</style>
     
</body>
</html>
<?php
	
}
 
?>
