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

    <div id="image"></div>
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
                                    echo " " . $_SESSION['name_with_initials'];
                                    ?>
                    <br>Ward doctor
                </div>

                <div class="dropdown">
                    <span class="material-icons licon">
                        arrow_drop_down
                    </span>
                    <div class="dropdown-content">
                        <a href="Edit Profile.php"> <span class="material-icons licon">
                                person
                            </span> Edit Profile</a>
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
  
  <button class="dropdown-btn"style=background-color:#DB2A54;>
  <a href="view donated blood information.php">View donated blood</a>
  </button>
  	

  <button class="dropdown-btn1" ><a href="Enter test result.php">Enter test result </a>  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  
  <a href="Enter Blood testing result.php">Blood test</a>    
    <a href="Cross matching test result.php">Cross matching</a>
  </div>
 
  <button class="dropdown-btn" >
  <a href="Send test results for approval.php">Send test results for approval</a>
  </button>
  
  <button class="dropdown-btn" >
  <a href="View approval of blood test results1.php">View approval of blood test results</a>
    </button>

    <button class="dropdown-btn" >
    <a href="Add blood components.php">Add blood components</a>
        </button>
        
        <button class="dropdown-btn"  >
      <a href="Blood stock.php"> Blood stock</a>
            </button>
            
    
  <button class="dropdown-btn"  >
  <a href="Report.php">Reports</a>
  </button>
   
  
  </div>
    </ul>

    </div>

    <div class="title" style="margin-left:600px;">
      View donated blood information    </div>

    <form method="post" action="search blood test result.php">
 
 <div class="ta">
 <div class="midiv">
 
  
 
  <font size=3> Search by </font></b>  <br/> <br/><select name= "search" class="select">
                              <option value="process_date"><b>Date</b></option>
                              <option value="batch_number"><b>Batch number</b></option>
                              </select>
 
 
 <input type="text" placeholder="type here" name="data" id="data" class="box">
 
  <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>
 </div>
 </div>

 
 </form>
<div class="box">
        <form action="Request history2.php" method="POST">

	<?php

if(isset($_POST['BtnSubmit']))
    
{		
 
  
$search =$_POST["search"];
$data =$_POST["data"];		 
$sql= "select * from blood_request WHERE $search='$data'";  
$result = $conn->query($sql);

if($result->num_rows>0)

{     
    echo  "<div class='tab'>";
    echo "<font color=black>";
	      echo "<font size=3>";
          
	    
	   echo  "<table >"."<tr>"."<th>"."Requested Date"."</th>"."<th>"."Request ID"."</th>"."<th>"."Patient Name"."</th>"."<th>"."Blood Group"."</th>"."<th>"."Status"."</th>"."<th>"."Action"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=6'>"."</td>"."</tr>";

   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr style='height:60px'>"."<td>".$row["requested_date"]."</td>"."<td>".$row["requeste_id"]."</td>"."<td>".$row["patient_name"]."</td>"."<td>".$row["blood_group"]."</td>"."<td>".$row["status"]."</td>";

      echo "<td>
      <form method='POST' action ='Update.php'>
      <input type=hidden name=RequestID value=".$row["requeste_id"]." >
      <button type=submit value=update name=update  class='f1' ><img src=edit.png width=26 height=26></button>
      </form>
      </td>";
	  echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=6'>"."</td>"."</tr>";
	}

	 echo "</font>";
	 echo  "</font>";
	  
     echo  "</div>";
	
	echo "</table>";
   
	
}	

else

{
///printf("Query failed: %s\n", $conn->error);
 echo "no results";

}

}

$conn->close();

?> 
</div>
<br>
	 <button class="b1" style="margin-left: 1000px;"><a href="Request History1.php">Back</a></button>

     
</html>	 
	 
<style>

table{
	
	
    
	width:708px;
	height:25px;
   border-collapse: collapse;	
   margin-top:40px;
   border:0px transparent;	             
   margin-left:-25px;
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
   
   background-color:#F5F5F5;
   margin-left:1px;
   margin-bottom:-50px;
   padding:15px 10px 30px 20px;
   margin-top:10px;
   outline:none;
   width: 775px;

}
                  
	  
				  .f2{
					      //background-color:red;
						    margin-left:70px;
							background-color:transparent;
							 border: none;
							  cursor:pointer;
						  
						   
				            
				  
				  }
				  
				  
				  .f1{
					     // background-color:yellow;
						      background-color:transparent;
						  margin-left:55px;
						    margin-right:60px;
							margin-bottom:5px;
							margin-top:20px;
						   border: none;
						   cursor:pointer;
						  
				  }
				  
				  
				   
				  
				  
				  .fp{
					  
					  
					 
					  //background-color:green;
					  margin-left:0px;
					  margin-top:16px;
					 
					  margin-bottom:-53px;
					  background-color:transparent;
					   border: none;
					   cursor:pointer;
					  
					  
					  
				  }
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				    margin-top:0px;
					margin-left:350px;
					//padding:10px
					margin-right:265px;
					padding-left:50px;
                   padding-right:450px;
					 
				   
				   
			   }
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				   margin-top:60px;
				   margin-bottom:0px;
				  margin-left:370px;
				  margin-right:160px;
				  padding-left:15px;
				   
				   
				   
			   }
			  
	tr{
		
		background-color:white;
       
		
	}
		
    .visible{
cursor: pointer;

}
a{
  text-decoration:none;
  color: white;
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
			   
</style>

</body>
</html>
	
 

