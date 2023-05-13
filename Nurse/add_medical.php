<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	
    require "conp.php";
    
     			
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Side bar</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./add_medical.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</head>
<body>
<!-- partial:index.partial.html -->
<div class="layout has-sidebar fixed-sidebar fixed-header">
      <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
        <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
        <div class="image-wrapper">
          <img src="assets/images/sidebar-bg.jpg" alt="sidebar background" />
        </div>
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
                <li class="menu-header"></li>
                <li class="menu-item">
                  <a href="Home.php">
                    <span class="menu-icon">
                      <i class="ri-home-fill"></i>
                    </span>
                    <span class="menu-title">Home</span>
                    
                  </a>
                 </li>
                <li class="menu-item">
                  <a href="reg.php">
                    <span class="menu-icon">
                      <i class="ri-user-add-fill"></i>
                    </span>
                    <span class="menu-title">Register the Donors</span>
                  </a>
                  </li>
                <li class="menu-item">
                  <a href="add_medical.php">
                    <span class="menu-icon">
                      <i class="ri-heart-add-fill"></i>
                    </span>
                    <span class="menu-title">Add medical Details</span>
                  </a>
                  </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-folder-user-fill"></i>
                    </span>
                    <span class="menu-title">Donor Information</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="View_Personal.php">
                          <span class="menu-title">Personal</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="View_med.php">
                          <span class="menu-title">Medical</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-file-text-fill"></i>
                    </span>
                    <span class="menu-title">Declaration Form</span>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="start.php">
                    <span class="menu-icon">
                      <i class="ri-drop-fill"></i>
                    </span>
                    <span class="menu-title">Daily Blood Collection</span>
                  </a>
                  </li>

                <li class="menu-item">
                  <a href="donation_history.php">
                    <span class="menu-icon">
                      <i class="ri-history-line"></i>
                    </span>
                    <span class="menu-title">Donation History</span>
                  </a>
                  </li>
                

                <li class="menu-header" style="padding-top: 40px"><span>| </span></li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-user-line"></i>
                    </span>
                    <span class="menu-title">Profile</span> 
                  </a>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-notification-line"></i>
                    </span>
                    <span class="menu-title">Notifications</span>
                  </a>
                </li>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-logout-box-r-line"></i>
                    </span>
                    <span class="menu-title">Log out</span>
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


            <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a>
            <!-- add your content from here -->
           

            <div class="container-shadow">
            </div>
            <div class="container">
              <div class="wrap">
                <div class="headings">
                  <center><span><h1>Add medical details</h1></span><center>
                
                </div>
               
                    
               <form method="post" action="add_medical_backend.php">
                    
                    <label for="exampleFormControlInput1" class="form-label lbl star">NIC Number</label>
                   <input type="text" class="form-control txt-input" placeholder="NIC Number" name="nic" id="nic" pattern="[0-9]{9}[Vv0-9]{1,3}" required onchange="fillDonorInfo()">
                           
                    <label for="exampleFormControlInput1" class="form-label lbl star">Donor ID</label>
                    <input type="text" name="donorid" id="donorid" class="form-control txt-input" placeholder="Donor ID" required readonly>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Donor Name</label>
                    <input type="text" class="form-control txt-input" placeholder="Donor Name" name="dname" id="dname" required>

                   <label for="exampleFormControlInput1" class="form-label lbl star">Weight(Kg)</label>
                    <div class="input-group mb-4">
                    <input type="text" name="weight" class="datepicker_input form-control txt-input" placeholder="Weight(ex: 50.5)" pattern="^[1-9][0-9]{0,2}(\.[0-9]{1,2})?$" required>
                    </div>

                   <label for="exampleFormControlInput1" class="form-label lbl">Height(cm)</label>
                    <input type="text" class="form-control txt-input" placeholder="Height(ex: 158)" name="height" pattern="[0-9]{2,3}" required >

                    <label for="exampleFormControlInput1" class="form-label lbl star">Blood Pressure(mmHg)</label>
                    <input type="text"name="bpressure" class="form-control txt-input" placeholder="Blood Pressure(ex: 120/80)" pattern="\d{2,3}\/\d{2,3}" required>

                    <label for="exampleFormControlInput1" class="form-label lbl star">Hemoglobine Level(g/dl)</label>
                    <input type="text" class="form-control txt-input" placeholder="Hemoglobine Level(ex: 12.3)" name="hemoglobine" pattern="^\d{1,2}(\.\d{1,2})?$" required>
                                        
                                      <br><br><br><br>
                         
                            <div class='row btn-buttons'>
                                  
                                   <input type='submit' name='BtnSubmit' value='Add' class='b1'>
                                   <input type='submit' name='btnCancel' value='Cancel' class='b2'>
                              </div>
               </form>
</div>
</div>

<script>
		function fillDonorInfo() {
			// Get the NIC input value
			var nicInput = document.getElementById("nic").value;

			// Make an AJAX request to fetch donor info
			var xhr = new XMLHttpRequest();
			xhr.open("GET", "fetch_donor_info.php?nic=" + nicInput, true);
			xhr.onload = function() {
				// Parse the JSON response
				var response = JSON.parse(xhr.responseText);

				// Fill in the donor ID and name fields
				document.getElementById("donorid").value = response.donorid;
				document.getElementById("dname").value = response.dname;
			};
			xhr.send();
            return false; // prevent form submission until donor info is fetched
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