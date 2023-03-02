

<?php
session_start();
$x= $_SESSION["Name"];


?>

<?php

include 'cj.php';
include "conp.php";
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

    <li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font size="5px"> National Blood Transfusion Service  </font size></li>
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
                                    echo " " . $_SESSION['Name'];
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
                            </span>  Profile</a>
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

 <?php





   $query="select * from bloodbank_doctor where BloodBank_doctor_ID='$x'";
   $result= $conn->query($query);
     
  if($result->num_rows>0)

   {     

      while($row = $result->fetch_assoc())
 
       {   
     	  $s= $row[Hospital_ID];
		 
       }
	   
	   
	  $rql ="select * from blood_request where Hospital_ID ='$s'";
	 
	  if($result->num_rows>0)
		  
		  {



 

  
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   echo  "<div style='overflow-x:auto; ' class='tab'> ";
	    // echo  "<div class='hat'>";
	   echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:100px;'>"."Request_ID"."</th>"."<th style='text-align:center;width:120px;'>"."Patient Name"."</th>"."<th style='text-align:center;width:100px;'>"."Patient Age"."</th>"."<th>"."Patient Gender"."</th>"."<th>"."Blood Group"."</th>"."<th style='text-align:center;width:120px;'>"."Required Blood Component"."</th>"."<th>"."Required Amount (packets)"."</th>"."<th style='text-align:center;width:120px;'>"."Expected date to receive"."</th>"."<th style='text-align:center;width:90px;'>"."Requested_date to receive"."</th>"."<th style='text-align:center;width:120px;'>"."Reason for the request"."</th>"."<th>"."Ward number"."</th>"."<th>"."Remark"."</th>"."<th>"."Status"."</th>"."<th style='text-align:center:width:40px;'>"."Action"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["requeste_id"]."</td>"."<td>".$row["patient_name"]."</td>"."<td>".$row["patient_age"]."</td>"."<td>".$row["patient_gender"]."</td>"."<td>".$row["blood_group"]."</td>"."<td>".$row["blood_component"]."</td>"."<td>".$row["required_amount"]."</td>"."<td>".$row["expected_date"]."</td>"."<td>".$row["requested_date"]."</td>"."<td>".$row["reason"]."</td>"."<td>".$row["ward_number"]."</td>"."<td>".$row["remark"]."</td>"."<td>".$row["status"]."</td>";
	   echo "<td>
				<form method='POST' action ='Update.php'>
                <input type=hidden name=RequestID value=".$row["requeste_id"]." >
                <button type=submit value=update name=update  class='f1'><img src=edit.png width=26 height=26></button>
                </form>
                </td>";
				 echo "</tr>";
	 
	   echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
	  
	}
	
	 echo "</font>";
	 echo  "</font>";   
	 echo "</table>";
	 echo "</div>";
	// echo "</div>";
	
		  }
   
   }




$conn->close();
?>
 
<br>
 <button class=b2 style="	 margin-left: 1050px;"><a href="Request History1.php" >Back</a></button>


<style>

table{
	
	
	//margin-left:440px;
	width:100px;
	height:20px;
	border-collapse: collapse;	
		margin-top:50px;
   border:0px transparent;		
 	
}


th{
	
	
	
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



h1{
	
		margin-top:70px;	
		margin-left:200px;
		margin-bottom:100px;
}

.select{
	
	 
 height:30px;
 width:138px;
 border-radius:20px;
 background-color:#56CE94;
  border: none;
 text-align:center;
 margin-left: 20px;                    
						
	
}


.midiv{
   
   background-color:#F5F5F5;
   margin-left:285px;
   margin-bottom:-50px;
   padding:15px 10px 30px 20px;
   margin-top:10px;
   outline:none;
   width:1162px;

}
            



			   
			   
			   .box{
                  
                    
                    height:30px;
					width:200px;
					margin-left:20px;
					margin-top:0px;
				   border-radius:20px;
				   border: none;
				   text-align:center;
                     
           
               }
			   
			   
			   
                  .b1{
					      height:30px;
                          width:130px;        
						  color:#FFF5F3;
						  margin-left:20px;
						   border-radius:20px;
                           
                background-color:#F3506D;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
          .b2{
					      height:30px;
                width:100px;
                          
						  color:#FFF5F3;
						   border-radius:20px;
                           
                background-color:#F3506D;
						   border: none;
						   cursor:pointer;
				            
				  
				  }
				  
				  
				    .f2{
					      //background-color:red;
						    margin-left:90px;
							margin-top:-54px;
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
				  
				  
			   
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				    margin-top:0px;
					margin-left:285px;
					//padding:10px;
					margin-right:90px;
					padding-left:1px;
                  // padding-right:1000px;
					 
				   
				   
			   }
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				  
				   
				   margin-top:90px;
				   margin-bottom:0px;
				  margin-left:284px;
				  margin-right:90px;
				  padding-left:30px;
				   
				   
				   
			   }
			  
	tr{
		
		background-color:white;
		
		
	}
		
		
                  .bx{
					      height:25px;
				          width:100px;
										   
						    color:#FFF5F3;
							margin-left:1340px;
							 border-radius:30px;
                             margin-top:30px;
                           background-color:#F35050;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
          a{
  text-decoration:none;
  color: white;
}
			   
    
			   

</style>

</body>
</html>
