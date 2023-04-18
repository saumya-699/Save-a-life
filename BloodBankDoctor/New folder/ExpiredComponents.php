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




   <!-- Vanilla Datepicker CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>

    <link rel="stylesheet" href="style.css">  
	<link rel="stylesheet" href="css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="css/mediaquery.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  

</head>
<body>

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
<br><br>
 
 <form method="post" action="searchNurse.php">
 
<div class="ta">
<div class="midiv">

  <div class="passwordDiv">
 

 <font size=3> Search by </font></b>  <br/> <br/><select name= "search" class="select">
                            <option value="MLT_ID"><b> MLT_ID</b></option>
							   <option value="Name_With_Initials"><b>Name_With_Initials</b></option>
						        <option value="HospitalName"><b> Hospital Name</b></option>
							   <option value="SLMC_number"><b> SLMC_number</b></option>
                             <option value="Email" selected><b>Email</b></option>
		                    <option value="ContactNumber" selected><b> Contact number</b></option>
						  <option value="Remark" selected><b>Remark</b></option>
						  	  <option value="Director_ID" selected><b>Director_ID</b></option>
							
                             </select>


<input type="text" placeholder="type here" name="data" id="data" class="box">

 <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>
</div>
</div>
</div>

</form>
<?php


require 'conp.php';
   $today =date("Y-m-d"); 
$vql ="select * from bloodbank_doctor where BloodBank_doctor_ID ='$x'";
$resultx = $conn->query($vql);

 while($row = $resultx->fetch_assoc())
   
   {     
     
	 $ty=$row["Hospital_ID"];
	  
	  
	}
	
	

 //echo $row["Hospital_ID"];

	
$sql= "select * from stock where Hospital_ID='$ty' and ExpiryDate <'$today'";
$result = $conn->query($sql);

if($result->num_rows>0)

{     
   

	   
	   echo  "<div class='tab'>";
	   echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Blood_bagID"."</th>"."<th style='text-align:center;width:120px;'>"."Blood_group"."</th>"."<th>"."Component_type"."</th>"."<th>"."No_of_packs"."</th>"."<th>"."Expiry date"."</th>"."<th>"."Action"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=8'>"."</td>"."</tr>";
     while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Blood_bagID"]."</td>"."<td>".$row["Blood_group"]."</td>"."<td>".$row["Component_type"]."</td>"."<td>".$row["No_of_packs"]."</td>"."<td>".$row["ExpiryDate"]."</td>";
	   echo "<td>
				<form method='POST' action =' Fill_MLTUpdateForm.php'>
                <input type=hidden name=Blood_bagID  value=".$row['Blood_bagID'].">
                <button type=submit value=update name=update  class='f1'><img src=edit.png width=26 height=26></button>
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
  //echo "Error in ".$sql."<br>".$conn->error;

// echo "no results";

}
//echo "Error in ".$vql."<br>".$conn->error;
$conn->close();
?>





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
                   // margin-right:325px;
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
					      //background-color:red;
						    margin-left:90px;
							margin-top:-50px;
							background-color:transparent;
							 border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
				  
				  .f1{
					     // background-color:yellow;
						      background-color:transparent;
						  margin-left:55px;
						    margin-right:60px;
							margin-bottom:0px;
							margin-top:2px;
						   border: none;
						   cursor:pointer;
						  
						  
				  }
				  
				  .fp{
					  
					  
					 
					  //background-color:green;
					  margin-right:100px;
					  margin-top:2 px;
					 
					  margin-bottom:-35px;
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
		
.top {
  list-style-type: none;
  margin-top:-10px;
  padding-bottom:0px;
  overflow: hidden;
  background-color:#E56262;
  width:100%;
  height:57px;
  position:fixed;
  top:0;
  
}




.logo-massaviu {
  position: fixed;
  padding-left: 0px;
  background: transparent;
  overflow: hidden;
  z-index: 1;
  width: 198px;
  padding-top:0px;
  padding-left:6px;
  margin-top:-4px;
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
  padding-top:10px;
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

  font-family:Open Sans;
  position:fixed;
}
		   
</style>

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