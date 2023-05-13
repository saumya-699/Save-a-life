<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	
	
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
                <li class="menu-header"><span>  </span></li>
                <li class="menu-item">
                  <a href="#">
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
                          <span class="menu-title">Send requests</span>
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
                <li class="menu-item">
                  <a href="Notifications.php">
                    <span class="menu-icon">
                      <i class="ri-notification-line"></i>
                    </span>
                    <span class="menu-title">Notifications</span>
                  </a>
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
   
	  require "config.php";
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
 

  include "config.php";
            if (isset($_POST['BtnSubmit'])) {
                $blood_group = $_POST["blood_group"];
                $component = $_POST["component"];

                //$HID=$_POST["hid"];
                $From = $_POST["From"];
                $To = $_POST["To"];

                $date = date("Y/m/d");
                //    var_dump($blood_group,$From,); 
                if(($blood_group == "A-" || $blood_group == "A+" || $blood_group == "B-" || $blood_group == "B+" || $blood_group == "O-" || $blood_group == "O+" || $blood_group == "AB-" || $blood_group == "AB+" )&& ($component =="Red Cells" || $component=="Plasma" ||$component =="White Cells" || $component =="Plateletes")){
                $sql = "SELECT * FROM stock where Hospital_ID ='$HID' and Blood_group='$blood_group' and  Component_type = '$component' and ProcessDate between '$From' and '$To'";
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




            $sql = "SELECT * FROM stock where Hospital_ID ='$HID'  and ProcessDate between '$From' and '$To'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {


                //echo "<font color=red>";
                //echo "<font size=6>";

                echo  "<div class='container_content' id='container_content'>";
                echo "<h2><center>Blood Testing Details Report of $HospitalName</center> </h2>";
                echo "<h5><center>Save a Life</center> </h5>";
                echo "<h5><center>printed on $date</center> </h5><br><br>";




                echo  "<table border=1>" . "<tr>" . "<th style='text-align:center;width:200px;'>" . "Blood Bag ID" . "</th>" . "<th style='text-align:center;width:120px;'>" . "Blood Group" . "</th>" . "<th style='text-align:center;width:100px;'>" . "Component Type" . "</th>" . "<th>" . "Expiry Date" . "</tr>";
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
                format:'letter',
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
