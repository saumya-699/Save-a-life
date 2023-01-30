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
   
          .yu{
			  width:80px;
			  
			  
		  }
   
   
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
        
        



<div class="slider">
<br> <br>




<div class="midiv"> 
   <div class="passwordDiv">

   
       
    
     <form method="post" action="ReportGeneration.php">
        
                           <center> <b> <font size=8> Report Generation</font></b><br></center>
						   
						   <br> <br> <br><br> <br>
						   
                              
                            
							 <b> <font size=5> Report name </font></b>   <select name= "report" class="select">
                             <option value="Statistic">Statistic</option>
                             
                             <option value="Karapitiya Teaching Hospital">Karapitiya&nbsp;Teaching&nbsp;Hospital</option>
                             <option value="Galle_general_hospital" selected>Galle_general_hospital</option>
                             </select>
							 <br><br><br>
							   
							    
							 <b> <font size=5> Hospital name </font></b>   <select name= "HName" class="select">
                             <option value="Statistic">Statistic</option>
                             
                             <option value="Karapitiya Teaching Hospital">Karapitiya&nbsp;Teaching&nbsp;Hospital</option>
                             <option value="Galle_general_hospital" selected>Galle_general_hospital</option>
                             </select>
							 <br><br><br>
							 
							     
							 <b> <font size=5> Export method </font></b>   <select name= "HName" class="select">
                             <option value="Statistic">Statistic</option>
                             
                             <option value="Karapitiya Teaching Hospital">Karapitiya&nbsp;Teaching&nbsp;Hospital</option>
                             <option value="Galle_general_hospital" selected>Galle_general_hospital</option>
                             </select>
							 <br><br><br>
							 
							      <b> <font size=5> Time period </font></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                            
                             From<input type="date" placeholder="From" name="From" id="From" class="yu">&nbsp;&nbsp;
							      To<input type="date" placeholder="To" name="To" id="To" class="yu"><br><br><br>
        
                               
							   
							
                              

        
                            
          </div>
		

   
  </div>
 
  <div  class="container">
  

     <button type="submit"  name="BtnSubmit" id="saveChanges" class="b1" ><b>Generate</b></button>
	  
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