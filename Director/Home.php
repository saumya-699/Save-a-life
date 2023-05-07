<?php 
session_start();

?>


 <?php
   require 'conp.php';
   if(isset($_SESSION["ID"]))   {

    $m= $_SESSION["Name"];


	$query = "select * from director where UserName ='$m'";


   		
		$resultd = $conn->query($query);
		
		//echo "Error in ".$vql."<br>".$conn->error;
$x = null;
if($resultd->num_rows>0)

{        
  
 while($row = $resultd->fetch_assoc())
 
 {
	  


   
	 $x= $row["Name_With_Initials"];
   
  
  

	
  }
 
	
}	



    $tql ="select Count(*) AS count
    from MLT
    where Remark!= 'Removed'";


$result = $conn->query($tql);

	
//$sql= "select * from stock where Hospital_ID='$ty' and No_of_packs <= 2";
//$result = $conn->query($sql);

if($result->num_rows>0)

{   
  $row = $result->fetch_assoc();
  $MLT= $row["count"];
  
}



$nql ="select Count(*) AS countn
    from Nurse
    where Remark != 'Removed'";


$resultn = $conn->query($nql);

	
//$sql= "select * from stock where Hospital_ID='$ty' and No_of_packs <= 2";
//$result = $conn->query($sql);

if($resultn->num_rows>0)

{   
  $row = $resultn->fetch_assoc();
  $Nurse= $row["countn"];
  
}
    

$wql ="select Count(*) AS countw
    from warddoctor
    where Remark != 'Removed'";


$resultw = $conn->query($wql);

	
//$sql= "select * from stock where Hospital_ID='$ty' and No_of_packs <= 2";
//$result = $conn->query($sql);

if($resultw->num_rows>0)

{   
  $row = $resultw->fetch_assoc();
  $Ward= $row["countw"];
  
}









$bql ="select Count(*) AS countb
    from bloodbank_doctor
    where Remark != 'Removed'";


$resultb = $conn->query($bql);

	
//$sql= "select * from stock where Hospital_ID='$ty' and No_of_packs <= 2";
//$result = $conn->query($sql);

if($resultb->num_rows>0)

{   
  $row = $resultb->fetch_assoc();
  $blood= $row["countb"];
  
}




$dql ="select Count(*) AS countd
    from bloodbank_doctor
    where Remark != 'Removed'";


$resultd = $conn->query($dql);

	
//$sql= "select * from stock where Hospital_ID='$ty' and No_of_packs <= 2";
//$result = $conn->query($sql);

if($resultd->num_rows>0)

{   
  $row = $resultd->fetch_assoc();
  $blood= $row["countd"];
  
}




$hql ="select Count(*) AS counth
    from hospital
    where Remark != 'Non-functioning'";


$resulth = $conn->query($hql);

	
//$sql= "select * from stock where Hospital_ID='$ty' and No_of_packs <= 2";
//$result = $conn->query($sql);

if($resulth->num_rows>0)

{   
  $row = $resulth->fetch_assoc();
  $Hospital= $row["counth"];
  
}




$Dql ="select Count(*) AS countD
    from donors
    where Remark != 'Remove'";


$resultD = $conn->query($Dql);

	
//$sql= "select * from stock where Hospital_ID='$ty' and No_of_packs <= 2";
//$result = $conn->query($sql);

if($resultD->num_rows>0)

{   
  $row = $resultD->fetch_assoc();
  $Donor= $row["countD"];
  
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

<script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="StyleIcons.css"> 


 
   
   


 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <link rel="stylesheet" href="lab.css"> 


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
          
    
		
		
          <div class="main_content"> 
            <div class="info">
         
            <div class="welcometext"><center>Welcome <div class="usernametext">
               <?php echo $x; ?> </center>
            </div></div>
            <br> 
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
                            Hospitals
                            </br>
                            <span style="color:#0D5C75; font-size: 70px; font-weight: 700;">
                            <?php echo $Hospital; ?>
                            </span>
                        </p>
                    </td>
                </tr>
         
            </table>
             
            <table class="center">
                <tr>
                    <td>
                        <p id="rcorners">
                            Blood Bank Doctor
                            </br>
                            <span style="color:#0D5C75; font-size: 70px; font-weight: 700;">
                            <?php echo $blood; ?>
                            </span>
                        </p>
                    </td>
                    <td>
                        <p id="rcorners">
                           MLT
                            </br>
                            <span style="color:#0D5C75; font-size: 70px; font-weight: 700;">
                            <?php echo $MLT; ?>
                            </span>
                        </p>
                    </td>
                </tr>
         
            </table>

            <table class="center">
                <tr>
                    <td>
                        <p id="rcorners">
                            Ward Doctor
                            </br>
                            <span style="color:#0D5C75; font-size: 70px; font-weight: 700;">
                            <?php echo $Ward; ?>
                            </span>
                        </p>
                    </td>
                    <td>
                        <p id="rcorners">
                           Nurse
                            </br>
                            <span style="color:#0D5C75; font-size: 70px; font-weight: 700;">
                            <?php echo $Nurse; ?>
                            </span>
                        </p>
                    </td>
                </tr>
         
            </table>
            </span>
            </div>
        </div>
 
       
		
		
		
		  
        </main>
      
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>

</body>
</html>
<?php
	
}
 
?>