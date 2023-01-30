
<!--add nurse-->
<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	
	
?>
<?php

require 'mj.php'


?>
<html>

 
    <head>

        
        


     
      
   <style>
   
   
   
   
           .midiv{

                    background-color:transparent;
                    
                    margin-left:566px;
                    margin-right:325px;
                    margin-bottom:20px;
                    padding:2px 90px 30px 10px;
					margin-top:60px;
					outline:2px solid red;
					border-radius: 25px;

               }
    
          
         .passwordDiv{

                     
                     margin: 25px 0px 2px 95px;
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
							
							 margin:0px 10px 20px 655px;
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
	 margin-right:0px;
	
	        
      }

 </style>




<meta name="viewport" content="width=device-width, initial-scale=1.0">
  









    </head>
    <body>
       <!--Header-->
        
        



<?php
require 'conp.php';
$date =date("Y/m/d");
echo "<div class='slider'>
<br> <br>




<div class='midiv'> 
   <div class='passwordDiv'>

   
       
    
     <form method='post' action='signupback.php' id='FormName'>
        
                           <center> <b> <font size=8> Sign up</font></b><br></center>
						   
						   <br> <br> <br>
						   
                              
                              
                             <b> <font size=5> Name with initials</font></b><br><br>
                             <input type='text' placeholder='Enter the name' name='Name' id='name' class='box' required><br><br><br>
							 
							 
							  <b> <font size=5> NIC number</font></b><br><br>
                             <input type='text' placeholder='Enter the name' name='NIC' id='NIC' class='box'  onchange='myFunction1()' required><br><br><br>";
							

?>
	

	
	
	<?php
	
            
	       
                             
                             
                             
                           
                              
                           
                            echo "<b> <font size=5> DOB</font></b><br><br>
                             <input type='date' name='DOB' id='DOB' class='box' required><br><br><br>
        
        
                           
					
                             <b> <font size=5> Email </font></b><br><br>
                             <input type='email' placeholder='Enter the Email' name='Email' class='box' id='Email'  required><br><br><br>
        
                             
                            <b><font size=5> Contact number</font></b><br><br>
                            <input type='tel' placeholder='Enter the contact number' name='contactNumber'  class='box'  id='contact' pattern='[0-9]{10}' required><br><br><br>
							
							 <b><font size=5> Date of appoinment</font></b><br><br>
                             <input type='text'  name='DOA' id='DOA' class='box' value='$date'><br><br><br>
				
							 <b> <font size=5> User name</font></b><br><br>
                             <input type='text' name='Uname' id='Uname' class='box' required><br><br><br>
                           
						    <b><font size=5> Password</font></b><br><br>
                            <input type='password'  name='password'  class='box'  id='Pw'  required>

                   
						
          </div>
		

   
  </div>
  
 
  <div  class='container'>
  

     <button type='submit'  name='BtnSubmit' id='saveChanges' class='b1' ><b>Add</b></button>
	  
	   <button type='button'  name='btnCancel' id='Cancel' class='b2' ><b><a href='home.php'><font color='white'>Cancel</font></a></b></button>
   
      </div>
      </form> 
  </div>";

?>

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