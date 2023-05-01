
<?php 
session_start();

?>
<?php

      require 'conection.php';
	  
    if(isset($_POST["BtnSubmit"]))
		
	{    
	  

	$Prefix=$_POST["prefix"];
    $Fullname=$_POST["fullname"];
	$Initial=$_POST["Initials"];
	$DOB=$_POST["DOB"];
	$Email=$_POST["email"];
	$Address= $_POST["address"];
	$province= $_POST["province"];
	$postal= $_POST["postal"];
	$mobile_number=$_POST["mobile"];
	$land_number=$_POST["land"];
	$x= $_SESSION["ID"];
	  
	  
                  // sql to update a record
                   
					$sql = "update donors set Prefix='$Prefix' , Full_Name='$Fullname', Initials='$Initial', DOB='$DOB',Email='$Email',Address='$Address',province='$province',postal='$postal',mobile_number='$mobile_number',land_number='$land_number' Nurse_ID='$x' WHERE Donor_Id='$Donor_Id'";
                   if ($conn->query($sql) === TRUE) 
				   {
                          
                           echo '<script type="text/javascript">';
		                  echo 'alert("Details updated successfully");';
         
		               echo 'window.location.href="View_Personal.php";';
		                  echo '</script>';

                   } 
					 
					 else 
			               {  
					          echo "Error in ".$sql."<br>".$conn->error;
                              echo '<script type="text/javascript">';
		                      echo 'alert("Error in updating details.Try again!");';
         
		                      echo 'window.location.href="View_Personal.php";';
		                      echo '</script>';

                            }

			
	 
	

		
       
		
	//echo "Error in ".$sql."<br>".$conn->error;
    }	
			
  $conn->close();
?>