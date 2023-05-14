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
  <title>End blood collection</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./add_medical.css">
<style>
table{
	
	
	//margin-left:440px;
	width:800px;
	height:20px;
	border-collapse: collapse;	
		margin-top:20px;
   border:0px transparent;	
 	
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
  padding:3px;


}



h1{
	
    margin-top: 50px;
	text-align: center;
	position: relative;
}

.select{
	
	 
 height:35px;
 width:138px;
 border-radius:20px;
 background-color:#56CE94;
  border: none;
 text-align:center;
                     
  
						
	
}


         .passwordDiv{

                     
                     //margin: 25px 0px 2px 95px;
					 line-height:92%;
					 padding-top:20px;

               }                 



           
			   
			   .box{
                  
                    
                    height:35px;
					width:200px;
					
					margin-left:20px;
					margin-top:0px;
				   border-radius:20px;
				   border: none;
				   text-align:center;
                     
           
               }
			   
			   
			   
                  .b1{
					      height:25px;
                          width:50px;
                          
						  color:#FFF5F3;
						  margin-left:18px;
						   border-radius:2px;
                           
                           background-color:#58A727;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
				  
				  
				  
				    
			   
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				   align:center ;
				    margin-top:30px;
					margin-left:150px;
					//padding:10px;
					margin-right:150px;
					padding-left:37px;
                   padding-right:60px;
				   padding-bottom:50px;
                   width:1000px;
         
					 
				   
				   
			   }
			  
	 
			  
			  
	tr{
		
		background-color:white;
		
		
	}

    .button{
					      height:60px;
                          width:130px;
						  color:#FFF;
						  margin-left:20px;
						   border-radius:5px;
                           margin-top:10px;
                           margin-bottom: 10PX;
                           background-color:#58A727;
						   border: none;
						   cursor:pointer;
                           padding:10px;
						   
				            
				  
				  }
.button2{
					      height:50px;
                          width:100px;
						  color:#FFF;
						  margin-left:700px;
						   border-radius:5px;
                           margin-top:20px;
                           margin-bottom: 10PX;
                           background-color:#F3506D;
						   border: none;
						   cursor:pointer;
                           padding:10px;
						   
				            
				  
				  }
				  
		
		
			   
</style>


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
                  <a href="#">
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
                  <a href="#">
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
           <h1>Daily Blood Collection</h1>
<br><br>


<div class='tab'>
  <form method="POST" action="add_donation.php">
    <button class='button'>Add donor <br> Details</button>
  </form>
  <?php
  require 'conp.php';

$m= $_SESSION["Name"];
    $query = "select * from nurse where UserName ='$m'";
    
    
           
    $resultd = $conn->query($query);
    
    //echo "Error in ".$vql."<br>".$conn->error;
    $x=null;
    if($resultd->num_rows>0)
    
    {        
    
    while($row = $resultd->fetch_assoc())
    
    {
    
    
    
    
    $x= $row["Nurse_ID"];
    }
    
    
    }
 $vql ="select * from nurse where Nurse_ID ='$x'";
$resultx = $conn->query($vql);
$y=null;
 while($row = $resultx->fetch_assoc())
   
   {     
     
	  $y=$row["Hospital_ID"];
   
	 
	  
	  
	}
    
  $sql= "SELECT Donation_date, Donation_Id, Batch, Donor_Id, packet_no,Nurse_ID FROM donation_records where End_donation<> '1' and Hospital_ID=$y";

  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    ?>
    <table border="1">
      <tr>
        <th style="text-align:center;width:120px;">Donation Date</th>
        <th style="text-align:center;width:120px;">Donation ID</th>
        <th style="text-align:center;width:120px;">Batch No</th>
        <th style="text-align:center;width:120px;">Donor Id</th>
        <th style="text-align:center;width:120px;">Blood Packet No</th>
        <th>Nurse ID</th>
      </tr>
      <tr>
        <td style="height:20px;background-color:#F5F5F5;" colspan="8"></td>
      </tr>
      <!-- Donation_date,Donation_Id,Batch,Donor_Id,packet_no,packet_quantity,Nurse_ID -->
      <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row["Donation_date"]; ?></td>
          <td><?php echo $row["Donation_Id"]; ?></td>
          <td><?php echo $row["Batch"]; ?></td>
          <td><?php echo $row["Donor_Id"]; ?></td>
          <td><?php echo $row["packet_no"]; ?></td>
          <td><?php echo $row["Nurse_ID"]; ?></td>
      </tr>
      <tr>
          <td style="height:20px;background-color:#F5F5F5;" colspan="8"></td>
        </tr>
      <?php } ?>
    </table>
  <?php } else { ?>
    <p>Donation details are sent.</p>
  <?php } ?>
  <?php
echo "
     <form method='POST' action =''>  	
    
    <button type=submit value=Send name='send'  class='button2'>End blood <br> collection</button>

     </form>


    </td>";
 
    
    if(isset($_POST['send'])){
    
      
      $updateSqlSend= "UPDATE donation_records SET End_donation	='1'";
      $send=mysqli_query($conn,$updateSqlSend);
        // var_dump($bdate,$bnum);
        // <input type='submit' name='$bnum' value='Send'>


    }?>
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