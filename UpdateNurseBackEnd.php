
<?php 
session_start();

?>
<?php

      require 'conp.php';
	  
    if(isset($_POST["BtnSubmit"]))
		
	{    
	    
	  $Nurse_ID=$_POST["Nurse_ID"];
	  $Name=$_POST["Name"];
      $HName=$_POST["hospital"];
     $position=$_POST["position"];
	 $SLMC=$_POST["SLMC"];
	 $Email=$_POST["Email"];
	  $contactNumber=$_POST["contactNumber"];
	 $Uname=$_POST["Uname"];
	 $password=$_POST["password"];
	 $x= $_SESSION["ID"];

                  // sql to update a record
                   $sql = "update nurse set Name_With_Initials='$Name',HospitalName='$HName',Position ='$position', SLMC_Number='$SLMC',Email='$Email', ContactNumber='$contactNumber',UserName='$Uname',Remark='updated',Director_ID='$x' WHERE Nurse_ID='$Nurse_ID'";

                   if ($conn->query($sql) === TRUE) 
				   {
                          
                           echo '<script type="text/javascript">';
		                  echo 'alert("Details updated successfully");';
         
		               echo 'window.location.href="RemoveOrUpdateNurse.php";';
		                  echo '</script>';

                   } 
					 
					 else 
			               {  
					          echo "Error in ".$sql."<br>".$conn->error;
                              echo '<script type="text/javascript">';
		                      echo 'alert("Error in updating details.Try again!");';
         
		                      //echo 'window.location.href="updateAccount.php";';
		                      echo '</script>';

                            }

			
	 
	

		
       
		
	//echo "Error in ".$sql."<br>".$conn->error;
    }	
			
  $conn->close();
?>