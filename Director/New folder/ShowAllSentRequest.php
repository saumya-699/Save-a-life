<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	
	
?>
<?php

include 'cj.php';
?>
<html>

<head>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        
   <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>

    <link rel="stylesheet" href="style.css">  
	<link rel="stylesheet" href="css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="css/mediaquery.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />




</head>
<body>
<br><br>
 
 <form method="post" action="searchNurse.php">
 
<div class="ta">
<div class="midiv">

  <div class="passwordDiv">
 

 <font size=3> Search by </font></b>  <br/> <br/><select name= "search" class="select">
                             <option value="Position"><b> position</b></option>
                             <option value="Nurse_ID"><b> Nurse_ID</b></option>
                             <option value="Email" selected><b>Email</b></option>
		                    <option value="ContactNumber" selected><b> Contact number</b></option>
                             </select>


<input type="text" placeholder="type here" name="data" id="data" class="box">

 <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>
</div>
</div>
</div>

</form>
<?php


require 'conp.php';
    
$sql= "select * from sent_request";
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   

	   
	
	  echo  "<div style='overflow-x:auto;' class='tab'>";
	   echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Request_ID"."</th>"."<th style='text-align:center;width:120px;'>"."Requested_hospital_name"."</th>"."<th>"."Requested_by"."</th>"."<th>"."Requeired_blood_group"."</th>"."<th>"."Requeired_blood_component"."</th>"."<th>"."Requeired_no_of_packs"."</th>"."<th>"."Date"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Request_ID"]."</td>"."<td>".$row["Requested_hospital_name"]."</td>"."<td>".$row["Requested_by"]."</td>"."<td>".$row["Requeired_blood_group"]."</td>"."<td>".$row["Requeired_blood_component"]."</td>"."<td>".$row["Requeired_no_of_packs"]."</td>"."<td>".$row["Date"]."</td>";
	   echo "<td>
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
  //echo "Error in ".$sql."<br>".$conn->error;

 echo "no results";

}

$conn->close();
?>


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


<style>

table{
	
	
	//margin-left:440px;
	width:800px;
	height:20px;
	border-collapse: collapse;	
		margin-top:50px;
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
  padding:1px;


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


         .passwordDiv{

                     
                     //margin: 25px 0px 2px 95px;
					 line-height:92%;
					 padding-top:20px;

               }                 



           .midiv{

                    background-color:transparent;
                    
                    //margin-left:396px;
                   margin-right:0px;
                    margin-bottom:-52px;
                    padding:2px 90px 30px 10px;
					margin-top:10px;
					outline:none;
					border-radius: 25px;

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
					      height:35px;
                          width:130px;
                          
						  color:#FFF5F3;
						  margin-left:20px;
						   border-radius:20px;
                           
                           background-color:#F3506D;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
				  
				  
				  
				    .f2{
					      background-color:red;
						    margin-left:90px;
							margin-top:-7px;
							background-color:transparent;
							 border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
				  
				  .f1{
					     // background-color:yellow;
						      //background-color:transparent;
						  
						    margin-right:70px;
							margin-bottom:0px;
							margin-top:2px;
						   border: none;
						   cursor:pointer;
//background-color:red;

						  
						  
				  }
				  
				  .fp{
					  
					  
					 
					  //background-color:green;
					  margin-right:0px;
					  margin-top:-6px;
					 
					  margin-bottom:-53px;
					  background-color:transparent;
					   border: none;
					   cursor:pointer;
					  
					  
					  
				  }
			   
			   
			   .tab{
				   
				   background-color:#F5F5F5;
				    margin-top:0px;
					margin-left:370px;
					//padding:10px;
					margin-right:265px;
					padding-left:37px;
                   padding-right:60px;
					 
				   
				   
			   }
			  
	 
			   .ta{
				   
				   background-color:#F5F5F5;
				  
				   
				   margin-top:90px;
				   margin-bottom:0px;
				  margin-left:370px;
				  margin-right:265px;
				  padding-left:30px;
				   
				   
				   
			   }
			  
	tr{
		
		background-color:white;
		
		
	}
		
		@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

		.name li {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 1px 16px;
  font-weight: 500;
  font-style: italic;
  font-family:Open Sans, sans-serif;
  position:fixed;
}


.logo-massaviu {
  position: fixed;
  padding-left: 0px;
  background: transparent;
  overflow: hidden;
  z-index: 1;
  width: 198px;
  padding-top:9px;
  padding-left:6px;
}


.top li {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  font-weight: 500;
  font-style: italic;
  font-family:Open Sans, sans-serif;
}


.logo-massaviu {
  position: fixed;
  padding-left: 0px;
  background: transparent;
  overflow: hidden;
  z-index: 1;
  width: 198px;
  padding-top:9px;
  padding-left:6px;
}

.top-right
{
    display: flex;
 margin-bottom:1px;
 margin-left:1020px;
 padding-left:300px;
 
}
.name{
display: flex;
 margin-bottom:-10px;
 cursor: pointer;

}

.person{
   cursor: pointer;
}

.notification{
  cursor: pointer;
}


.welcome{
 margin-left:400px;

}

.dropdownx{
   cursor: pointer;

}

.dropdownx:hover{  
  color: black;
}


.dropdownx-content {
  display: none;
  position: absolute;
  background-color: #C14246;
  min-width: 90px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdownx-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdownx-content a:hover {background-color: #f5646c}

.dropdownx:hover .dropdownx-content {
  display: block;
}

.dropdownx:hover .dropbtn {
  background-color: #3e8e41;
}



.top {
  list-style-type: none;
  margin-top:-8px;
  padding-bottom:0px;
  overflow: hidden;
  padding-top:10px;
  background-color:#E56262;
  width:100%;
  height:57px;
  position:fixed;
  top:0;
  
}



.name li {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 1px 16px;
  font-weight: 500;
  font-style: italic;
  font-family:Open Sans, sans-serif;
  position:fixed;
}	   
			 

		
			   
</style>
 <body style="background-color:#FFC3BF;">
 

<div class="logo-massaviu">
  &nbsp; &nbsp; 
</div>
<div class="top">
<ul class="name" >

  <li>&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <font size="5.2px"> National Blood Transfusion Service  </font size></li>
 

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
	<div class="name">
    <?php
      // session_start();
     echo " " . $_SESSION['Name'];
    ?>
	<br>Blood bank doctor</div>
	
			
  <div class="dropdownx">
               <span class="material-icons licon">
                    arrow_drop_down
                </span> 
				<div class="dropdownx-content">
  <a href="#"> <span class="material-icons licon">
  person
                </span> Profile</a>
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


</div>
</body>
</html>
	<?php
	
}
 else 
	 
	 {echo '<script type="text/javascript">';
		 echo 'alert("Please log in first");';
         
		echo 'window.location.href="loginx.php";';
  echo '</script>';
	 }
 
?>