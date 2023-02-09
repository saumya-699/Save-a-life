<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	
	
?>
<?php

include 'mj.php';
?>
<html>

<head>

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css'>

<link rel="stylesheet" href="style.css">  
<link rel="stylesheet" href="css/nbtssl/nbtssl.min.css">
<link rel="stylesheet" href="css/fontawesome-free-5.15.4/css/all.css">
<link rel="stylesheet" href="css/mediaquery.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

</head>
<body>


<?php


require 'conp.php';
if(isset($_POST['update']))  

{	
   $did=$_POST['Nurse_ID'];
   $query="select * from nurse where Nurse_ID='$did'";
   $result= $conn->query($query);
   
  if($result->num_rows>0)

  {     
   

       
    while($row = $result->fetch_assoc())
   
   {     
     
	 // echo   $row["Nurse_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["Position"]."</td>"."<td>".$row["SLMC_Number"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["ContactNumber"]."</td>";
	   
	   
echo "<div class='midiv'> 
   <div class='passwordDiv'>

     <form method='post' action='UpdateNursebackEnd.php'>
        
                           <center> <b> <font size=8> Update nurse</font></b><br></center>
						   
						   <br> <br> <br>
						   
                              
                               <input type='hidden' value=".$row["Nurse_ID"]." name='Nurse_ID' id='Nurse_ID' class='box'><br><br><br>
                             <b> <font size=5> Name with initials</font></b><br><br>
                             <input type='text' value=".$row["Name_With_Initials"]." name='Name' id='name' class='box'><br><br><br>
							 
							 <b> <font size=5> Hospital name </font></b>   <select name= 'hospital' class='select'>
                             <option value='Richway arya hospital'>Richway arya hospital</option>
                             
                     
                             <option value=".$row["HospitalName"]." selected> ".$row["HospitalName"]." </option>
                             </select>
							 <br><br><br>
							   
							  <b> <font size=5> Position </font></b><select id='position' name='position' class='select'>
                             <option value=".$row["Position"]."> ".$row["Position"]." </option>
                             
                             <option value='Nurse'>Nurse</option>
                             
                            </select>
							<br><br><br>
                              

        
                             <b> <font size=5> SLMC number </font></b><br><br>
                             <input type='text' value=".$row["SLMC_Number"]." name='SLMC' id='slmc' class='box'><br><br><br>
        
                              
                             <b> <font size=5> Email </font></b><br><br>
                             <input type='text' value=".$row["Email"]." name='Email' class='box' id='Email' ><br><br><br>
        

                            <b><font size=5> Contact number</font></b><br><br>
                            <input type='text' value=".$row["ContactNumber"]." name='contactNumber'  class='box' id='contact' ><br><br><br>
				
							 <b> <font size=5> User name</font></b><br><br>
                             <input type='text' value=".$row["UserName"]." name='Uname' id='Uname' class='box'><br><br><br>

                            <b><font size=5> Password</font></b><br><br>
                            <input type='password' value=".$row["Password"]." name='password'  class='box'  id='pw' required> 

     
          </div>
		

   
  </div>
 
  <div  class=container'>
  

     <button type=submit  name=BtnSubmit id=saveChanges class=b1 ><b>Update</b></button>
	  
	   <button type=button  name=btnCancel id=Cancel class=b2 ><b><a href=RemoveOrUpdateNurse.php><font color=white>Cancel</font></a></b></button>
   
      </div>
      </form> 
  </div>";
  
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
			 
			 
			 
	}
	
	
	
	
}	

 else

 {
  echo "Error in ".$query."<br>".$conn->error;

 echo "no results";

 }

}

$conn->close();
?>




      
   <style>
   
   
   
   
           .midiv{

                    background-color:transparent;
                    
                    margin-left:566px;
                    margin-right:325px;
                    margin-bottom:20px;
                    padding:2px 90px 30px 10px;
					margin-top:50px;
					outline:2px solid red;
					border-radius: 25px;

               }
    
          
         .passwordDiv{

                     
                     margin: 25px -30px 2px 85px;
					 line-height:92%;
					 padding-top:20px;

               }                 

                   
      
                 

                 
               
       .box{
                    padding:10px 80px 10px 20px;
                    
                    height:32px;
					width:430px;
					
                     
           
               }


                
            .sin{
                    clip-path: circle(50%);
                    margin-bottom:60px;
                   margin-left:28px;
				    
 
                }
       
    


                     
                

          .save{
                      margin:60px 30px 20px 100px;
               
                     padding:10px 79px 10px 40px;
                     font-size:23px;
                     color:#800000;
					 cursor:pointer;
                     // margin:left;
					   background-color:yellow;
            }
            
         
           span.fgt{

                          float:right;
                          

                 }  

            .container{
                          
                         margin:0px 40px 60px 100px;

                 }
                    
               span.prof{
                            float:right;
                            margin-left:50px;

                     }
                         
                        

              
      
                  .b1{
					  
					        width:130px;
                            height:40px;						   
						    color:#FFF5F3;
							
							 margin:0px 10px 20px 720px;
							 border-radius:30px;
                            
                           background-color:#F35050;
						   border: none;
						   cursor:pointer;
				            
				  
				  }
				  
				  .b2{
					  
					      
					        width:130px;
                            height:40px;					   
						    color:#FFF5F3;
							 margin:0px 100px 20px 10px;
							 border-radius:30px;
                             border: none;
                           background-color:#F35050;
				    
				  
				  }



	   



    .sign{
  
                  background-color: black;

  
  }

   .sign1{
  
                  background-color: green;

  
  }

a {text-decoration: none;}

.select{
	
	 float:right;
	 margin-right:40px;
	
	        
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