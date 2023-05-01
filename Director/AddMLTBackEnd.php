
<?php 
session_start();

?>

<?php

require 'conp.php';            //make connection here
if(isset($_POST['BtnSubmit']))
{
  //here getting result from the post array after submitting the form.
    $Name=$_POST["Name"];
    $HName=$_POST["hospital"];
	$SLMC=$_POST["SLMC"];
	$Email=$_POST["Email"];
	$contactNumber=$_POST["contactNumber"];
	$Uname=$_POST["Uname"];
	$password=$_POST["password"];
	$m= $_SESSION["Name"];
  $DOA=$_POST["DOA"];


	$query = "select * from director where UserName ='$m'";


   		
		$resultd = $conn->query($query);
		
		//echo "Error in ".$vql."<br>".$conn->error;

if($resultd->num_rows>0)

{        
  
 while($row = $resultd->fetch_assoc())
 
 {
	  


   
	 $x= $row["Director_ID"];
   
  
  

	
  }
  
	
}	


     			
		$vql="select *from hospital where HospitalName='$HName'";	
		
		$result = $conn->query($vql);
		
		  //echo "Error in ".$vql."<br>".$conn->error;

if($result->num_rows>0)

{        
    
   while($row = $result->fetch_assoc())
   
   {
	    


	 
       $y= $row["Hospital_ID"];
	 
	
	

	  
	}
	
      
}	

$Type=2;
//insert the user into the database.
$jql="insert into system_users(User_ID,UserName,Password,Type)VALUES('','$Uname','$password',2)";


if($conn->query($jql))
{
 
	echo '<script type="text/javascript">';
	//echo 'alert("user successfully");';
	
	// echo 'window.location.href="AddMLTI.php";';
	echo '</script>';

 
 
 
}
else
{
	
	  
	echo '<script type="text/javascript">';
	  echo "Error in ".$jql."<br>".$conn->error;
   
	echo 'alert("Error in entering try again!");';

	echo '</script>';
	 

	
}

    $sql="insert into MLT(MLT_ID,Name_With_Initials,Hospital_ID,HospitalName,SLMC_Number,Email,ContactNumber,UserName,Password,AppointmentDate,RetiringDate,Remark,Director_ID)VALUES(' ','$Name','$y','$HName','$SLMC','$Email','$contactNumber','$Uname','$password','$DOA','','Added','$x')";
    if($conn->query($sql))
     {
      
	     echo '<script type="text/javascript">';
		// echo 'alert("Added successfully");';
         
	      //echo 'window.location.href="AddMLTI.php";';
		 echo '</script>';

	?>  
	



<html lang="en" >
<head>
<title>side bar- blood bank doctor</title>
    <title>side bar- blood bank doctor</title>
 <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./styleM.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./styleEmail.css">
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
              <h5>Save a Life</h5>
            </div>
          </div>
          <div class="sidebar-content">
            <nav class="menu open-current-submenu">
              <ul>
                <li class="menu-header"></li>
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
       <span><h1>Email</h1></span>
      
      </div>
		
		<style>
textarea {
  width: 100%;
 
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 12px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}	
		</style>
		     
<?php
//Srequire 'conp.php';
$date =date("Y/m/d");
echo "

    
     <form method='post' action='indexs.php' id='FormName'>
        
                            ";
						   
                              
                              
                             

?>
	

	
	
	
    
    


          
  <?php                  
          
          echo "      <label for='exampleFormControlInput1' class='form-label lbl star'>Email</label>
		  <input type='text'  name='email' value='$Email'> 
		  <label for='exampleFormControlInput1' class='form-label lbl star'>Subject</label>
                      <input type='text'  name='subject' value='Regarding Appoinment'> 
					  

                     <label for='exampleFormControlInput1' class='form-label lbl star'>Message</label>
                             <textarea rows = '10' cols = '60' name='message'>
            Hello $Name   We are pleased to inform that you have been appointed to the system and your user name is $Uname and your password is $password.Please change the user name and password once you get the e mail 

                          
         </textarea> 
                          
                    <br><br><br>    
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
     else
	 {
		 
		   
		 echo '<script type="text/javascript">';
		   echo "Error in ".$sql."<br>".$conn->error;
		
		 echo 'alert("Error in entering try again!");';
     
		 echo '</script>';
		  
 
		 
	 }
	 
 
 //  echo "Error in ".$sql."<br>".$conn->error;
 
 
	
}
 
$conn->close();

?>

