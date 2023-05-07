<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
    $date =date("Y/m/d");
	
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
 <link rel="stylesheet" href="StyleSearch.css"> 
 <link rel="stylesheet" href="StyleIcons.css"> 
 <script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>


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
          
          
		


<?php


require 'conp.php';
if(isset($_POST['BtnSubmit'])){
$report=$_POST["report"];
$HID=$_POST["hid"];
$From =$_POST["From"];
$To =$_POST["To"];

$query = "select * from Hospital where Hospital_ID ='$HID'";
    
    

$resultd = $conn->query($query);

//echo "Error in ".$vql."<br>".$conn->error;

if($resultd->num_rows>0)

{        

while($row = $resultd->fetch_assoc())

{




$HospitalName= $row["HospitalName"];





}


}


if($report =="nurse"){
 $sql= "select * from nurse where Remark!='Removed' and Hospital_ID= '$HID' and AppointmentDate between '$From' and '$To' ";
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   

     //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	  // echo  "<div class='tab'>";
    echo  "<div class='container_content' id='container_content'>";
   echo "<h2><center>Blood Bank Doctor Details Report of $HospitalName</center> </h2>" ;
   echo "<h5><center>Save a Life</center> </h5>" ;
   echo "<h5><center>printed on $date</center> </h5><br><br>" ;
	   echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Nurse ID"."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."Position"."</th>"."<th>"."SLMC number"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=4'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Nurse_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["Position"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
	 
				 echo "</tr>";
	 
	   echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=4'>"."</td>"."</tr>";
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
	 echo "</div>";
	
	
} 	

else

{
  //echo "Error in ".$sql."<br>".$conn->error;

 echo "no results";

}
}




