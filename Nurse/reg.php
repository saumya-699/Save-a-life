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
  <title>Registration Form</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./AddHosStyle.css">


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
                  <a href="profile.php">
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
                  <center><span><h1>Registration Form</h1></span><center>
                
                </div>
                <?php
                function generate_pw(){
                  $pw=null;
                  //set random length for password
                  $password_length=rand(8,16);
                  $pw='';

                  for($i =0; $i< $password_length;$i++);
                  $pw .= chr(rand(32, 126));
                  return $pw;
                }

                $pss = generate_pw();
                ?>
                                
               <form method="post" action="reg_backend.php">
                  
                           
              <label for="exampleFormControlInput1" class="form-label lbl star"> Prefix </label>
                <select name="prefix" class="form-control txt-input" required>
                           <option selected disabled value="">None</option>
                           <option value="Mr">Mr</option>
                           <option value="Ms">Ms</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Other">Other</option>
                                        </select>
                        
                           <label for="exampleFormControlInput1" class="form-label lbl star">Full Name</label>
                           <input type="text" name="fullname" class="form-control txt-input" placeholder="Type your Full Name" pattern="[A-Za-z\s]+" required>
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">Name with Initials</label>
                            <input type="text" class="form-control txt-input" placeholder="Type your Name with Initials" name="Initials" pattern="[A-Z](\.{1-200})+\s[A-Z][a-zA-Z]+" required>
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">NIC No</label>
                            <input type="text" class="form-control txt-input" placeholder="Type NIC Number" name="NIC" pattern="[0-9]{9}[Vv0-9]{1,3}" required>
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">Date Of Birth Day</label>
                            <div class="input-group mb-4">
                            <input type="date" name="DOB" class="datepicker_input form-control txt-input" placeholder="" max="<?php echo date('Y-m-d', strtotime('-18 years')); ?>" required>
                            </div>
                    
                            <label for="exampleFormControlInput1" class="form-label lbl">Email Address</label>
                            <input type="email" class="form-control txt-input" placeholder="Type your Email Address" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"onchange='myFunction()' required >
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">Gender</label>
                            <select name="gender" id="" class="form-control txt-input" required>Gender
                            <option selected disabled value="">None</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">Address</label>
                            <input type="text"  class="form-control txt-input" placeholder="Type your Address" name="address" required>
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">Province</label>
                            <select name="province" id="" class="form-control txt-input" required>Province
                            <option value="Not Provided"> None</option>
                            <option value="Northern"> Northern</option>
                            <option value="North Western"> North Western</option>
                            <option value="North Central"> North Central</option>
                            <option value="Western"> Western </option>
                            <option value="Central"> Central</option>
                            <option value="Sabaragamuwa"> Sabaragamuwa </option>
                            <option value="Eastern"> Eastern</option>
                            <option value="Uva"> Uva </option>
                            <option value="Southern"> Southern </option>
                            </select>
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">Postal Code</label>
                            <input type="text" class="form-control txt-input" placeholder="Type the Postal Code of your Area" name="postal" pattern="[0-9]{6}" required>
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">Telephone Number (Mobile)</label>
                            <input type="tel" class="form-control txt-input" placeholder="eg:0777123456" name="mobile" pattern="[0-9]{10}" required>
                    
                            <label for="exampleFormControlInput1" class="form-label lbl">Telephone Number (Land) (If having)</label>
                            <input type="tel" class="form-control txt-input" placeholder="eg:0112345678 " name="land" pattern="[0-9]{10}">
                    
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">User Name</label>
                            <input type="text" class="form-control txt-input" placeholder="Type a User Name" name="username" id="username" required>
                    
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star"> Password</label>
                            <input type='hidden'  name='subject' value=''>
                            <input type="password" class="form-control txt-input" placeholder="Enter a password" name="password" value='$pass' required>
                                    
                    
                            <label for="exampleFormControlInput1" class="form-label lbl star">Confirm Password</label>
                            <input type="password" class="form-control txt-input" placeholder="Re-enter the password" name="confirm_password" value='$pass' required>
                                        
                            <br><br><br><br>
                         
                            <div class='row btn-buttons'>
                                  
                                   <input type='submit' name='BtnSubmit' value='Add' class='b1'>
                                   <input type='submit' name='btnCancel' value='Cancel' class='b2'>
                              </div>							  
          
               
                    </div>
              
          
             
            </div>
           
              </div>
                </form> 

                <script>
function myFunction() {
  var email = document.getElementById("email").value;
  document.getElementById("username").value = email;
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
