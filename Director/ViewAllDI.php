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
                                <span class="menu-title">View/Remove</span>
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
                                <span class="menu-title">View/Remove</span>
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
                                <span class="menu-title">View/Remove</span>
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
                                <span class="menu-title">View/Remove</span>
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
        <center><span><h1>Donor</h1></span><center>
      
      </div>
  <?php


require 'conp.php';
if(isset($_POST['view']))  {

  $did=$_POST['Donor_Id'];
  $query="select * from donors where Donor_Id='$did'";
  $result= $conn->query($query);
  
  
 if($result->num_rows>0)

 {     
  

      
   while($row = $result->fetch_assoc())
  
  {     
    
   //echo  "<tr>"."<td>".$row["Donor_Id"]."</td>"."<td>".$row["Prefix"].".".$row["Full_Name"]."</td>"."<td>".$row["Initials"]."</td>"."<td>".$row["NIC_Number"]."</td>"."<td>".$row["DOB"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["province"]."</td>"."<td>".$row["postal"]."</td>"."<td>".$row["Gender"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["mobile_number"]."<br/>".$row["land_number"]."</td>";
 
    
echo "

                              <label for='exampleFormControlInput1' class='form-label lbl star'>Donor Id</label> 
                              <input type='text' value=".$row["Donor_Id"]." name='id'  class='form-control txt-input' readonly>
                     
                              <label for='exampleFormControlInput1' class='form-label lbl star'>Name with Initials</label> 
                              <input type='text' value=".$row["Initials"]." name='Name' id='name' class='form-control txt-input' readonly>
                       
                              
                            
                             <label for='exampleFormControlInput1' class='form-label lbl star'>NIC Number</label>
                              <input type='text' value=".$row["NIC_Number"]." name='NIC' id='slmc' class='form-control txt-input'readonly>

                              <label for='exampleFormControlInput1' class='form-label lbl star'>DOB</label>
                              <input type='text' value=".$row["DOB"]." name='NIC' id='slmc' class='form-control txt-input' redonly>
         
                               
                              <label for='exampleFormControlInput1' class='form-label lbl star'>Address</label>
                              <input type='text' value=".$row["Address"]." name='Address' class='form-control txt-input'  readonly>

                              <label for='exampleFormControlInput1' class='form-label lbl star'>Province</label>
                              <input type='text' value=".$row["province"]." name='Address' class='form-control txt-input'  readonly >

                              <label for='exampleFormControlInput1' class='form-label lbl star'>Postal</label>
                              <input type='text' value=".$row["postal"]." name='Address' class='form-control txt-input' readonly >

                              <label for='exampleFormControlInput1' class='form-label lbl star'>Gender </label>
                              <select name= 'Gender' class='form-control txt-input' readonly>
                             
                              <option value=" . $row["Gender"] . " selected> " . $row["Gender"] . " </option>
 
                              </select> 

                              <label for='exampleFormControlInput1' class='form-label lbl star'>E-mail</label>
                              <input type='text' value=".$row["Email"]." name='Address' class='form-control txt-input' readonly >

                              <label for='exampleFormControlInput1' class='form-label lbl star'>Mobile Number</label>
                              <input type='text' value=".$row["mobile_number"]." name='Address' class='form-control txt-input' readonly >
         
 
                              <label for='exampleFormControlInput1' class='form-label lbl star'>Land Number</label>
                             <input type='text' value=".$row["land_number"]." name='contactNumber'  class='form-control txt-input' readonly >
             
                  
 
                             <div class='row btn-buttons'>
                         
                             
                             <div class='col btn-but'> <input type='submit' name='btnCancel' value='Cancel' class='b2' onclick='history.back()'></div>
                            </div>
                            
     </form> 
  ";
 
    
    
      
 }
 
 
 
 
}	

else

{
 echo "Error in ".$query."<br>".$conn->error;

echo "no results";

}

   }
$conn->close();
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
