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



</head>
<body>


<?php


require 'conp.php';
if(isset($_POST['update']))  

{	
   $did=$_POST['WardDoctor_ID'];
   $query="select * from warddoctor where WardDoctor_ID='$did'";
   $result= $conn->query($query);
   
  if($result->num_rows>0)

  {     
   

       
    while($row = $result->fetch_assoc())
   
   {     
     
	 // echo   $row["WardDoctor_ID"]."</td>"."<td>".$row["Name_With_Initials"]."</td>"."<td>".$row["HospitalName"]."</td>"."<td>".$row["Specialization"]."</td>"."<td>".$row["SLMC_Number"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["ContactNumber"]."</td>";
	   
	   
echo "<div class='midiv'> 
   <div class='passwordDiv'>

     <form method='post' action='UpdateWardDoctorBackEnd.php'>
        
                           <center> <b> <font size=8> Update ward doctor</font></b><br></center>
						   
						   <br> <br> <br>
						   
                              
                               <input type='hidden' value=".$row["WardDoctor_ID"]." name='WardDoctor_ID' id='WardDoctor_ID' class='box'><br><br><br>
                             <b> <font size=5> Name with initials</font></b><br><br>
                             <input type='text' value=".$row["Name_With_Initials"]." name='Name' id='name' class='box'><br><br><br>
							 
							 <b> <font size=5> Hospital name </font></b>   <select name= 'hospital' class='select'>
                             <option value='Richway arya hospital'>Richway arya hospital</option>
                             
                     
                             <option value=".$row["HospitalName"]." selected> ".$row["HospitalName"]." </option>
                             </select>
							 <br><br><br>
							   
							  <b> <font size=5> Specialization </font></b><select id='Specialization' name='Specialization' class='select'>
                             <option value=".$row["Specialization"]."> ".$row["Specialization"]." </option>
                             
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
	  
	   <button type=button  name=btnCancel id=Cancel class=b2 ><b><a href=RemoveOrUpdateWardDoctor.php><font color=white>Cancel</font></a></b></button>
   
      </div>
      </form> 
  </div>";
  
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
			 
			 
			 
	}
	
	
	
	
}	

 else

 {
  //echo "Error in ".$query."<br>".$conn->error;

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