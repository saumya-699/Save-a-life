







<?php
session_start();
require 'conp.php';



if(isset($_POST["BtnSubmit"]))
	{
	
       $user_type =$_POST["user_type"];
        

       //$Password=$_POST["Password"];
            if($user_type == 'Director')
			
			{
			    echo '<script type="text/javascript">';
		      //echo 'alert("Added successfully");';
         
	         echo 'window.location.href="loginx.php";';
		      echo '</script>';
			
			
			}
			
			
			else if($user_type == 'Nurse')
			
			{
			     echo '<script type="text/javascript">';
		       //echo 'alert("Added successfully");';
         
	           echo 'window.location.href="Hiruni/login.php";';
		       echo '</script>';
			
			}
			
			
			
			else if($user_type =='ward doctor')
			
			{
			
			        echo '<script type="text/javascript">';
		           //echo 'alert("Added successfully");';
          
	              echo 'window.location.href="bbms/login.php";';
		           echo '</script>';
			
			
			}
			
			
			else
			
			{
			
			         echo '<script type="text/javascript">';
		          //echo 'alert("Added successfully");';
         
	             echo 'window.location.href="nbts/login/login.php";';
		         echo '</script>';
			}
  
         

     
		
		
		
	}	

  $conn->close();

   
 ?>   
