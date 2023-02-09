
<?php 
session_start();
include 'gj.php';


?>


<html>
    <head>

        
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css">


    </head>
   <style>
  
           .midiv{

                    background-color:#2F4858;
                     opacity:0.776;
                     margin-top:105px;
                    margin-left:580px;
                     margin-right:420px;
                     margin-bottom:10px;
                    padding:5px 100px 34px 50px;
					outline:2px solid red;
					border-radius: 25px;

               }


                 

                 
               
       .validation{ 
                    margin-bottom:25px;
                    padding:10px 100px 20px 20px;
                    margin-left:70px;
                    font-size:15px;
                     
           
               }



          .select{
	
	 float:right;
	 margin-right:0px;
	
	        
      }

    


                     
                

          .log{
                     margin-left:70px;
                     margin-top:60px;
                     margin-bottom:4px;
                     padding:10px 122px 10px 122px;
                     font-size:23px;
					 cursor: pointer;
					 background-color:#F3506D;
					 
                     
                     
            }
        

    
         
       
   .sin{
          clip-path: circle(40%);
          margin-bottom:3px;
          margin-left:75px;
 
   }

  
     .lb{        
                margin-left:67px;
                margin-top:10px;

             
        }
        

    

             
          .can{
                   margin-left:70px;
                    margin-top:25px;
					
                
   
            }
           
		         
          .fg{
                   margin-left:100px;
				   
                    margin-top:25px;
					background-color:transparent;
                    border:none;
                      
            }


          .checkBox{


                      margin-left:56px;
 

              }

         .admin{

                   margin-left:50px; 
                  margin-right:20px;
             }

               


  



.sign{
  
                 background-color: black;
                 margin-bottom:-2000px;
                   

  
    }
  
   .sign1{
  
          background-color: green;

  
        }
  
  
  
  body {
         
		 font-family:Open Sans, sans-serif;
       }
  
  
a {text-decoration: none;}
     </style>
  










    <body>
       

       <div class="midiv">    
       
 &nbsp; <img src="ashi.png" class="sin">
   
        
       
                     <form method="post" action="firstbackEnd.php">
                      <br><br>
         
                       <font size=5>  User type </font></b><select id='user_type' name='user_type' class='select' required>
                             <option value='Director'><a href="loginx.php">Director</a></option>
                             
                             <option value='Nurse'><a href="loginx.php">Nurse</a></option>
							 <option value='ward doctor'><a href="loginx.php">ward doctor</a></option>
							 <option value='donor'><a href="loginx.php">donor</a></option>
							 
                             
                             </select>
                      

                       
     
         

<button type="submit" name="BtnSubmit" class="log" id="LoginBtn"> <font size=5><font color="white"><b>Submit</b></font></font></button><br>
   
 
     
     <!-- <input type="checkbox" checked="checked" name="remember" class="checkBox" id="checkBOX"><font color=#80ccff><font size=4>Remember</font> </font><br>-->

   

          
		    
        </form>  
     
      </div>
   
    </body>
</html>