if($report =="mlt"){
    $sql= "select * from mlt where Remark!='Removed' and Hospital_ID= '$HID'  and AppointmentDate between '$From' and '$To'";
   $result = $conn->query($sql);
   
   if($result->num_rows>0)
   
   {     
      
   
        //echo "<font color=red>";
             //echo "<font size=6>";
          
         // echo  "<div class='tab'>";
         echo  "<div class='container_content' id='container_content'>";
   echo "<h2><center>Blood Bank Doctor Details Report of $HospitalName</center> </h2>" ;
   echo "<h5><center>Save a Life</center> </h5>" ;
   echo "<h5><center>printed on $date</center> </h5><br><br>" ;
          echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."MLT ID"."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."SLMC Number"."</th>"."</tr>";
         echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=3'>"."</td>"."</tr>";
      while($row = $result->fetch_assoc())
      
      {     
        
         echo  "<tr>"."<td>".$row["MLT_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
        
                    echo "</tr>";
        
          echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=3'>"."</td>"."</tr>";
         
       }
       
        echo "</font>";
        echo  "</font>";   
        echo "</table>";
        echo "</div>";
       
       
   }	
   
   else
   
   {
     //echo "Error in ".$sql."<br>".$conn->error;
   
    echo "no results";
   
   }
   }



   
if($report =="warddoctor"){
    $sql= "select * from warddoctor where Remark!='Removed' and Hospital_ID= '$HID'  and AppointmentDate between '$From' and '$To' ";
   $result = $conn->query($sql);
   
   if($result->num_rows>0)
   
   {     
      
   
        //echo "<font color=red>";
             //echo "<font size=6>";
             echo  "<div class='container_content' id='container_content'>";
             echo "<h2><center>Donation Details Report of  $HospitalName</center> </h2>" ;
             echo "<h5><center>Save a Life</center> </h5>" ;
             echo "<h5><center>printed on $date</center> </h5><br><br>" ;
             
         // echo  "<div class='tab'>";
          echo  "<table class='container_content' id='container_content' border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."WardDoctor ID "."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."Specialization"."</th>"."<th>"."SLMC number"."</th>"."</tr>";
         echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=4'>"."</td>"."</tr>";
      while($row = $result->fetch_assoc())
      
      {     
        
         echo  "<tr>"."<td>".$row["WardDoctor_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["Specialization"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
        
                    echo "</tr>";
        
          echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=4'>"."</td>"."</tr>";
         
       }
       
        echo "</font>";
        echo  "</font>";   
        echo "</table>";
        echo "</div>";
       
       
   }	
   
   else
   
   {
     //echo "Error in ".$sql."<br>".$conn->error;
   
    echo "no results";
   
   }
   }



   if($report =="bloodbank_doctor"){
    $sql= "select * from bloodbank_doctor where Remark!='Removed' and Hospital_ID= '$HID'  and AppointmentDate between '$From' and '$To'";
   $result = $conn->query($sql);
   
   if($result->num_rows>0)
   
   {     
       
    
   echo  "<div class='container_content' id='container_content'>";
   echo "<h2><center>Blood Bank Doctor Details Report of $HospitalName</center> </h2>" ;
   echo "<h5><center>Save a Life</center> </h5>" ;
   echo "<h5><center>printed on $date</center> </h5><br><br>" ;
   
        //echo "<font color=red>";
             //echo "<font size=6>";
          
         // echo  "<div class='tab'>";
          echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."BloodBank Doctor ID"."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."SLMC number"."</th>"."</tr>";
         echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=3'>"."</td>"."</tr>";
      while($row = $result->fetch_assoc())
      
      {     
        
         echo  "<tr>"."<td>".$row["BloodBank_doctor_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
        
                    echo "</tr>";
        
          echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=3'>"."</td>"."</tr>";
         
       }
       
        echo "</font>";
        echo  "</font>";   
        echo "</table>";
        echo "</div>";
       
       
   }	
   
   else
   
   {
     //echo "Error in ".$sql."<br>".$conn->error;
   
    echo "no results";
   
   }
   }






   //all employees

   echo"<div class='container_content' id='container_content'>";
   if($report =="AE"){
    $sql= "select * from bloodbank_doctor where Remark!='Removed' and Hospital_ID= '$HID' and AppointmentDate between '$From' and '$To'";
    
   $result = $conn->query($sql);
   
   if($result->num_rows>0)
   
   {     echo "<h2> <center>Blood Bank Doctor details</center></h2>";
    echo "<br> <br>";
      
   
        //echo "<font color=red>";
             //echo "<font size=6>";
          
         // echo  "<div class='tab'>";
          echo  "<table  border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."BloodBank Doctor ID"."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."SLMC Number"."</th>"."</tr>";
         echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
      while($row = $result->fetch_assoc())
      
      {     
        
         echo  "<tr>"."<td>".$row["BloodBank_doctor_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
        
                    echo "</tr>";
        
          echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
         
       }
       
        echo "</font>";
        echo  "</font>";   
        echo "</table>";
        //echo "</div>";
       
       


   }	

   $sql= "select * from warddoctor where Remark!='Removed' and Hospital_ID= '$HID' and AppointmentDate between '$From' and '$To'";
   $result = $conn->query($sql);
  
   if($result->num_rows>0)
   
   {      echo "<h2><center> Ward Doctor details</center></h2>";
    echo "<br> <br>";
      
   
        //echo "<font color=red>";
             //echo "<font size=6>";
          
         // echo  "<div class='tab'>";
          echo  "<table  border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."WardDoctor ID "."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."Specialization"."</th>"."<th>"."SLMC number"."</th>"."</tr>";
         echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
      while($row = $result->fetch_assoc())
      
      {     
        
         echo  "<tr>"."<td>".$row["WardDoctor_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["Specialization"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
        
                    echo "</tr>";
        
          echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
         
       }
       
        echo "</font>";
        echo  "</font>";   
        echo "</table>";
        //echo "</div>";
       
       
   }	


  
   $sql= "select * from mlt where Remark!='Removed' and Hospital_ID= '$HID' and AppointmentDate between '$From' and '$To'";
   $result = $conn->query($sql);
 
   if($result->num_rows>0)
   
   {     
    echo "<h2> <center>MLT details</center></h2>";
    echo "<br> <br>";
   
        //echo "<font color=red>";
             //echo "<font size=6>";
          
         // echo  "<div class='tab'>";
          echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."MLT ID"."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."SLMC Number"."</th>"."</tr>";
         echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
      while($row = $result->fetch_assoc())
      
      {     
        
         echo  "<tr>"."<td>".$row["MLT_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
        
                    echo "</tr>";
        
          echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
         
       }
       
        echo "</font>";
        echo  "</font>";   
        echo "</table>";
        //echo "</div>";
       
       
   }	



   $sql= "select * from nurse where Remark!='Removed' and Hospital_ID= '$HID' and AppointmentDate between '$From' and '$To'";
   $result = $conn->query($sql);
  
   if($result->num_rows>0)
   
   {      echo "<h2><center> Nurse details</center></h2>";
    echo "<br><br>";
      
   
        //echo "<font color=red>";
             //echo "<font size=6>";
          
         // echo  "<div class='tab'>";
          echo  "<table  id='container_content' border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Nurse ID"."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."SLMC Number"."</th>"."</tr>";
         echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
      while($row = $result->fetch_assoc())
      
      {     
        
         echo  "<tr>"."<td>".$row["Nurse_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
        
                    echo "</tr>";
        
          echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
         
       }
       
        echo "</font>";
        echo  "</font>";   
        echo "</table>";
        //echo "</div>";
       
       
   }	







   
   
   
   }

  echo "</div>";

}
$conn->close();
?>

<button onclick="generatePDF()" class="z">Download</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
   function generatePDF() {
        const element = document.getElementById('container_content');
        var opt = {
            margin: 0,
            filename: 'Report.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'landscape'
            }
        };
        // Choose the element that our invoice is rendered in.
        html2pdf().set(opt).from(element).save();
    }
</script>




     



     
             
		
		
		
		
		
		
		
		  
        </main>
      
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>
  <style>
.z{
   font-size:20px;
   margin-top:50px;
   margin-left:840px;
   margin-right:45px;
   height:47px;					   
   border: none;
                 //background-color:#F35050;
                 //width: 100%;
background: #4082f5;
//text-transform: uppercase;
// padding: 12px;
cursor: pointer;
box-shadow: 0px 10px 40px 0px rgba(17, 97, 237, 0.4);
font-weight: 700;
font-size: 20px;	
border-radius:30px;
}
</style>
     
</body>
</html>
<?php
	
}
 
?>