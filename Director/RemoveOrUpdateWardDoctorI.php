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
 <link rel="stylesheet" href="StyleSearchNew2.css"> 
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
                          <span class="menu-title">View/Deactivte</span>
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
          
          
 
 
<select id="filterDropdown" class="select">
  <option value="All">Specialization</option>
  <option value='Anesthesiologist'>Anesthesiologist</option>
               <option value='Cardiologist'>Cardiologist</option>
               <option value='Dermatologist'>Dermatologist</option>
               <option value='Gastroenterologist'>Gastroenterologist</option>
               <option value='Hematologist'>Hematologist</option>
               <option value='Immunologist'>Immunologist</option>
               <option value='Nephrologist'>Nephrologist</option>
               <option value='Neurologist'>Neurologist </option>
               <option value='Gynecologist'>Gynecologist </option>
               <option value='Oncologist'>Oncologist </option>
               <option value='Ophthalmologist'>Ophthalmologist</option>
               <option value='Orthopedist'>Orthopedist</option>
               <option value='Pediatrician'>Pediatrician</option>
               <option value='Psychiatrist'>Psychiatrist </option>
               <option value='Radiologic-Technologist'>Radiologic Technologist </option>
               <option value='Rheumatologist'>Rheumatologist</option>
               <option value='Surgeon'>Surgeon</option>
</select>


<input type="date" id="dateInput" class="b1">
<input type="text" id="searchInput" class="box">



<?php


require 'conp.php';
    
$sql= "select * from warddoctor where Remark!='Removed'" ;
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   //echo  "<div class='tab'>";
	   echo  "<table id='dataTable' border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Doctor ID"."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."Hospital Name"."</th>"."<th>"."Specialization"."</th>"."<th>"."SLMC Number"."</th>"."<th>Appointment Date</th>"."<th>"."Action"."</th>"."</tr>";
      //echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
    $position_class = strtolower(str_replace(' ', '-', $row['Specialization']));
       
	  echo  '<tr class="' . $position_class . '">'."<td>".$row["WardDoctor_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["Specialization"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
    echo '<td>' . $row['AppointmentDate'] . '</td>'; 
    echo "<td><form method='POST' action ='showAllWardDoctorI.php'>
                <input type=hidden name=WardDoctor_ID value=".$row["WardDoctor_ID"]." >
                <button type=submit value=view name=view  id=btn class='x'><i class='fa-sharp fa-solid fa-eye'></i></button>
                </form>
			
               <form method='POST' action ='DeleteWardDoctor.php' onsubmit='return myConfirm()'>
                <button type=submit value=Delete name=delete id=btn class='y'><i class='fa-solid fa-user-xmark'></i></button>
				 <input type=hidden  name=WardDoctor_ID value=".$row["WardDoctor_ID"]." >
         <input type='hidden' name='UserName' value=".$row['UserName']." >
                </form>
                </td>";
				 echo "</tr>";
	 
	   echo "<tr>"."<td style='height:8px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
	// echo "</div>";
	
	
}	

else

{
  //echo "Error in ".$sql."<br>".$conn->error;

 echo "no results";

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

		
		
		
		
		
		
		
		  
        </main>
      
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>

</body>
</html>
<?php
	
}
 
?>