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
    
    
    
    
    $x= $row["BloodBank_doctor_ID"];
    
    
    
    
    
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
             <!--add your content from here-->
          
             <div>


<select id="filterDropdown" class="select">
  <option value="All">Status</option>
  <option value="pending">Pending</option>
  <option value="processing">Processing</option>
  <option value="Available">Available</option>
  <option value="Not-Available">Not Available</option>
</select>


<input type="date" id="dateInput" class="b1">
<input type="text" id="searchInput" class="box">




</div>
<?php


require 'conp.php';

		$vql="select * from bloodbank_doctor where BloodBank_doctor_ID='$x'";	
		
		$resultr = $conn->query($vql);
		 
		//  echo "Error in ".$vql."<br>".$conn->error;

if($resultr->num_rows>0)

{        
    
   while($rowx = $resultr->fetch_assoc())
   
   {
	    


	   
       $y= $rowx["HospitalName"];

	

	  
	}
	
      
	
  


$sql= "select * from sent_request where Requested_hospital_name ='$y' ORDER BY status DESC" ;
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	  // echo  "<div style='overflow-x:auto;' class='tab'>";
    
	   echo  "<table id='dataTable' border=1>"."<tr>"."<th>"."Request ID"."</th>"."<th style='text-align:center;width:100px;'>"."Requesting <br>Hospital Name"."</th>"."<th>"."Requeired <br> Blood Group"."</th>"."<th style='width:120px;'>"."Requeired <br>Blood Component"."</th>"."<th>"."Requeired <br> No of Packs"."</th>"."<th style='width:200px;'>"."Date"."</th>"."<th>"."Status"."</th>"."<th style='width:100px;'>"."Action"."</th>"."</tr>";
      //echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
    $position_class = strtolower(str_replace(' ', '-', $row['status']));
       
    echo '<tr class="' . $position_class . '">';
	  echo  "<td>".$row["Request_ID"]."</td>"."<td>".$row["Requesting_hospital_name"]."</td>"."<td>".$row["Requeired_blood_group"]."</td>"."<td>".$row["Requeired_blood_component"]."</td>"."<td>".$row["Requeired_no_of_packs"]."</td>"."<td>".$row["Date"]."</td>"."<td>".$row["status"]."</td>";
	   echo "<td><form method='POST' action ='checkExternalRequestI.php'>
                <input type=hidden name=Request_ID value=".$row["Request_ID"]." >
                <button type=submit name=Accept id=btn class=s><i class='fa-solid fa-thumbs-up'></i></button>
                </form>
				<form method='POST' action ='checkExternalRequestI.php'>
                <input type=hidden   name=Request_ID value=".$row["Request_ID"]." >
                <button type=submit  name=Available id=btn class=t><i class='fa-regular fa-circle-check'></i></button>
                </form> 
				
				<form method='POST' action ='checkExternalRequestI.php'>
                <input type=hidden name=Request_ID value=".$row["Request_ID"].">
                <button type=submit name=NotAvailable  id=btn class=u><i class='fa-regular fa-circle-xmark'></i></button>
                </form> 
                </td>";
				 echo "</tr>";
	 
	   echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
	// echo "</div>";
	
	
}	


else

{
  //echo "Error in ".$sql."<br>".$conn->error;

 echo "no requests";

}
}






if(isset($_POST['Accept']))  

{	

     $status="Processing";
   $did=$_POST['Request_ID'];
   $sql="update sent_request set status ='$status' where Request_ID='$did'";
   
   
   
     if ($conn->query($sql) === TRUE) 
				   {
                          
                           echo '<script type="text/javascript">';
		                  //echo 'alert("Details updated successfully");';
         
		                     echo 'window.location.href="checkExternalRequestI.php";';
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




if(isset($_POST['Available']))  

{	

     $status="Available";
   $did=$_POST['Request_ID'];
   $sql="update sent_request set status ='$status' where Request_ID='$did'";
   
   
   
     if ($conn->query($sql) === TRUE) 
				   {
                          
                           echo '<script type="text/javascript">';
		                  //echo 'alert("Details updated successfully");';
         
		              echo 'window.location.href="checkExternalRequestI.php";';
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



if(isset($_POST['NotAvailable']))  

{	

     $status="Not Available";
   $did=$_POST['Request_ID'];
   $sql="update sent_request set status ='$status' where Request_ID='$did'";
   
   
   
     if ($conn->query($sql) === TRUE) 
				   {
                          
                           echo '<script type="text/javascript">';
		                  //echo 'alert("Details updated successfully");';
         
		                 echo 'window.location.href="checkExternalRequestI.php";';
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
$conn->close();




?>
<script>
function filterTable() {
  const input = document.getElementById('searchInput');
  const filter = input.value.toUpperCase();
  const select = document.getElementById('filterDropdown');
  const filterValue = select.options[select.selectedIndex].value;
  const dateInput = document.getElementById('dateInput').value;

  const table = document.getElementById('dataTable');
  const rows = table.getElementsByTagName('tr');

  for (let i = 1; i < rows.length; i++) {
      const row = rows[i];
      // Skip the extra row added for styling
      if (row.cells.length === 1) {
          continue;
      }
      const cells = row.getElementsByTagName('td');
      const positionClass = row.className;
      const appointmentDate = cells[5].textContent;

      if ((filterValue === 'All' || positionClass === filterValue.toLowerCase())
          && Array.from(cells).some(cell => cell.textContent.toUpperCase().includes(filter))
          && (dateInput === '' || appointmentDate === dateInput)) {
          row.style.display = '';
      } else {
          row.style.display = 'none';
      }
  }
}


// Attach filterTable function to events (e.g. button click, input change)
const searchInput = document.getElementById('searchInput');
searchInput.addEventListener('input', filterTable);

const filterDropdown = document.getElementById('filterDropdown');
filterDropdown.addEventListener('change', filterTable);

const dateInput = document.getElementById('dateInput');
dateInput.addEventListener('input', filterTable);
</script>


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