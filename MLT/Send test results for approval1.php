<?php

include "config.php";

$sql = "SELECT * FROM blood_testing_result";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="./css/stylek.css">
    <link rel="stylesheet" href="./css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="./css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="./css/mediaquery.css">

<meta name="viewport"
		content="width=device-width, initial-scale=1.0" />
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
		 
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylet.css">

</head>

<body style="background-color:#FFC3BF;">
    <div class="logo-massaviu">
        &nbsp; &nbsp; <img src="icon.png" width="15%">
    </div>
    <ul class="top">

    <li>&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font size="5px"> National Blood Transfusion Service  </font size></li>
        </li>

        <li>
            <div class="top-right">
                <div class="notification">
                    <span class="material-icons licon">
                        notifications
                    </span>
                </div>
                &nbsp;
                <div class="person">
                    <span class="material-icons licon">
                        person
                    </span>
                </div>
                &nbsp;
                <div class="name"><?php
                                    session_start();
                                    echo " " . $_SESSION['Name_With_Initials'];
                                    ?>
                    <br>MLT
                </div>

                <div class="dropdown">
                    <span class="material-icons licon">
                        arrow_drop_down
                    </span>
                    <div class="dropdown-content">
                        <a href="Edit ProfileMlt.php"> <span class="material-icons licon">
                                person
                            </span>Profile</a>
                        <a href="logout.php">
                            <span class="material-icons licon">
                                exit_to_app
                            </span>
                            Log out</a>
                    </div>
                </div>
        </li>
        </div>
    </ul>

  
<div class="sidenav">
    <button class="dropdown-btn" ><a href="seeMLT.php">Home</a>
    </button>
  
  <button class="dropdown-btn">
  <a href="view donated blood information.php">View donated blood</a>  </button>
  	

  <button class="dropdown-btn1" >Enter test result 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <a href="Enter Blood testing result.php">Blood test</a>    
  <a href="Cross matching test result.php">Cross matching</a>
  </div>
 
  <button class="dropdown-btn" style=background-color:#DB2A54;>
  <a href="Send test results for approval.php" >Send test results for approval</a>
  </button>
  
  <button class="dropdown-btn" >
  <a href="View approval of blood test results1.php" >View approval of blood test results</a>
    </button>

    <button class="dropdown-btn" >
    <a href="Add blood components.php">Add blood components</a>
        </button>
        
        <button class="dropdown-btn"  >
        <a href="Blood stock.php">Blood stock</a>
            </button>
            
    
  <button class="dropdown-btn"  >
  <a href="Report.php">Reports</a>
  </button>
   
  
  </div>
 


    
    </ul>

    </div>

    <div class="title" style="margin-left: 550px;">
Send blood test results for approval   </div>

    <form method="post" action="search blood test result.php">
 
 <div class="midiv">
 
  
 
  <font size=3> Search by </font></b>  <br/> <br/><select name= "search" class="select">
                              <option value="requested_date"><b> Requested Date</b></option>
                              <option value="requeste_id"><b> Request ID</b></option>
                              <option value="patient_name"><b>Patient Name</b></option>
                              <option value="blood_group" selected><b>Blood Group</b></option>
                             <option value="status" selected><b> Status</b></option>
                              </select>
 
 
 <input type="text" placeholder="type here" name="data" id="data" class="box">
 
  <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>
 </div>
 
 </div>
 
 </form>
 <?php
   $x = $_SESSION['MLT_ID'];
require 'config.php';
if(isset($_POST['view']))  

