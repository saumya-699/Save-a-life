<?php 
session_start();
?>

<?php
if(isset($_SESSION["ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM warddoctor WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if($result1->num_rows > 0) {        
    while($row = $result1->fetch_assoc()) {
      $x = $row["WardDoctor_ID"];
    }
  }

  $vql = "SELECT * FROM blood_request WHERE WardDoctor_ID ='$x' ORDER BY requeste_id DESC";
  $result = $conn->query($vql);
}
?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>side-ward doctor</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">

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
              <h5>Save A Life</h5>
            </div>
          </div>
          <div class="sidebar-content">
            <nav class="menu open-current-submenu">
              <ul>
                <li class="menu-header"><span></span></li>
                <li class="menu-item">
                  <a href="see.php">
                    <span class="menu-icon">
                      <i class="ri-home-fill"></i>
                    </span>
                    <span class="menu-title">Home</span>
                    
                  </a>
                  <div class="sub-menu-list">
                    
                  </div>
                </li>
                <li class="menu-item">
                  <a href="Make blood request.php">
                    <span class="menu-icon">
                      <i class="ri-edit-box-fill"></i>
                    </span>
                    <span class="menu-title">Make Blood Request</span>
                  </a>
                  <div class="sub-menu-list">
                    
                  </div>
                </li>
                <li class="menu-item">
                  <a href="Request History1.php">
                    <span class="menu-icon">
                      <i class="ri-history-line"></i>
                    </span>
                    <span class="menu-title">Request History</span>
                  </a>
                  <div class="sub-menu-list">
                    
                  </div>
                </li>
                
                
                <li class="menu-header" style="padding-top: 40px"><span>  </span></li>
                <li class="menu-item">
                  <a href="Edit Profile.php">
                    <span class="menu-icon">
                      <i class="ri-user-line"></i>
                    </span>
                    <span class="menu-title">Profile</span>
                    
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-notification-line"></i>
                    </span>
                    <span class="menu-title">Notification</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="logout.php">
                    <span class="menu-icon">
                      <i class="ri-logout-box-r-line"></i>
                    </span>
                    <span class="menu-title">Logout</span>
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
          <!-- add your content from here -->
          <h1> Blood Request History</h1>
          <form method="post" action="search.php">
 
 <div class="midiv">
  <p><font size=3> Search by </font></p><select name= "search" class="select">
                              <option value="requested_date"><b> Requested Date</b></option>
                              <option value="requeste_id"><b> Request ID</b></option>
                              <option value="patient_name"><b>Patient Name</b></option>
                              <option value="blood_group" selected><b>Blood Group</b></option>
                             <option value="status" selected><b> Status</b></option>
                              </select>
 
 
 <input type="text" placeholder="type here" name="data" id="data" class="box">
 
  <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>
 </div>
 
 
 </form>

    <div class="box">

        <form action="Request history2.php" method="POST">
           
                <?php

                if ($result->num_rows > 0) {

                    echo  "<div class='tab'>";
                    echo  "<table border=1>"."<tr>"."<th style='text-align:center;'>"."Requested date"."</th>"."<th style='text-align:center;'>"."Receive date"."</th>"."<th style='text-align:center;width:120px;'>"."Patient Name"."</th>"."<th>"."Blood Group"."</th>"."<th>"."Status"."</th>"."<th style='text-align:center;width:40px;'>"."Action"."</th>"."</tr>";
                    echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
                 while($row = $result->fetch_assoc()) {    
                           
     
     echo  "<tr>"."<td>".$row["requested_date"]."</td>"."<td>".$row["expected_date"]."</td>"."<td>".$row["patient_name"]."</td>"."<td>".$row["blood_group"]."</td>"."<td>" .$row["status"]."</td>";   
    
	 echo "<td class='tb'><form method='POST' action ='Request history2.php'>
     <input type=hidden name=RequestID value=".$row["requeste_id"]." >
     <button type=submit value=view name=view  class='fp'><img src=eye.png width=40 height=37></button>
     </form>  
 	

    </td>"; 
    echo "</div>";	
     echo "</tr>";

     echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
	  
	}
	echo  "</font>"; 
	 echo  "</font>";
	 echo "</table>";
	
	
	
}	

else

{
  echo "Error in ".$vql."<br>".$conn->error;

 echo "no results";

}

$conn->close();
   
?>
</div>
          </div>
          </div>

   
<style>

table{
	
	
	
	width:750px;
	height:15px;
	border-collapse: collapse;	
    margin-top:40px;
   border:0px transparent;		
 	
}

h1{
	
    margin-top:20px;	
    margin-left:280px;
    margin-bottom:70px;
}

.select{

height:30px;
width:138px;
border-radius:20px;
background-color:#56CE94;
border: none;
text-align:center;
margin-left: 30px;              

                    

}



th{
	
	
	  white-space: nowrap; overflow: hidden; text-overflow:ellipsis;
	  text-align: center;
	   padding-top:25px;
	     padding-bottom:25px;
	   padding-left:20px;
	    padding-right:10px;
	     border:0px transparent;	
	
}

td {
  text-align: center;
  padding:1px;
    

}

      
   
   
              .midiv{
   
    margin-left: 200px;
    padding: 15px 10px 30px 20px;
    margin-top: -70px;
    outline: none;
    width: 774.5px;
                  }
                  
                  

.box{
                  
                    
                  height:30px;
                  width:150px;
                  margin-left:20px;
                  margin-top:0px;
                 border-radius:20px;
                 border: none;
                 text-align:center;
                   
         
             }
                 
				
             .b1{
					      height:30px;
                          width:100px;
                          
						  color:#FFF5F3;
						  margin-left:20px;
						   border-radius:20px;
                           
                           background-color:#F3506D;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
				  
				  .f2{
					      
						    margin-left:50px;
							margin-top:-100px;
							background-color:transparent;
							 border: none;
						   cursor:pointer;
						   	margin-bottom:0px;

				  
				  }
				  
				  
				  .f1{
					     
                    background-color: transparent;
                    margin-left: 10px;
                 margin-right: 20px;
                  margin-bottom: 10px;
                   margin-top: 10px;
              border: none;
              cursor: pointer;

						  
				  }
				  
				  .fp {
    margin-top: 0px;
    margin-left: 30px;
    margin-bottom: -100px;
    background-color: transparent;
    border: none;
    cursor: pointer;
}
				  
			  .tb{
                  display: inline-flex;
    justify-content: space-evenly;
    flex-wrap: nowrap;
    align-items: baseline;
    flex-direction: row;
}
			   
.tab {
    background-color: #F5F5F5;
    margin-top: -60px;
    margin-left: 60px;
}
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				   margin-top:60px;
				   margin-bottom:0px;
				  margin-left:370px;
				  margin-right:119px;
				  padding-left:20px;
				   
			   }
			   
			   
			  
	tr{
		
		background-color:white;
		
		
	}
		
    .visible{
cursor: pointer;


}
.layout{
    background-color: #d8d8d8;
}
	
	
			   
</style>
        </main>
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>




</body>
</html>
	
 

