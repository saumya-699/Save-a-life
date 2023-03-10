 <?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	 $x= $_SESSION["ID"];
	
?>

<?php



require 'conp.php';
$vql ="select * from bloodbank_doctor where BloodBank_doctor_ID ='$x'";
$resultx = $conn->query($vql);

 while($row = $resultx->fetch_assoc())
   
   {     
     
	  $tz=$row["HospitalName"];
    $nm = $row["Name_With_Initials"];
	 
	  
	  
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
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./sendStyle.css">


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
            <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>
          
          </div>
          
          
		  
		  
		  
		  
		   <div class="container-shadow">
  </div>
  <div class="container">
    <div class="wrap">
     
   <div class="headings">
        <center><span><h1>External request for <br>components</h1></span><center>
      
      </div>
		
		
		     
<?php
require 'conp.php';
$date =date("Y/m/d");
echo "

    
     <form method='post' action='sendRequestbackEnd.php' id='FormName'>
        
                            ";
						   
                              
                              
                             

?>
	

	
	
	<?php
	
            
	        echo    "<label for='exampleFormControlInput1' class='form-label lbl star'> Requesting hospital name </label>
          <input type='text'  name='H1Name' id='DOA' class='form-control txt-input' value='$tz'>";
?>
    
    
    <?php
	

  $sql= 'select *from hospital' ;
               $result = $conn->query($sql);

if($result->num_rows>0)

{     


      echo "<label for='exampleFormControlInput1' class='form-label lbl star'> Requested hospital name </label>";

echo 
"<select name='H2Name' class='form-control txt-input' required>";


while($row=$result->fetch_assoc())

{     

echo 

" <option value='$row[HospitalName]'>$row[HospitalName]</option>";


}
}                      
echo "</select>";                      

?>


          
  <?php      
          echo "
    
        
                            <label for='exampleFormControlInput1' class='form-label lbl star'>Reuesting blood bank doctor name</label>
                            <input type='text' name='RBDN' id='slmc' class='form-control txt-input' value='$nm' required> 
                           
                             <label for='exampleFormControlInput1' class='form-label lbl star'> Required blood component</label>	 
	                         <select id='component' name='RBC'  class='form-control txt-input' required>
                            <option value='None'>None</option>							 
                             <option value='Red Blood Cells'>Red Blood Cells</option>    
                             <option value='White Blood Cells'>White Blood Cells</option>
                             <option value='Plasma'>Plasma</option>
                            </select>
                          
                             
							 
							 <label for='exampleFormControlInput1' class='form-label lbl star'> Required blood group</label>	 
	                         <select id='position' name='RBG'  class='form-control txt-input' required>
                              <option value='None'>None</option>
							 <option value='A+'>A+</option>
                             <option value='A-'>A-</option>
                             <option value='B+'>B+</option>
                             <option value='B-'>B-</option>
                             <option value='O+'>O+</option>
                             <option value='O-'>O-</option>
                             <option value='AB+'>AB+</option>
                             <option value='AB-'>AB-</option>
                            </select>
						
							 
							 <label for='exampleFormControlInput1' class='form-label lbl star'> Required no of packs</label>	 
	                         <select id='position' name='RBP'  class='form-control txt-input' required>
                             <option value='None'>None</option>
							<option value='1'>1</option>
                             <option value='2'>2</option>
                             <option value='3'>3</option>
                             <option value='4'>4</option>
                            </select>
							              
							 <label for='exampleFormControlInput1' class='form-label lbl star'> Date</label>	 
                             <input type='text'  name='Date' id='DOA' class='form-control txt-input' value='$date'>
						<br><br><br><br>
                        
                        <div class='col btn-but'> <input type='submit' name='BtnSubmit' value='Send' class='b1'></div>
                        <div class='col btn-but'> <input type='submit' name='btnCancel' value='Cancel' class='b2'></div>
                   
					
  </form> 
  ";


?>

		                                                                    
		
		
		
		
		
		
		
		  
        </main>
      </div>
    </div>
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>

</body>
</html>
<?php
	
}
 
?>