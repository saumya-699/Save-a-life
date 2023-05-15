<?php 
session_start();

?>


 <?php
   require 'conp.php';
   if(isset($_SESSION["ID"]))   {

    $m= $_SESSION["Name"];


	$query = "select * from nurse where UserName ='$m'";


   		
		$resultd = $conn->query($query);
		
		//echo "Error in ".$vql."<br>".$conn->error;
$x=null;
$hid=null;
if($resultd->num_rows>0)

{        
  
 while($row = $resultd->fetch_assoc())
 
 {
	  


   
	 $x= $row["Name_With_Initials"];
   $hid=$row["Hospital_ID"];
   
  
  

	
  }
  
	
}	






$Dql ="select Count(*) AS countD
    from donors
    where Hospital_ID =$hid";


$resultD = $conn->query($Dql);

$Donor =null;
if($resultD->num_rows>0)

{   
  $row = $resultD->fetch_assoc();
  $Donor= $row["countD"];
  
}

$currentDate = date('Y-m-d');

// Query to get the current date donations
$donationsQuery = "SELECT COUNT(*) AS countDonations FROM donation_records WHERE Hospital_ID = $hid AND Donation_date = '$currentDate'";
$resultDonations = $conn->query($donationsQuery);

$donationCount = 0;
if ($resultDonations->num_rows > 0) {
  $row = $resultDonations->fetch_assoc();
  $donationCount = $row["countDonations"];
}

?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Nurse Home</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="StyleIcons.css"> 
<link rel="stylesheet" href="lab.css"> 


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
                  <a href="declaration.php">
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
                  <a href="logout.php">
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

            <div class="info">
           <br>
            <div class="welcometext"><center>Welcome <div class="usernametext">
               <?php echo $x; ?> </center>
            </div></div>
           
            <span>
            <table class="center">
                <tr>
                    <td>
                        <p id="rcorners">
                           Donors
                            </br>
                            <span style="color:#0D5C75; font-size: 70px; font-weight: 700;">
                            <?php echo $Donor; ?>
                            </span>
                        </p>
                    </td>
                    <td>
                        <p id="rcorners">
                            Today Donations
                          </br>
                          <span style="color:#0D5C75; font-size: 70px; font-weight: 700;">
                          <?php echo $donationCount; ?>
                          </span>
                        </p>
                    </td>
                </tr>
         
            </table>
             
            

            </span>
            </div>
 

            
          
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
