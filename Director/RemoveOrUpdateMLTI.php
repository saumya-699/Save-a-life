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
<script src="https://kit.fontawesome.com/327346c9f3.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="StyleIcons.css"> 

 <link rel="stylesheet" href="StyleSearch.css"> 


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
    
$sql= "select * from MLT where Remark!='Removed'";
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   
  echo "<div>";
  echo "<label for='filterDropdown'>Filter:</label>";
  echo "<select id='filterDropdown'>";
  echo "<option value='All'>All</option>";
  echo "<option value='Head nurse'>Head</option>";
  echo "<option value='nurse'>Nurse</option>";
  echo "</select>";
  echo "<label for='searchInput'>Search:</label>";
  echo "<input type='text' id='searchInput'>";
  echo "</div>";
          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   //echo  "<div class='tab'>";
	   echo  "<table id='dataTable' border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."MLT ID"."</th>"."<th style='text-align:center;width:120px;'>"."Name With Initials"."</th>"."<th>"."Hospital name"."</th>"."<th>"."SLMC number"."</th>"."<th style='width:120px;'>"."Action"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["MLT_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["SLMC_Number"]."</td>";
	   echo "<td><form method='POST' action ='showAllMLTI.php'>
                <input type=hidden name='MLT_ID' value=".$row["MLT_ID"]." >
                <button type=submit value=view name=view  id=btn class='x'><i class='fa-sharp fa-solid fa-eye'></i></button>
                </form>
				
                <form method='POST' action ='DeleteMLT.php' onsubmit='return myConfirm()'>
                <button type=submit value=Delete name=delete id=btn class='y'><i class='fa-solid fa-user-xmark'></i></button>
                <input type=hidden  name=MLT_ID  value=".$row['MLT_ID']." >

              
                </form>
                </td>";
				 echo "</tr>";
	 
	   echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
	 echo "</div>";
	
	
}	

else

{
  echo "Error in ".$sql."<br>".$conn->error;

 echo "no results";

}
//echo "Error in ".$sql."<br>".$conn->error;
$conn->close();
?>







<script>
  // Filter the table based on the selected color and search query
  function filterTable() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toUpperCase();
    const select = document.getElementById('filterDropdown');
    const filterValue = select.options[select.selectedIndex].value;

    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tr');

    // Filter the table rows
    for (let i = 1; i < rows.length; i++) {
      const row = rows[i];
      const cells = row.getElementsByTagName('td');
      const color = cells[3].textContent.toUpperCase();
      const values = Array.from(cells).map(cell => cell.textContent.toUpperCase());

      if ((filterValue === 'All' || color === filterValue.toUpperCase())
        && values.some(value => value.includes(filter))) {
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
</script>
		
		
		
		
		
		
		
		  
        </main>
      
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>

</body>
</html>
<?php
	
}
 
?>