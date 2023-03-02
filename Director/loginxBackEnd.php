







<?php
session_start();
require 'conp.php';



if(isset($_POST["BtnSubmit"]))
	{
	
       $NIC =$_POST["NIC"];
        

       $Password=$_POST["Password"];

  
      $sql= "select * from director where NIC='$NIC' and Password='$Password'";
	  
        $result= $conn->query($sql);

       if($result->num_rows >0) 

       {
              
           
		    while($row = $result->fetch_assoc())
                 { 

		     $Name = $row['Name_With_Initials'];
                      $_SESSION["Name"] = $Name; 
                     $ID = $row['Director_ID']; 
	            $_SESSION["ID"] = $ID; 
		
		 
             }
			 
		
		if(isset($_SESSION["ID"]))
			{

     
        header("Location:HomepageDirector.php");
				 //printf("Query failed: %s\n", $conn->error);

    }	 
		  
	    }


        else

        {

                
		   echo '<script type="text/javascript">';
		   //echo "Error in ".$sql."<br>".$conn->error;
		
		echo 'alert("Invalid login!");';
                  echo 'window.location.href="loginx.php";';  
		 echo '</script>';
		  

        }
		
		
		
		
	}	

  $conn->close();

   
 ?>   
