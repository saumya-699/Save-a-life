<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	
	
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>side bar- blood bank doctor</title>
    <title>side bar- blood bank doctor</title>
 <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="styleM.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="stylek.css">
<script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="StyleSearch.css"> 

</head>
<body>
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
          
		  
           <h1>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;Identified Donors</h1>
		
      <?php
 
 require 'conp.php';
 if(isset($_POST['send']))  
 
 {	
 
 
     $m= $_SESSION["Name"];
     $queryx = "select * from bloodbank_doctor where UserName ='$m'";
     
     
            
     $resultd = $conn->query($queryx);
     
     //echo "Error in ".$vql."<br>".$conn->error;
     $hid=null;
     if($resultd->num_rows>0)
     
     {        
     
     while($row = $resultd->fetch_assoc())
     
     {
     
     
     
     
     $x= $row["BloodBank_doctor_ID"];
     
     $hid= $row["Hospital_ID"];
     
     
     
     
     
     }
     
     
     } 

     $date =date("Y-m-d");
    $query="select * from blood_testing_result,donors where donors.Donor_Id =blood_testing_result.Donor_Id and blood_testing_result.status='Checked'  and  blood_testing_result.Email_sent =0 and(blood_testing_result.BloodBank_doctor_ID='$x' and (blood_testing_result.Hospital_ID = '$hid' and (blood_testing_result.process_date ='$date' and(malaria_result='positive' or hiv_result='positive' or hbv_result='positive' or hcv_result='positive' or vdrl_result='positive'))))"; //where BloodBank_doctor_ID='$x' and malaria_result='positive' or hiv_result='positive' or hbv_result='positive' or hbv_result='positive' or hbv_result='positive'
    $result= $conn->query($query);
    
   if($result->num_rows>0)
 
   {     
    
    echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Donor ID"."</th>"."<th>"."Test Result ID"."</th>"."<th>"."Full Name"."</th>"."</tr>";
    echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=3'>"."</td>"."</tr>";
        
     while($row = $result->fetch_assoc())
    
    {     
      
       echo   "<tr>"."<td>".$row["Donor_Id"]."</td>"."<td>".$row["test_result_id"]."</td>"."<td>".$row["Full_Name"]."</td>"
  ;
       

 /* echo "<td>";
  if($row["malaria_result"]=='Positive')
  {
      echo "Malaria";
  } 
  else if($row["hiv_result"]=='Positive')
  {
      echo "HIV";
  } 
  else if($row["hbv_result"]=='Positive')
  {
      echo "HBV";
  } 
  else if($row["hcv_result"]=='Positive')
  {
      echo "HCV";
  } 
  else if($row["vdrl_result"]=='Positive')
  {
      echo "VDRL";
  }
  echo "</td>";*/
  echo "</tr>";
       
       
  echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=3'>"."</td>"."</tr>";
  
      $data_array[] = $row["Email"];
       
     
     }
    
    
     echo "<form method='POST' action ='EmailDeBackEnd.php'>";
     $email_list = implode(",", $data_array);
     echo "<input type='hidden' name='emails[]' value='$email_list'>";
     echo "<button type='submit' name='send'  value = 'btn' class='z'> <span style='color: white;'>Send</span></button>";
     echo "</form>";
    
 
          
     
    echo "</font>";
	 echo  "</font>";   
	 echo "</table>";  
     
 }	
 
  else
 
  {
    echo "<center>No results<center>";
   //echo "Error in ".$query."<br>".$conn->error;
 
  //echo "no results";
 
  }
 
 }
 
 $conn->close();
 ?>

<!--<button type="submit" name="data" id="data" class="bx"><a href="RemoveOrUpdateBB.php"><font color="white"><font size="3">Back</font></font></a></button>-->


<style>
.z{
   font-size:600px;
   margin-top:100px;
   margin-right:120px;
   margin-left:780px;
   height:47px;					   
   border: none;
                 //background-color:#F35050;
                 //width: 100%;
background: #4082f5;
//text-transform: uppercase;
 padding: 1px;
cursor: pointer;
box-shadow: 0px 10px 40px 0px rgba(17, 97, 237, 0.4);
font-weight: 500;
font-size: 20px;	
width:110px;
height:40px;
border-radius:30px;

}

table{

margin-top:-200px;
margin-bottom:30px;

}
</style>
          
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