








<?php
session_start();
require 'conp.php';



if(isset($_POST["BtnSubmit"]))
	{
	
       $UserName =$_POST["UserName"];
        

       $Password=$_POST["Password"];

  
      $sql= "select * from system_users where UserName='$UserName' and Password='$Password'";
	  
        $result= $conn->query($sql);

       if($result->num_rows >0) 

       {
              
           
		    while($row = $result->fetch_assoc())
                 { 

		         $Name = $row['UserName'];
                      $_SESSION["Name"] = $Name; 
                     $ID = $row['User_ID']; 
	               $_SESSION["ID"] = $ID; 
				   $_SESSION["Type"] =$row['Type'];
		
		 
             }
			 
		
		if(isset($_SESSION["ID"]))
			{

                  if( $_SESSION["Type"]   == '1')
				  {
                 header("Location:BloodBankDoctor/Home.php");
				 //printf("Query failed: %s\n", $conn->error);
				  }
				 
				 
				  else if($_SESSION["Type"]   == '2'){
					header("Location:MLT/seeMLT.php");
				}
				 else if($_SESSION["Type"]   == '3'){
					header("Location:ward_doctor/see.php");}
			 
			   else if($_SESSION["Type"]   == '4'){
			   header("Location:Nurse/Home.php");}
			 
			 else if($_SESSION["Type"]   == '5'){
			 header("Location:Director/Home.php");}
			 
			 else {
			 header("Location:Guestx/donar/doner_Information.php");}
			 
			 
    }	 
		  
	    }


        else

        {

                
		  echo "Error in ".$sql."<br>".$conn->error;

        }
		
		
		
		
	}	

  $conn->close();

   
 ?>   
