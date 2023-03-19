








<?php
session_start();
require 'conp.php';



if(isset($_POST["BtnSubmit"]))
	{
	
       $BloodBank_doctor_ID =$_POST["BloodBank_doctor_ID"];
        

       $Password=$_POST["Password"];

  
      $sql= "select * from bloodbank_doctor where BloodBank_doctor_ID='$BloodBank_doctor_ID' and Password='$Password'";
	  
        $result= $conn->query($sql);

       if($result->num_rows >0) 

       {
              
           
		    while($row = $result->fetch_assoc())
                 { 

		     $Name = $row['Name_With_Initials'];
                      $_SESSION["Name"] = $Name; 
                     $ID = $row['BloodBank_doctor_ID']; 
	            $_SESSION["ID"] = $ID; 
		
		 
             }
			 
		
		if(isset($_SESSION["ID"]))
			{

     
        header("Location:stockI.php");
				 //printf("Query failed: %s\n", $conn->error);

    }	 
		  
	    }


        else

        {

                
		  echo "Error in ".$sql."<br>".$conn->error;

        }
		
		
		
		
	}	

  $conn->close();

   
 ?>   
