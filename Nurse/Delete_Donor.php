<?php



require 'conp.php';

$m= $_SESSION["Name"];
    $query = "select * from nurse where UserName ='$m'";
    
    
           
    $resultd = $conn->query($query);
    
    //echo "Error in ".$vql."<br>".$conn->error;
    $x=null;
    if($resultd->num_rows>0)
    
    {        
    
    while($row = $resultd->fetch_assoc())
    
    {
    
    
    
    
    $x= $row["Nurse_ID"];
    
    
    
    
    
    }
    
    
    }
 $vql ="select * from nurse where Nurse_ID ='$x'";
$resultx = $conn->query($vql);
$y=null;
 while($row = $resultx->fetch_assoc())
   
   {     
     
	  $y=$row["Hospital_ID"];
   
	 
	  
	  
	}
require 'conp.php';

if (isset($_POST['Donor_Id'])) {
    $donor_id = $_POST['Donor_Id'];
    $sql = "DELETE FROM pre_medical WHERE Donor_Id = $donor_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: View_med.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>