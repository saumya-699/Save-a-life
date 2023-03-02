<?php

include "config.php";

$sql = "SELECT * FROM blood_request order by requeste_id DESC";

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
        <button class="dropdown-btn"><a href="see.php">Home</a></button>

        <button class="dropdown-btn"><a href="Make blood request.php">Make Blood request</a> </button>

        <button class="dropdown-btn" style=background-color:#DB2A54;><a href="Request History1.php">Request History </a> </button>

    </div>
    </ul>

    </div>

    <div class="title">
        Blood Request History
    </div>

    <form method="post" action="search.php">
 
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

    <form method='POST' action ='Update.php'>
     <input type=hidden name=RequestID value=".$row["requeste_id"]." >
     <button type=submit value=update name=update  class='f1'><img src=edit.png width=24 height=25 ></button>
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
  echo "Error in ".$sql."<br>".$conn->error;

 echo "no results";

}

$conn->close();
?>
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
	
    margin-top:70px;	
    margin-left:200px;
    margin-bottom:100px;
}

.select{

 
height:35px;
width:138px;
border-radius:20px;
background-color:#56CE94;
border: none;
text-align:center;
                 

                    

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

.select{
	
	 
    height:40px;
    width:138px;
    border-radius:20px;
    background-color:#56CE94;
     border: none;
    text-align:center;
                        
     
                           
       
   }
   
   
           
   
   
              .midiv{
   
                background-color: #F5F5F5;
    margin-left: 370px;
    margin-bottom: -50px;
    padding: 15px 10px 30px 20px;
    margin-top: 10px;
    outline: none;
    width: 774.5px;
                  }
                  
                  

.box{
                  
                    
                  height:35px;
                  width:150px;
                  margin-left:20px;
                  margin-top:0px;
                 border-radius:20px;
                 border: none;
                 text-align:center;
                   
         
             }
                 
				
             .b1{
					      height:35px;
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

</body>
</html>
	
 

