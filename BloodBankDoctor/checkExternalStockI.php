<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
    require "conp.php";
    $today =date("Y-m-d");
    $m= $_SESSION["Name"];
    $query = "select * from bloodbank_doctor where UserName ='$m'";
    
    
           
    $resultd = $conn->query($query);
    
    //echo "Error in ".$vql."<br>".$conn->error;
    
    if($resultd->num_rows>0)
    
    {        
    
    while($row = $resultd->fetch_assoc())
    
    {
    
    
    
    
    $x= $row["BloodBank_doctor_ID"];
    $hid=$row["Hospital_ID"];
    
    
    
    
    
    }
    
    
    }
    
     			
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>side bar- blood bank doctor</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./styleM.css">
<link rel="stylesheet" href="./StyleSheetNotification.css">
 
 
 <style>
 table{
	
	
	margin-left:120px;
	width:800px;
	height:20px;
	border-collapse: collapse;	
		margin-top:70px;
   border:0px transparent;		
 	
}
   .passwordDiv{

                     
                     //margin: 25px 0px 2px 95px;
					 line-height:92%;
					 padding-top:20px;

               }                 



           .midiv{

                    background-color:transparent;
                    
                    //margin-left:396px;
                   // margin-right:325px;
                    margin-bottom:-52px;
                    padding:2px 90px 30px 10px;
					margin-top:10px;
					outline:none;
					border-radius: 25px;

               }
			   
			   .b2{
					  
					      
					        width:130px;
                            height:40px;					   
						    color:#FFF5F3;
							 margin:-141px 6px -27px 530px;
							 border-radius:30px;
                             border: none;
                             background-color:#F35050;
				    
				  
				  }
 		  
		  
		  
		    .b3{
					  
					      
					        width:130px;
                            height:40px;					   
						    color:#FFF5F3;
						      margin:10px 20px 100px 360px;
							 border-radius:30px;
                             border: none;
                           background-color:#F35050;
						     cursor:pointer;
						   
				    
				  
				  }
 		  
		      .lk{
	
	
	margin-left:110px;
	width:800px;
	height:20px;
	border-collapse: collapse;	
		margin-top:30px;
   border:0px transparent;	
	
	
}

.select{
	
	 
  height:40px;
  width:155px;
  border-radius:10px;
  background-color:#B2C0E0;;
   border: none;
  text-align:center;
  font-weight:700;
                      
   
             
   
 }

