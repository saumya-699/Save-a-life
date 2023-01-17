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

        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
        


     
      
   <style>
   
   
   
   
           .midiv{

                    background-color:transparent;
                    
                    margin-left:566px;
                    margin-right:325px;
                    margin-bottom:10px;
                    padding:2px 90px 5px 10px;
					margin-top:60px;
					outline:2px solid red;
					border-radius: 25px;

               }
    
          
         .passwordDiv{

                     
                     margin: 25px 0px 0px 95px;
					 line-height:92%;
					 padding-top:10px;
					 padding-bottom:2px;

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
        
        



<div class="slider">
<br> <br>




<div class="midiv"> 
   <div class="passwordDiv">

   
       
    
     <form method="post" action="AddHospitalBackEnd.php">
        
                           <center> <b> <font size=8> Add hospital</font></b><br></center>
						   
						   <br> <br> <br>
						   
                              
                              
                             <b> <font size=5> Hospital Name </font></b><br><br>
                             <input type="text" placeholder="Enter the hospital name" name="HName" id="H_id" class="box"><br><br><br>
							 
							 <b> <font size=5> Type  </font></b>   <select name= "Type" class="select">
                             <option value="general">general</option>
                             
                             <option value="Teaching">Teaching </option>
                       
                             </select>
							 <br><br><br>
							   
							   <b> <font size=5> District </font></b><select id="district" name="district" class="select">
                             <option value="Hambantota">Hambantota</option>
                             
                             <option value="Matara">Matara</option>
							 <option value="Galle">Galle</option>
							 <option value="Anuradhapura">Anuradhapura</option>
							 <option value="kandy">kandy</option>
							 <option value="Nuwaraeliya">Nuwaraeliya</option>
							 
                             
                             </select>
							 <br><br><br>
                              

        
                             <b> <font size=5> Head of Hospital  </font></b><br><br>
                             <input type="text" placeholder="Entet the name of hospital head " name="headName" id="headID" class="box" " ><br><br><br>
        
                               
                             <b> <font size=5>Address </font></b><br><br>
                             <input type="text" placeholder="Enter the address" name="address" class="box" id="adddress" ><br><br><br>
        

                            <b><font size=5> Land Line number</font></b><br><br>
                            <input type="text" placeholder="Enter the contact number " name="number1"  class="box"  id="numb1" ><br><br><br>
							
							<b><font size=5> Contact number of hospital head</font></b><br><br>
                            <input type="text" placeholder="Enter the contact name" name="number2" id="numb2" class="box"><br><br><br>

                        

     
          </div>
		

   
  </div>
 
  <div  class="container">
  

     <button type="submit"  name="BtnSubmit" id="saveChanges" class="b1" ><b>Add</b></button>
	  
	   <button type="button"  name="btnCancel" id="Cancel" class="b2" ><b><a href="home.php"><font color="white">Cancel</font></a></b></button>
   
      </div>
      </form> 
  </div>



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