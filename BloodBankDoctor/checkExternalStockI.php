<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	
	 $x= $_SESSION["ID"];
     			
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>side bar- blood bank doctor</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./styleM.css">

 
 
 <style>
 table{
	
	
	margin-left:120px;
	width:800px;
	height:20px;
	border-collapse: collapse;	
		margin-top:70px;
   border:0px transparent;		
 	
}
   .passwordDiv{

                     
                     //margin: 25px 0px 2px 95px;
					 line-height:92%;
					 padding-top:20px;

               }                 



           .midiv{

                    background-color:transparent;
                    
                    //margin-left:396px;
                   // margin-right:325px;
                    margin-bottom:-52px;
                    padding:2px 90px 30px 10px;
					margin-top:10px;
					outline:none;
					border-radius: 25px;

               }
			   
			   .b2{
					  
					      
					        width:130px;
                            height:40px;					   
						    color:#FFF5F3;
							 margin:-141px 6px -27px 530px;
							 border-radius:30px;
                             border: none;
                           background-color:#F35050;
				    
				  
				  }
 		  
		  
		  
		    .b3{
					  
					      
					        width:130px;
                            height:40px;					   
						    color:#FFF5F3;
						      margin:10px 20px 100px 360px;
							 border-radius:30px;
                             border: none;
                           background-color:#F35050;
						     cursor:pointer;
						   
				    
				  
				  }
 		  
		      .lk{
	
	
	margin-left:110px;
	width:800px;
	height:20px;
	border-collapse: collapse;	
		margin-top:30px;
   border:0px transparent;	
	
	
}

.select{
	
	 
 height:30px;
 width:148px;
 border-radius:10px;
 background-color:#56CE94;
  border: none;
 text-align:center;
                     
  
						
	
}