.elect{
	
	 
 height:30px;
 width:148px;
 border-radius:10px;
 background-color:#E0B0FF;
  border: none;
 text-align:center;
                     
  
						
	
}


  .b1{
					      height:35px;
                          width:130px;
                          
						  color:#FFF5F3;
						  margin-left:10px;
						   border-radius:20px;
                           
               background-color:#F35050;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }

          a{
                   text-decoration:none;

          }
		  
			   </style>
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
	   
<div class="slider">
<br> <br>




<div class="midiv"> 
   <div class="passwordDiv">

    <center><h1>Check External Stock Availability</h1></center>
       
    
     <form method="post" action="checkExternalStockI.php">
          <table border=1> <tr> <th style='width:180px;'> Blood Group</th><th style='width:180px;'>Component Type</th><th style='width:180px;'>No of Packs</th><th></th></tr>
		  <tr> <td style='height:20px;background-color:transparent;'colspan=4'></td> </tr>
		  
	    <tr> 
							 
							 <td>  <select name= "Blood_group" class="select"> 
							 <option value='None'>None</option>
                             <option value='A+'>A+</option>
                             <option value='A-'>A-</option>
                             <option value='B+'>B+</option>
                             <option value='B-'>B-</option>
                             <option value='O+'>O+</option>
                             <option value='O-'>O-</option>
                             <option value='AB+'>AB+</option>
                             <option value='AB-'>AB-</option>
                             </select></td> 
							 
							 
							 <td> <select name= "Component_type" class="select"> 
							 <option value='None'>None</option>							 
                             <option value="Red Blood Cells">Red Blood Cells</option>    
                             <option value="White Blood Cells">White Blood Cells</option>
                             <option value="Plasma">Plasma</option>
                             </select></td>
							 
                             <?php
             $value1 =1;
             $value2 =2;
             $value3 =3;
             $value4 =4;
							 echo "<td> <select name= 'No_of_packs' class='select'> 
							 	<option value='None'>None</option>
                             <option value=$value1>1</option>
                             <option value=$value2>2</option>
                             <option value= $value3>3</option>
                             <option value= $value4 >4</option>
                             </select></td>" 
							 ?>
							 
							 
							<td> <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button></td></tr> 
							 <tr> <td style='height:20px;background-color:transparent;'colspan=4'></td> </tr>
							  <tr> <td style='height:20px;background-color:transparent;'colspan=4'></td> </tr>
							 
							
	    </table>
							 
            </form> 
          </div>
		

   
  </div>
 


  </div>

  
  <button type="submit"  name="BtnSubmit2" id="saveChanges" class="b3" ><b><a href="sendRequestI.php" style="color:white;">  Proceed</a></b></button>
	  
	  <button type="button"  name="btnCancel" id="Cancel" class="b2" ><b><a href="home.php"><font color="white">Cancel</font></a></b></button>
  <?php


if(isset($_POST['BtnSubmit']))
    
{		
     $Blood_group =$_POST["Blood_group"];
$Component_type =$_POST["Component_type"];
$No_of_packs =$_POST["No_of_packs"];	

 $vql="select * from bloodbank_doctor where BloodBank_doctor_ID='$x'";	
		
		$resultr = $conn->query($vql);
		 
		//  echo "Error in ".$vql."<br>".$conn->error;
//$y=null;
if($resultr->num_rows>0)

{        
    
   while($rowx = $resultr->fetch_assoc())
   
   {
	    


	   
       $y= $rowx["Hospital_ID"];



	  
	}
	
      
	//echo "Blood Group: " . $Blood_group . "<br>";
//echo "Component Type: " . $Component_type . "<br>";
//echo "No of packs: " . $No_of_packs . "<br>";


//------------------check the blood group ,component type,no of packs if those three are not none then the query inside this will 
//be executed

  if($Blood_group !="None" && $Component_type !="None" && $No_of_packs != "None")
 
 {
   $sql ="select Hospital_ID,Count(*) AS count
  from stock
  where ExpiryDate >'$today'AND Hospital_ID != $y
  group by Blood_group,Component_type,Hospital_ID
  HAVING COUNT(*) >= $No_of_packs AND Blood_group='$Blood_group' AND Component_type='$Component_type'";
  

$result = $conn->query($sql);

if ($result->num_rows > 0) {
$hospitals = array();
while ($row = $result->fetch_assoc()) {
  $hospital_id = $row['Hospital_ID'];
  $hospitals[] = $hospital_id;
}

$hospital_names = array();
foreach ($hospitals as $hospital_id) {
  $hos = "SELECT HospitalName FROM hospital WHERE Hospital_ID = $hospital_id";
  $resulth = $conn->query($hos);
  if ($resulth->num_rows > 0) {
      while ($row = $resulth->fetch_assoc()) {
          $hospital_name = $row['HospitalName'];
          $hospital_names[] = $hospital_name;
      }
  }
}

if (!empty($hospital_names)) {
  $message = "Available in " . implode(', ', $hospital_names);
  echo '<script type="text/javascript">';
  echo "alert('$message');";
  echo '</script>';
}
} else {
echo '<script type="text/javascript">';
echo 'alert("Not available");';
echo '</script>';
}



}








//------------------check the blood group is none and component type,no of packs if those two are not none then the query inside this will 
//be executed
else if($Blood_group =="None" && $Component_type !="None" && $No_of_packs!= "None")
 
{
 
  //-----------first remove records which has the hospital id $y and which has long expiry dates and group the stock by hospital id and the component type red id1 -->one grp red id4-->second grp white id5 -->third grp
  //when grouping the groups should have the given component type and count should be more than given count
  $sql ="select Hospital_ID,Count(*) AS count
  from stock
  where ExpiryDate >'$today' AND Hospital_ID != $y 
  group by Component_type,Hospital_ID 
  HAVING COUNT(*) >= $No_of_packs AND Component_type='$Component_type'";
  
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$hospitals = array();
while ($row = $result->fetch_assoc()) {
  $hospital_id = $row['Hospital_ID'];
  $hospitals[] = $hospital_id;
}

$hospital_names = array();
foreach ($hospitals as $hospital_id) {
  $hos = "SELECT HospitalName FROM hospital WHERE Hospital_ID = $hospital_id";
  $resulth = $conn->query($hos);
  if ($resulth->num_rows > 0) {
      while ($row = $resulth->fetch_assoc()) {
          $hospital_name = $row['HospitalName'];
          $hospital_names[] = $hospital_name;
      }
  }
}

if (!empty($hospital_names)) {
  $message = "Available in the following hospitals: " . implode(', ', $hospital_names);
  echo '<script type="text/javascript">';
  echo "alert('$message');";
  echo '</script>';
}
} else {
echo '<script type="text/javascript">';
echo 'alert("Not available");';
echo '</script>';
}


}



}


}
//echo "Error in ".$sql."<br>".$conn->error;
//$conn->close(); 
?>

          
        </main>
     
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