<!--add nurse-->
<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"])) 
	   {
	
	
?>
<?php

require 'cj.php';
	 $x= $_SESSION["ID"];

?>
<html>

 
    <head>

        
       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>

    <link rel="stylesheet" href="style.css">  
	<link rel="stylesheet" href="css/nbtssl/nbtssl.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.css">
    <link rel="stylesheet" href="css/mediaquery.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" /> 


     
      
   <style>
   
   
   body{
	   
	    font-family:Open Sans, sans-serif;
   }
   
table{
	
	
	margin-left:120px;
	width:800px;
	height:20px;
	border-collapse: collapse;	
		margin-top:70px;
   border:0px transparent;		
 	
}

.lk{
	
	
	margin-left:120px;
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
				  
				  
				  
				  
           .midiv{

                    background-color:#F5F5F5;
                    
                    margin-left:366px;
                    margin-right:125px;
                    margin-bottom:20px;
                    padding:2px 90px 30px 10px;
					margin-top:60px;
					outline:2px solid red;
					border-radius: 25px;

               }
				  
				  
		  .b2{
					  
					      
					        width:130px;
                            height:40px;					   
						    color:#FFF5F3;
							 margin:10px 100px 20px 2px;
							 border-radius:30px;
                             border: none;
                           background-color:#F35050;
				    
				  
				  }
 		  
		  
		  
		    .b3{
					  
					      
					        width:130px;
                            height:40px;					   
						    color:#FFF5F3;
						      margin:10px 20px 20px 695px;
							 border-radius:30px;
                             border: none;
                           background-color:#F35050;
						     cursor:pointer;
						   
				    
				  
				  }
 		  
		  
		  a {text-decoration: none;}




			  
				  
				  
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




<meta name="viewport" content="width=device-width, initial-scale=1.0">
  









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



<div class="slider">
<br> <br>




<div class="midiv"> 
   <div class="passwordDiv">

    <center><h1>Check internal stock availability</h1></center>
       
    
     <form method="post" action="checkInternalStock.php">
          <table border=1> <tr> <th style='width:180px;'> Blood_group</th><th style='width:180px;'>Component_type</th><th style='width:180px;'>No_of_packs</th><th></th></tr>
		  <tr> <td style='height:20px;background-color:transparent;'colspan=4'></td> </tr>
		  
	    <tr> 
							 
							 <td>  <select name= "Blood_group" class="select"> 
							 <option value='None'>None</option> 
                             <option value="A+">A+</option>    
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
                             <option value="Red">Red</option>    
                             <option value="Karapitiya Teaching Hospital">Karapitiya&nbsp;Teaching&nbsp;Hospital</option>
                             <option value="Galle_general_hospital">Galle_general_hospital</option>
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
  <?php


require 'conp.php';
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
	
      
	
  
 
 

 
  
	 
$sql= "select * from stock WHERE Hospital_ID = '$y' AND Blood_group='$Blood_group' AND Component_type='$Component_type' AND No_of_packs>='$No_of_packs'";  
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
$conn->close(); 
?>

     <form method="post" action="checkInternalStockBackEnd.php">

<div class="midiv"> 
   <div class="passwordDiv">

  
          <table class="lk"> 
	   
							   <tr> <td style='width:100px;'>Procedure</td> <td><select name= "Procedure" class="elect"> 
                             <option value="Cross matching">Cross matching</option>    
                             <option value="Check external stock and send e-msg">Check external stock and send e-msg</option>
                            
                             </select> </td> <</tr>
							
	    </table>
		
		
		 <div  class="container">
  

   
      </div>
							 
            
          </div>
		

   
  </div>
 



     <button type="submit"  name="BtnSubmit2" id="saveChanges" class="b3" ><b>Proceed</b></button>
	  
	   <button type="button"  name="btnCancel" id="Cancel" class="b2" ><b><a href="home.php"><font color="white">Cancel</font></a></b></button>
</form> 	   
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