{	

   $did=$_POST['RequestID'];
   $batchid= $_POST['Requestbatch'];
   $sql = "SELECT * FROM blood_testing_result where process_date ='$did' AND MLT_ID='$x' AND batch_number='$batchid'";
   $result = $conn->query($sql);


                    echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:200px;'>"."Test result ID"."</th>"."<th style='text-align:center;width:120px;'>"."Donar ID"."</th>"."<th style='text-align:center;width:100px;'>"."Blood group"."</th>"."<th>"."Malaria result"."</th>"."<th>"." HIV result"."</th>"."<th>"."HBV result"."</th>"."<th>"."HCV result"."</th>"."<th>"."VDRL result"."</th>"."<th>"."Date"."</th>"."<th>"."Batch number"."</th>"."<th>"."MLT ID"."</th>"."<th>"."Hospital ID"."</th>"."</tr>";
                    echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=12'>"."</td>"."</tr>";
                    while($row = $result->fetch_assoc())
   
                    {         
                    echo  "<tr>"."<td>".$row["test_result_id"]."</td>"."<td>".$row["donar_id"]."</td>"."<td>".$row["blood_group"]."</td>"."<td>".$row["malaria_result"]."</td>"."<td>".$row["hiv_result"]."</td>"."<td>".$row["hbv_result"]."</td>"."<td>".$row["hcv_result"]."</td>"."<td>".$row["vdrl_result"]."</td>"."<td>".$row["process_date"]."</td>"."<td>".$row["batch_number"]."</td>"."<td>".$row["MLT_ID"]."</td>"."<td>".$row["Hospital_ID"]."</td>";
	  
                    echo "</tr>";

     echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=12'>"."</td>"."</tr>";
	  
	}
	echo  "</font>"; 
	 echo  "</font>";
	 echo "</table>";
	
	
	
}	

else

{
  echo "Error in ".$sql."<br>".$conn->error;

 echo "no results";

}

$conn->close();
?>

<style>
  .top {
  list-style-type: none;
  margin-top: -100px;
  margin-left: -10px;
  padding: 0px;
  overflow: hidden;
  background-color:#E56262;
  position: absolute;
  width: 1500px;
  height: 55px;
}
.logo-massaviu {
  position: absolute;
  background: transparent;
  overflow: hidden;
  z-index: 1;
  width: 198px;
  margin-top:-90px;
  margin-left:0px;
}



    .sidenav a.active {
      background-color: red;
      color: white;
    }
    .sidenav {
      height: 250%;
      width: 246px;
      position: absolute;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #C14246;
      overflow-x: hidden;
      padding-top: 0px;
      margin-top:55px;
      font-weight:600;
    }
    .sidenav a, .dropdown-btn {
      padding: 26px 8px 6px 16px;
      text-decoration: none;
      font-size: 20px;
      color: #D9D9D9;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
      font-family:Open Sans, sans-serif;
    }
    .dropdown-btn1 {
      padding: 26px 8px 6px 16px;
      text-decoration: none;
      font-size: 20px;
      color: #D9D9D9;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
      font-family:Open Sans, sans-serif;
    }
    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
      color:#574240;
    }
    .main {
      margin-left: 200px; /* Same as the width of the sidenav */
      font-size: 20px; /* Increased text to enable scrolling */
      padding: 0px 10px;
    }
    .dropdown-btn.active {
      background-color:#DB2A54;
      color: white;
    }
    .dropdown-btn1.active {
      background-color:#DB2A54;
      color: white;
    }
    .dropdown-container {
      display: none;
      background-color:#007675;
      
      
    }
    
    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }
    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
table{
	
	
	
	width:750px;
	height:15px;
	border-collapse: collapse;	
    margin-top:40px;
   border:0px transparent;	
   margin-left: 300px;	
 	
}

h1{
	
    margin-top:70px;	
    margin-left:200px;
    margin-bottom:100px;
}

.select{
	
  height:30px;
  width:120px;
  border-radius:20px;
  background-color:#56CE94;
   border: none;
  text-align:center;
  margin-left: 30px;
   
 }

 .box{
                   
        height:30px;
        width:130px;
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
   
   background-color: #F5F5F5;
    margin-left: 300.5px;
    margin-bottom: -50px;
    padding: 15px 10px 30px 20px;
    margin-top: 10px;
    outline: none;
    width: 997.5px;
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
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				    margin-top:0px;
					margin-left:350px;
					margin-right:265px;
					padding-left:25px;
                   padding-right:400px;
					 
				   
				   
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
	
			   
</style>
<script>
        var dropdown = document.getElementsByClassName("dropdown-btn1");
       var i;
       
       for (i = 0; i < dropdown.length; i++) {
         dropdown[i].addEventListener("click", function() {
           this.classList.toggle("active");
           var dropdownContent = this.nextElementSibling;
           if (dropdownContent.style.display === "block") {
             dropdownContent.style.display = "none";
           } else {
             dropdownContent.style.display = "block";
           }
         });
       }
       
       </script>
       
</body>
</html>
	
 

