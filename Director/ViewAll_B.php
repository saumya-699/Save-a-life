
<?php 
session_start();

?>

<?php

include 'cj.php';
?>
<html>

<head>
 <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./styleM.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./stylek.css">
 <link rel="stylesheet" href="StyleSearch.css"> 


<style>

		
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
  padding-top:0px;
  padding-left:6px;
  margin-top:-75px;
}

body {
  background-image: url("ki.png");
  background-repeat: no-repeat;
  background-position:top;
  background-attachment: fixed;
  
  
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
  padding-top:5px;
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

body {
  background-image: url("ki.png");
  background-repeat: no-repeat;
  background-position:top;
  
  
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




</head>

<body>

  <!--Header-->
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
	<br>Director</div>
	
			
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
 
 <form method="post" action="search_donor.php">
 
<div class="ta">
<div class="midiv">

  <div class="passwordDiv">
 

  <font size=3> Search by </font></b>  <br/> <br/><select name= "search" class="select">
                             <option value="Donor_Id" selected><b> Donor Id</b></option>
                             <option value="Donor_Name"><b> Donor Name</b></option>
                             <option value="NIC"><b>NIC</b></option>
                             <option value="Blood_Group"><b>Blood Group</b></option>
                             <option value="Gender"><b>Gender</b></option>
                             <option value="province"><b>Provicel</b></option>
            		            <option value="postal"><b> Postal Code</b></option>
                             </select>


<input type="text" placeholder="type here" name="data" id="data" class="box">

 <button type="submit"  name="BtnSubmit" id="search" class="b1" ><b>Search</b></button>
</div>
</div>
</div>

</form>
<?php

require 'conp.php';
if(isset($_POST['view']))  

{	
   $did=$_POST['Donor_Id'];
   $query="select * from donors where Donor_Id='$did'";
   $result= $conn->query($query);
   

  
   

          //echo "<font color=red>";
	      //echo "<font size=6>";
	   
	   echo  "<div style='overflow-x:auto;' class='tab'>";
	   echo  "<table border=1>"."<tr>"."<th style='text-align:center;width:120px;'>"."Donor_ID"."</th>"."<th style='text-align:center;width:100px;'>"."Full name"."</th>"."<th>"."Name with initials"."</th>"."<th>"."NIC"."</th>"."<th>"."DOB"."</th>"."<th>"."Blood_Group"."</th>"."<th style='text-align:center;width90px;'>"."Address"."</th>"."<th>"."Province"."</th>"."<th>"."Postal Code"."</th>"."<th>"."Gender"."</th>"."<th>"."E-mail"."</th>"."<th style='text-align:left:width:50px;'>"."Contact Number"."</th>"."<th style='text-align:left:width:50px;'>"."Action"."</th>"."</tr>";
      echo "<tr>"."<td style='height:20px;background-color:#F5F5F5;'colspan=10'>"."</td>"."</tr>";
   while($row = $result->fetch_assoc())
   
   {     
     
	  echo  "<tr>"."<td>".$row["Donor_Id"]."</td>"."<td>".$row["Prefix"].".".$row["First_Name"]." ".$row["Middle_Name"]." ".$row["Last_Name"]."</td>"."<td>".$row["Initials"]."</td>"."<td>".$row["NIC_Number"]."</td>"."<td>".$row["DOB"]."</td>"."<td>".$row["Blood_Group"]."</td>"."<td>".$row["Address"]."</td>"."<td>".$row["province"]."</td>"."<td>".$row["postal"]."</td>"."<td>".$row["Gender"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Contact_Number"]."</td>";
	   echo "<td>
				<form method='POST' action ='#'>
                <input type=hidden name=Donor_Id value=".$row["Donor_Id"]." >
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
	
	
	


}

$conn->close();
?>


<button type="submit" name="data" id="data" class="bx"><a href="View_Donors_B.php"><font color="white"><font size="3">Back</font></font></a></button>


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
                    
                   // margin-left:396px;
                    //margin-right:325px;
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
				  margin-left:285px;
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
							margin-left:1426px;
							 border-radius:30px;
                             margin-top:30px;
                           background-color:#F35050;
						   border: none;
						   cursor:pointer;
						   
				            
				  
				  }
				  
               a{
				   
				   text-decoration:none;
			   }
			   
</style>

</body>
</html>
