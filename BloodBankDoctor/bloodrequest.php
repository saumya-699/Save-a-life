<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {


    require "conp.php";
    $m= $_SESSION["Name"];
    $query = "select * from bloodbank_doctor where UserName ='$m'";
    
    
           
    $resultd = $conn->query($query);
    
    //echo "Error in ".$vql."<br>".$conn->error;
    $x=null;
    if($resultd->num_rows>0)
    
    {        
    
    while($row = $resultd->fetch_assoc())
    
    {
    
    
    
    
    $x= $row["Name_With_Initials"];
    $ID =$row["BloodBank_doctor_ID"];
    $hid =$row["Hospital_ID"];
    
    
    
    
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
 <link rel="stylesheet" href="StyleSearch1.css"> 
 <script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="StyleIcons.css"> 
 <link rel="stylesheet" href="./StyleSheetNotification.css">
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
          
    
		
		
       
       
		
		
		
		  
      
             <!--add your content from here-->
          <center> <h1>Blood Request</h1></center>  

<?php

require 'conp.php';
$date =date("Y/m/d");


//
//echo $requestid;
$query="select * from bloodbank_doctor where Name_With_Initials='$x'";
   $result= $conn->query($query);

  if($result->num_rows>0)

   {     

      while($row = $result->fetch_assoc())
 
       {   
     	  $s= $row["Hospital_ID"];
		 
       }
	   
	   
   }


else

{
  //echo "Error in ".$query."<br>".$conn->error;

 //echo "no results";

}





if(isset($_POST['Accept']))  

{	
    $requestid= $_POST['Request_ID'];
     $status="Processing";
   $did=$_POST['Request_ID'];
   $sql="update blood_request set status ='$status', BloodBankDoctor_ID ='$ID' where requeste_id ='$did'";
   
   
   
     if ($conn->query($sql) === TRUE) 
				   {
                          $rql ="SELECT * from blood_request where requeste_id='$requestid'";
	   $resultx= $conn->query($rql);
	  
	 
	  if($resultx->num_rows>0)
		  
		  {



 

  
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   //echo  "<div style='overflow-x:auto; ' class='tab'> ";
	    // echo  "<div class='hat'>";
	   echo  "<table border=1>"."<tr>"."<th>"."Blood Group"."</th>"."<th style='text-align:center;width:120px;'>"."Required<br> Blood Component"."</th>"."<th>"."Required <br>Amount (packets)"."</th>"."<th style='text-align:center;width:120px;'>"."Expected date <br> to receive"."</th>"."<th style='text-align:center;width:120px;'>"."Reason"."</th>"."<th style='text-align:center:width:40px;'>"."Status"."</th>"."<th style='text-align:center;width:100px;'>"."Action"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
   while($row = $resultx->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["blood_group"]."</td>"."<td>".$row["blood_component"]."</td>"."<td>".$row["required_amount"]."</td>"."<td>".$row["expected_date"]."</td>"."<td>".$row["reason"]."</td>"."<td>".$row["status"]."</td>";
	   echo "<td>
				
                
				<form method='POST' action ='bloodrequest.php'>
                <input type=hidden name=Request_ID value=".$row["requeste_id"].">
                <button type=submit name=Accept id=btn class=s1><i class='fa-solid fa-thumbs-up'></i></button>
                </form>
				
				<form method='POST' action ='bloodrequest.php'>
                <input type=hidden   name=Request_ID value=".$row["requeste_id"]." >
                <button type=submit  name=Available  id=btn class=t1><i class='fa-regular fa-circle-check'></i></button>
                </form> 
				
				<form method='POST' action ='bloodrequest.php'>
                <input type=hidden name=Request_ID value=".$row["requeste_id"].">
                <button type=submit name=NotAvailable id=btn class=u1><i class='fa-regular fa-circle-xmark'></i></button>
                </form>  

              
                <form method='POST' action ='ViewAllInternal.php'>
                <input type=hidden name=Request_ID value=".$row["requeste_id"].">
                <button type=submit name=view id=btn class=v><i class='fa-sharp fa-solid fa-eye'></i></button>
                </form>   </td>" ;
				 echo "</tr>";
	 
	   echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
	// echo "</div>";
	// echo "</div>";
	
		  }
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



if(isset($_POST['Available']))  

{	
    $requestid= $_POST['Request_ID'];
    $status="Available";
  $did=$_POST['Request_ID'];
  $sql="update blood_request set status ='$status', BloodBankDoctor_ID ='$ID' where requeste_id ='$did'";
  
  
  
    if ($conn->query($sql) === TRUE) 
                  {
                         $rql ="SELECT * from blood_request where  requeste_id='$requestid'";
      $resultx= $conn->query($rql);
     
    
     if($resultx->num_rows>0)
         
         {





 
  

         //echo "<font color=red>";
         //echo "<font size=6>";
      
      //echo  "<div style='overflow-x:auto; ' class='tab'> ";
       // echo  "<div class='hat'>";
      echo  "<table border=1>"."<tr>"."<th>"."Blood Group"."</th>"."<th style='text-align:center;width:120px;'>"."Required<br> Blood Component"."</th>"."<th>"."Required <br>Amount (packets)"."</th>"."<th style='text-align:center;width:120px;'>"."Expected date <br> to receive"."</th>"."<th style='text-align:center;width:120px;'>"."Reason"."</th>"."<th style='text-align:center:width:40px;'>"."Status"."</th>"."<th style='text-align:center;width:100px;'>"."Action"."</th>"."</tr>";
     echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
  while($row = $resultx->fetch_assoc())
  
  {     
    
     echo  "<tr>"."<td>".$row["blood_group"]."</td>"."<td>".$row["blood_component"]."</td>"."<td>".$row["required_amount"]."</td>"."<td>".$row["expected_date"]."</td>"."<td>".$row["reason"]."</td>"."<td>".$row["status"]."</td>";
      echo "<td>
               
               
               <form method='POST' action ='bloodrequest.php'>
               <input type=hidden name=Request_ID value=".$row["requeste_id"].">
               <button type=submit name=Accept id=btn class=s1><i class='fa-solid fa-thumbs-up'></i></button>
               </form>
               
               <form method='POST' action ='bloodrequest.php'>
               <input type=hidden   name=Request_ID value=".$row["requeste_id"]." >
               <button type=submit  name=Available  id=btn class=t1><i class='fa-regular fa-circle-check'></i></button>
               </form> 
               
               <form method='POST' action ='bloodrequest.php'>
               <input type=hidden name=Request_ID value=".$row["requeste_id"].">
               <button type=submit name=NotAvailable id=btn class=u1><i class='fa-regular fa-circle-xmark'></i></button>
               </form>  

             
               <form method='POST' action ='ViewAllInternal.php'>
               <input type=hidden name=Request_ID value=".$row["requeste_id"].">
               <button type=submit name=view id=btn class=v><i class='fa-sharp fa-solid fa-eye'></i></button>
               </form>   </td>" ;
                echo "</tr>";
    
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
     
   }
   
    echo "</font>";
    echo  "</font>";   
    echo "</table>";
   // echo "</div>";
   // echo "</div>";
   
         }
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


if(isset($_POST['NotAvailable']))  

{	

    $requestid= $_POST['Request_ID'];
    $status="Not Available";
   $did=$_POST['Request_ID'];
    $sql="update blood_request set status ='$status', BloodBankDoctor_ID ='$ID' where requeste_id ='$did'";
  
  
  
    if ($conn->query($sql) === TRUE) 
                  {
                         $rql ="SELECT * from blood_request where requeste_id='$requestid'";
      $resultx= $conn->query($rql);
     
    
     if($resultx->num_rows>0)
         
         {





 
  

         //echo "<font color=red>";
         //echo "<font size=6>";
      
      //echo  "<div style='overflow-x:auto; ' class='tab'> ";
       // echo  "<div class='hat'>";
      echo  "<table border=1>"."<tr>"."<th>"."Blood Group"."</th>"."<th style='text-align:center;width:120px;'>"."Required<br> Blood Component"."</th>"."<th>"."Required <br>Amount (packets)"."</th>"."<th style='text-align:center;width:120px;'>"."Expected date <br> to receive"."</th>"."<th style='text-align:center;width:120px;'>"."Reason"."</th>"."<th style='text-align:center:width:40px;'>"."Status"."</th>"."<th style='text-align:center;width:100px;'>"."Action"."</th>"."</tr>";
     echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
  while($row = $resultx->fetch_assoc())
  
  {     
    
     echo  "<tr>"."<td>".$row["blood_group"]."</td>"."<td>".$row["blood_component"]."</td>"."<td>".$row["required_amount"]."</td>"."<td>".$row["expected_date"]."</td>"."<td>".$row["reason"]."</td>"."<td>".$row["status"]."</td>";
      echo "<td>
               
               
               <form method='POST' action ='bloodrequest.php'>
               <input type=hidden name=Request_ID value=".$row["requeste_id"].">
               <button type=submit name=Accept id=btn class=s1><i class='fa-solid fa-thumbs-up'></i></button>
               </form>
               
               <form method='POST' action ='bloodrequest.php'>
               <input type=hidden   name=Request_ID value=".$row["requeste_id"]." >
               <button type=submit  name=Available  id=btn class=t1><i class='fa-regular fa-circle-check'></i></button>
               </form> 
               
               <form method='POST' action ='bloodrequest.php'>
               <input type=hidden name=Request_ID value=".$row["requeste_id"].">
               <button type=submit name=NotAvailable id=btn class=u1><i class='fa-regular fa-circle-xmark'></i></button>
               </form>  

             
               <form method='POST' action ='ViewAllInternal.php'>
               <input type=hidden name=Request_ID value=".$row["requeste_id"].">
               <button type=submit name=view id=btn class=v><i class='fa-sharp fa-solid fa-eye'></i></button>
               </form>   </td>" ;
                echo "</tr>";
    
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
     
   }
   
    echo "</font>";
    echo  "</font>";   
    echo "</table>";
   // echo "</div>";
   // echo "</div>";
   
         }
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


/*if(isset($_POST['update']))  

{	

     $status="checked";
   $did=$_POST['RequestID'];
   $sql="update blood_request set status =' $status' where requeste_id ='$did'";
   
   
   
     if ($conn->query($sql) === TRUE) 
				   {
                          
                           echo '<script type="text/javascript">';
		                  //echo 'alert("Details updated successfully");';
         
		                 // echo 'window.location.href="ViewInternalRequest.php";';
		                  echo '</script>';

                   } 
					 
					 else 
			               {  
                              echo '<script type="text/javascript">';
		                     // echo 'alert("Error in updating details.Try again!");';
                              // echo "Error in ".$query."<br>".$conn->error;
		                      echo 'window.location.href="updateAccount.php";';
		                      echo '</script>';

                            }
							
							
							
							
 
}*/





$conn->close();
?>


<!--<button type="submit" name="data" id="data" class="bx"><a href="RemoveOrUpdateBB.php"><font color="white"><font size="3">Back</font></font></a></button>-->
<script>
function myConfirm() {
  var result = confirm("Want to delete?");
  if (result==true) {
   return true;
  } else {
   return false;
  }
}

</script>




          
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
<style>

</style>