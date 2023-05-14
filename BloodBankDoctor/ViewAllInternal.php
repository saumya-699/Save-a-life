<?php 
session_start();
require "conp.php";
?>


 <?php
   if(isset($_SESSION["ID"]))   {
    $m = $_SESSION["Name"];
    $x=null;
    $hid=null;
    $ID=null;

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
  <title>side bar- blood bank doctor</title>
    <title>side bar- blood bank doctor</title>
 <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./styleM.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./stylek.css">
 <link rel="stylesheet" href="StyleSearch.css"> 
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
		  
		  	  
             <div class="container-shadow">
  </div>
  <div class="container">
    <div class="wrap">
     
   <div>
      <h1> Blood Request</h1>
      
      </div>
		
		
 <?php


require 'conp.php';
//-----------------------------------------------------------data is passed to this page by ViewInternalRequestI page 
//-----------------------------------------------------------it will first check whether the  view button is clicked and the get the Request_ID from post method and select the relevant Request_ID from blood request table
if(isset($_POST['view']))  

{	 
   $did=$_POST['Request_ID'];
   $query="select * from blood_request where requeste_id='$did'";
   $result= $conn->query($query);
   
  if($result->num_rows>0)

  {     
   

       
    while($row = $result->fetch_assoc())
   
   {     
     
	 // echo   $row["WardDoctor_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["Specialization"]."</td>"."<td>".$row["SLMC_Number"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["ContactNumber"]."</td>";
	   
	   
echo "

     <form action='ViewInternalRequestI.php' method='POST'>
	                <input type='hidden' value=".$row["requeste_id"]." name='requeste_id' id='requeste_id' class='box'>

                                <label >Patient Name</label>
                                <input type='text'  value=".$row["patient_name"]." name='patient_name'>

                                
                                <label name='date_Of_birth'>Patient's Date of birth (MM/DD/YYYY)</label>
								 <input type='text'  value=".$row["date_of_birth"].">
                               
                                
                                
                                <label>Patient Gender</label>
                                <select name='patient_gender'>
                               <option value=".$row["patient_age"]."> ".$row["patient_age"]." </option>
                             
               
                            </select>
                            
                             
                            <label>Blood Group</label>
                                <select name='blood_group'>
                               <option value=".$row["blood_group"]."> ". $row["blood_group"] ."  </option>
                                
                            </select>

                            <label >Required Blood Component</label>
                                <select name='blood_component'>
                              
                                <option value=".$row["blood_component"].">". $row["blood_component"] ." </option>
	                            
                            </select>

                            <label>Required Amount (packets)</label>
                                <select name='required_amount'>
                               <option value=".$row["required_amount"]." >". $row["required_amount"] ." </option>
                              
                            </select>

                                
                            <label name='expected_date'>Expected date to receive (MM/DD/YYYY)</label>
                              	<input type='text'  value=".$row["date_of_birth"].">
                               

							   <label name='reason'>Reason for the request</label>
								 <input type='text'  name='patient_name' value=".$row["reason"].">
                                
                                <label>Ward number</label>
                                <select name='ward_number'>
                                <option value=".$row["ward_number"].">  " . $row["ward_number"] . " </option>
                               
                            </select>

                            <label name='remark'>Remark</label>
                             <input type='text'  name='patient_name' value=".$row["remark"].">

                                <br><br>
                                <div class='row btn-buttons'>
                          
                           
                                <div class='col btn-but'> <input type='submit' name='btnCancel' value='Cancel' class='b2'></div>
                               </div>
                            </form>

 ";
  
  
	   
		 
			 
	}
	
	
	
	
}	

 else

 {
  //echo "Error in ".$query."<br>".$conn->error;

 echo "no results";

 }

}

$conn->close();
?>


<!--<button type="submit" name="data" id="data" class="bx"><a href="RemoveOrUpdateBB.php"><font color="white"><font size="3">Back</font></font></a></button>-->





          
        </main>   </div>
    </div>

     
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>

</body>
</html>
	<?php
	
}
 else 
	 
	 {echo '<script type="text/javascript">';
		 echo 'alert("Please log in first");';
         
		echo 'window.location.href="userloginFront.php";';
  echo '</script>';
	 }
 
?>