.elect{
	
	 
 height:30px;
 width:148px;
 border-radius:10px;
 background-color:#E0B0FF;
  border: none;
 text-align:center;
                     
  
						
	
}


  .b1{
					      height:35px;
                          width:130px;
                          
						  color:#FFF5F3;
						  margin-left:10px;
						   border-radius:20px;
                           
                           background-color:#F3506D;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }
		  
			   </style>
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
                <li class="menu-header"><span>  </span></li>
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
                      <i class="ri-hospital-line"></i>
                    </span>
                    <span class="menu-title">Blood Stock</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="stockI.php">
                          <span class="menu-title">Stock Info</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="checkInternalStockI.php">
                          <span class="menu-title">Internal Stock Availability</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="checkExternalStockI.php">
                          <span class="menu-title">External Stock Availability</span>
                        </a>
                      </li>
					  
					    <li class="menu-item">
                        <a href="LessStockComponentsI.php">
                          <span class="menu-title">Low stock blood components</span>
                        </a>
                      </li>
	
					  
					     <li class="menu-item">
                        <a href="ExpiredComponentsI.php">
                          <span class="menu-title">Blood expiry Information</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-message-2-fill"></i>
                    </span>
                    <span class="menu-title">Request</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="ViewInternalRequestI.php">
                          <span class="menu-title">Check Internal Requests</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="checkExternalRequestI.php">
                          <span class="menu-title">Check External Requests</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="sendRequestI.php">
                          <span class="menu-title">Send requests</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="sentRequestHistoryI.php">
                          <span class="menu-title">Send Request History</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-article-fill"></i>
                    </span>
                    <span class="menu-title">Test Results</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item">
                        <a href="BloodREsultsI.php">
                          <span class="menu-title">Blood Test</span>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="CheckCrossMatchingResultsI.php">
                          <span class="menu-title">Cross Matching</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item">
                  <a href="View_Donors_BI.php">
                    <span class="menu-icon">
                      <i class="ri-user-heart-fill"></i>
                    </span>
                    <span class="menu-title">Donors</span>
                  </a>
                 </li>
                <li class="menu-item">
                  <a href="ReportGeneration_BI.php">
                    <span class="menu-icon">
                      <i class="ri-file-chart-line"></i>
                    </span>
                    <span class="menu-title">Reports</span>
                  </a>
                 </li>
                <li class="menu-header" style="padding-top: 40px"><span>  </span></li>
                <li class="menu-item">
                  <a href="profileBI.php">
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
            <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm"></a></div>
             <!--add your content from here-->

	   
<div class="slider">
<br> <br>




<div class="midiv"> 
   <div class="passwordDiv">

    <center><h1>Check external stock availability</h1></center>
       
    
     <form method="post" action="checkExternalStock.php">
          <table border=1> <tr> <th style='width:180px;'> Blood_group</th><th style='width:180px;'>Component_type</th><th style='width:180px;'>No_of_packs</th><th></th></tr>
		  <tr> <td style='height:20px;background-color:transparent;'colspan=4'></td> </tr>
		  
	    <tr> 
							 
							 <td>  <select name= "Blood_group" class="select"> 
							 <option value='None'>None</option>
                             <option value='A+'>A+</option>
                             <option value='A-'>A-</option>
                             <option value='B+'>B+</option>
                             <option value='B-'>B-</option>
                             <option value='O+'>O+</option>
                             <option value='O-'>O-</option>
                             <option value='AB+'>AB+</option>
                             <option value='AB-'>AB-</option>
                             </select></td> 
							 
							 
							 <td> <select name= "Component_type" class="select"> 
							 <option value='None'>None</option>							 
                             <option value="Red Blood Cells">Red Blood Cells</option>    
                             <option value="White Blood Cells">White Blood Cells</option>
                             <option value="Plasma">Plasma</option>
                             </select></td>
							 
							 
							 <td> <select name= "No_of_packs" class="select"> 
							 	<option value='None'>None</option>
                             <option value='1'>1</option>
                             <option value='2'>2</option>
                             <option value='3'>3</option>
                             <option value='4'>4</option>
                             </select></td> 
							 
							 
							 
							<td> <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button></td></tr> 
							 <tr> <td style='height:20px;background-color:transparent;'colspan=4'></td> </tr>
							  <tr> <td style='height:20px;background-color:transparent;'colspan=4'></td> </tr>
							 
							
	    </table>
							 
            </form> 
          </div>
		

   
  </div>
 


  </div>

  
  <button type="submit"  name="BtnSubmit2" id="saveChanges" class="b3" ><b><a href="sendRequest.php">  Proceed</a></b></button>
	  
	  <button type="button"  name="btnCancel" id="Cancel" class="b2" ><b><a href="home.php"><font color="white">Cancel</font></a></b></button>
  <?php


if(isset($_POST['BtnSubmit']))
    
{		
     $Blood_group =$_POST["Blood_group"];
$Component_type =$_POST["Component_type"];
$No_of_packs =$_POST["No_of_packs"];	

 	$vql="select * from bloodbank_doctor where BloodBank_doctor_ID='$x'";	
		
		$resultr = $conn->query($vql);
		 
		//  echo "Error in ".$vql."<br>".$conn->error;

if($resultr->num_rows>0)

{        
    
   while($rowx = $resultr->fetch_assoc())
   
   {
	    


	   
       $y= $rowx["Hospital_ID"];



	  
	}
	
      
	
  
 
 

 
  
	 
$sql= "select * from stock WHERE Hospital_ID != '$y' AND Blood_group='$Blood_group' AND Component_type='$Component_type' AND No_of_packs>='$No_of_packs'";  
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   
                                echo '<script type="text/javascript">';
		                        echo 'alert("Available");';
		                        echo '</script>';

   
	
}	

else

{
	
	
	
	
                                echo '<script type="text/javascript">';
		                        echo 'alert("Not available");';
		                        echo '</script>';
	
	 //echo " not available";
 // echo "Error in ".$sql."<br>".$conn->error;

 //echo "no results";

}
}


}
//echo "Error in ".$sql."<br>".$conn->error;
//$conn->close(); 
?>

          
        </main>
     
<!-- partial -->
  <script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>

</body>
</html>
	<?php
	
}
 else 
	 
	 {echo '<script type="text/javascript">';
		 echo 'alert("Please log in first");';
         
		echo 'window.location.href="userloginFront.php";';
  echo '</script>';
	 }
 
?>