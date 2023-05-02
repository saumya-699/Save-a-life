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
              <h5>Save a Life</h5>
            </div>
          </div>
          <div class="sidebar-content">
            <nav class="menu open-current-submenu">
              <ul>
                <li class="menu-header"></li>
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
                      <i class="ri-user-add-fill"></i>
                    </span>
                    <span class="menu-title">Employee</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                       <li class="menu-item sub-menu">
                        <a href="#">
                          <span class="menu-title">Blood Bank Doctor</span>
                        </a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item">
                              <a href="Add_bbI.php">
                                <span class="menu-title">Add</span>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="RemoveOrUpdateBBI.php">
                                <span class="menu-title">Remove/Update</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#">
                          <span class="menu-title">MLT</span>
                        </a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item">
                              <a href="AddMLTI.php">
                                <span class="menu-title">Add</span>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="RemoveOrUpdateMLTI.php">
                                <span class="menu-title">Remove/Update</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#">
                          <span class="menu-title">Ward Doctor</span>
                        </a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item">
                              <a href="AddWardDoctorI.php">
                                <span class="menu-title">Add</span>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="RemoveOrUpdateWardDoctorI.php">
                                <span class="menu-title">Remove/Update</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#">
                          <span class="menu-title">Nurse</span>
                        </a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item">
                              <a href="AddNurseI.php">
                                <span class="menu-title">Add</span>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="RemoveOrUpdateNurseI.php">
                                <span class="menu-title">Remove/Update</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-hospital-fill"></i>
                    </span>
                    <span class="menu-title">Hospital</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="AddHospitalI.php">
                          <span class="menu-title">Add</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="DeactivateOrUpdateHospitalI.php">
                          <span class="menu-title">Update/Deactivte</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="DeactivationInfoI.php">
                          <span class="menu-title">Deactivation Info</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="ViewDonorsDI.php">
                    <span class="menu-icon">
                      <i class="ri-user-heart-fill"></i>
                    </span>
                    <span class="menu-title">Donors</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ReportDI.php">
                    <span class="menu-icon">
                      <i class="ri-file-chart-line"></i>
                    </span>
                    <span class="menu-title">Reports</span>
                  </a>
                 </li>
                
                <li class="menu-header" style="padding-top: 40px"><span> </span></li>
                <li class="menu-item">
                  <a href="profileDI.php">
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
        <center><span><h1>Add Nurse</h1></span><center>
      
      </div>
     
             <?php

       
function generate_pw() {
  $pw=null;
  // Set random length for password
  $password_length = rand(8, 16);
  $pw = '';

  for($i = 0; $i < $password_length; $i++) {
    $pw .= chr(rand(32, 126));
  }
  return $pw;
}


$hel = generate_pw();
?>
		<?php
require 'conp.php';
$date =date("Y/m/d");
echo "



  
       
    
     <form method='post' action='addNurseBackEnd.php' id='FormName'>
                          
						   
						 
						   
                              
                              
                           <label for='exampleFormControlInput1' class='form-label lbl star'>Name with Initials</label>
                           <input type='text' placeholder='Enter the name' name='Name' id='name' class='form-control txt-input' pattern ='^[a-zA-Z\.]{2,}$' required>"
							 
							 ;
							

?>
	
<?php
	

						  $sql= 'select *from hospital' ;
                           $result = $conn->query($sql);

      if($result->num_rows>0)

   {     
   

          	      echo "<label class='form-label lbl star'>Hospital name</label>";
				  
	     echo 
		   "<select name='hospital' class='form-control txt-input' required>
		     <option value='Not Provided'> None</option>";
                      
	  
	 
      while($row=$result->fetch_assoc())
   
   {     
     
	      echo 
		   
         " <option value='$row[HospitalName]'>$row[HospitalName]</option>";
	   
	  
	}
   }                      
      echo "</select>";                      
	
	?>
	
	
	<?php
	
             
	        echo   "<label for='exampleFormControlInput1'>Position</label>
                         <select id='position' name='position'  class='x' required>
						   <option value=Not Provided' class='items'> None</option>
                         <option value='Head nurse' class='items'> Head&nbsp;nurse
						 </option>
                         <option value='Nurse' class='items'> Nurse</option>
                        
                        
                         </select>
                          
                             
                           
                              
                        
                              <label for='exampleFormControlInput1' class='form-label lbl star'>DOB</label>
                             
							   <div class='input-group mb-4'>
                        <i class='fas fa-calendar-alt input-group-text'></i>

                        <input type='date' name='DOB' id='DOB' class='datepicker_input form-control txt-input' placeholder='Select Date' required>
                    </div>

        
        
                              <label for='exampleFormControlInput1' class='form-label lbl star'>SLMC Number</label>
                             <input type='text' placeholder='Enter the SLMC number' name='SLMC' id='slmc' class='form-control txt-input'   required pattern='SLMC[0-9]{3}'>
                             
					
                           <label for='exampleFormControlInput1' class='form-label lbl star'>Email</label>
                             <input type='email' placeholder='Enter the Email' name='Email' class='form-control txt-input' id='Email' onchange='myFunction()' required title='Please enter a valid email address in the format of example@domain.com'>
        
                             
                           <label for='exampleFormControlInput1' class='form-label lbl star'>Contact Number</label>
                            <input type='tel' placeholder='Enter the contact number' name='contactNumber'  class='form-control txt-input'  id='contact' pattern='[0-9]{10}' required>
							
							 <label for='exampleFormControlInput1' class='form-label lbl star'>Date of Appoinment</label>
                             <input type='date'  name='DOA' id='DOA' class='form-control txt-input' value='$date'>
				
							 <label for='exampleFormControlInput1' class='form-label lbl star'>User Name</label>
                             <input type='text' name='Uname' id='Uname' class='form-control txt-input' required>
                           
						   
						   <script type='text/javascript'>
                      
					 function myFunction(){
                     var x = document.forms['FormName']['Email'].value;
                     
                    
					 document.getElementById('Uname').value = x;  
                     }
                      </script>
                               
                      <label for='exampleFormControlInput1' class='form-label lbl star'>Password</label>
                      <input type='password'  name='password'  class='form-control txt-input'  value='$hel'  required>
                   <br><br><br><br>
                   <input type='hidden'  name='subject' value='Regarding Appoinment'>
                   <input type='password'  name='password'  class='form-control txt-input'  value='$hel'  required>
                  <div class='row btn-buttons'>
                        
                        <div class='col btn-but'> <input type='submit' name='BtnSubmit' value='Add' class='b1'></div>
                    <div class='col btn-but'> <button name='btnCancel' value='Cancel' class='b2' onclick='back()'>Cancel </button></div>
                    </div>
					
					</form>";

?>


		
		
		
		
	<script>
function back(){
	 
	 
	 
	 
	 
	    
	 
	 window.location.href="Home.php";
	 
 }
		
	</script>		
		
		
		
		
		
		
		
		  
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