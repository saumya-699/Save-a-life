
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



          

    


                     
                

          .log{
                     margin-left:70px;
                     margin-top:10px;
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
   
        
       
                     <form method="post" action="loginxBackEnd.php">
                  
         
                        <b> <label class="lb"><font size=6><font color= #ff0000>User name</font></font><label></b><br>
                             <input type="text" placeholder="Enter NIC number" name="NIC" class="validation" id="User ID" required><br>
							 
                      

                       <b><label class="lb"><font size=6><font color="green">Password</font></font><label></b><br>
                            <input type="password" placeholder="Enter the password" name="Password"  class="validation"  id="password"  required>
                              
     
         

<button type="submit" name="BtnSubmit" class="log" id="LoginBtn"> <font size=5><font color="white"><b>Login</b></font></font></button><br>
   
 
     
     <!-- <input type="checkbox" checked="checked" name="remember" class="checkBox" id="checkBOX"><font color=#80ccff><font size=4>Remember</font> </font><br>-->

   

           <font size=4> <button type="button"  name="cancelBtn" id="cancelID" class="can" ><a href="home.php"> cancel</a></button>
		   
		    <font size=4> <button type="button"  name="forgetPassword" id="forgetPassword" class="fg" ><a href="DirectorSignUp.php"> sign up</a></button>
           
        </form>  
     
      </div>
   
    </body>
</html>