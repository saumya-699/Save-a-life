

<?php
session_start();
if(isset($_SESSION["ID"])) {
  include "conp.php";
  $date =date("Y/m/d");
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM bloodbank_doctor WHERE UserName ='$m'";
  $result1 = $conn->query($query);

   if($result1->num_rows > 0) {        
    while($row = $result1->fetch_assoc()) {
      $x = $row["Hospital_ID"];
      $ID =$row["BloodBank_doctor_ID"];
    }
  }
  $request_date=$_POST['RequestDate'];
  $batch_no=$_POST['RequestBatch'];

  $vql = "SELECT * FROM blood_testing_result Where Hospital_ID ='$x' and send_status='1' AND process_date='$request_date' AND batch_number='$batch_no' Group by process_date,batch_number ";
  $result = $conn->query($vql);
}
?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>side bar- blood bank doctor</title>
  
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./styleM.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./stylek.css">
<script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="StyleSearch.css"> 
 <link rel="stylesheet" href="StyleIcons.css"> 
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
                <li class="menu-item">
                  <a href="View_Donors_BI.php">
                    <span class="menu-icon">
                      <i class="ri-user-heart-fill"></i>
                    </span>
                    <span class="menu-title">Donors</span>
                  </a>
                 </li>
                <li class="menu-item">
                  <a href="ReportGeneration_BI.php">
                    <span class="menu-icon">
                      <i class="ri-file-chart-line"></i>
                    </span>
                    <span class="menu-title">Reports</span>
                  </a>
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
                    <span class="menu-title">Notifications</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                    <li class="menu-item">
                        <a href="Notifications.php">
                          <span class="menu-title">Blood Request</span>
                        </a>
                      <li class="menu-item">
                        <a href="Notifications1.php">
                          <span class="menu-title">Blood Testing</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="Notifications2.php">
                          <span class="menu-title">Cross Matching</span>
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
             <!--add your content from here-->
           
 
          <h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blood Testing Result</h1> 


    

        
           
                <?php
                if ($result->num_rows > 0) {

                 //   echo  "<div class='tab'>";
                    echo  "<table border=1>"."<tr>"."<th style='text-align:center'>"."Processed Date"."</th>"."<th style='text-align:center;'>"."Batch Number"."</th>"."<th style='text-align:center;width:120px;'>"."Status"."</th>"."<th>"."Action"."</th>"."</tr>";
                    echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
                 while($row = $result->fetch_assoc()) {    
                           
     
     echo  "<tr>"."<td>".$row["process_date"]."</td>"."<td>".$row["batch_number"]."</td>"."<td>".$row["status"]."</td>";   
    
	 echo "<td><form method='POST' action ='SendBapproval1.php'>
   <input type=hidden name=Requestbatch value=".$row["batch_number"]." >
   <input type=hidden name=process_date value= ".$row["process_date"]." >
   <button type=submit value=view name=view  id=btn class='x'><i class='fa-sharp fa-solid fa-eye'></i></button>
     </form>    	

    
    <form method='POST' action ='BloodREsultsI.php'>
    <input type=hidden name=process_date value=".$row["process_date"]." >
    <input type=hidden name=Requestbatch value=".$row["batch_number"]." >
    <button type=submit  name=check id=btn class=y><i class='fa-regular fa-circle-check'></i></button>
     </form>    	

    </td>"; 

  
    //echo "</div>";	
     echo "</tr>";

     echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
	  
	}
	echo  "</font>"; 
	 echo  "</font>";
	 echo "</table>";
	
  
	
}	

else

{
  echo "Error in ".$vql."<br>".$conn->error;

 echo "no results";

}


$conn->close();
?>
<form method='POST' action ='EmailDe.php'>
    
  
    <button type=submit  name=send class=z><span style="color: white;">Send Emails</span></button>
     </form> "; 

<?php
if(isset($_POST['check']))  

{	  include "conp.php";

     $status="checked";
   $did=$_POST['process_date'];
 
   $RBI=$_POST['Requestbatch'];
   $sql="update blood_testing_result set status ='$status', BloodBank_doctor_ID ='$ID'  where process_date='$did'and  Hospital_ID ='$x' and batch_number= '$RBI' ";
   
   
   
     if ($conn->query($sql) === TRUE) 
				   {
                          
                           echo '<script type="text/javascript">';
		                  //echo 'alert("Details updated successfully");';
         
		                     echo 'window.location.href="#.php";';
		                  echo '</script>';

                   } 
					 
					 else 
			               {  
                              echo '<script type="text/javascript">';
		                     // echo 'alert("Error in updating details.Try again!");';
                              echo "Error in ".$query."<br>".$conn->error;
		                      echo 'window.location.href="updateAccount.php";';
		                      echo '</script>';

                            }
							
							
							
							
 
}

?>
          
</div>
        </main>
       
      </div>
    </div>

    <style>
 
.z{
   font-size:15px;
   margin-top:50px;
   margin-left:790px;
   height:47px;					   
   border: none;
                 //background-color:#F35050;
                 //width: 100%;
background: #4082f5;
//text-transform: uppercase;
 padding: 10px;

cursor: pointer;

font-weight: 700;

border-radius:30px;

}

</style>

</style>
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>
</body>
</html>
	
 

