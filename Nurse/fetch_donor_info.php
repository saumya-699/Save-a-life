<?php 
session_start();

?>

<?php

//make connection here
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


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the NIC number from the query parameter
$nic = $_GET["nic"];

// Fetch the donor info from the database
$sql = "SELECT Donor_Id, Full_Name FROM donors WHERE NIC_Number='$nic' and Hospital_ID='$y'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Return the donor info as a JSON object
    $row = $result->fetch_assoc();
    $response = array(
        "donorid" => $row["Donor_Id"],
        "dname" => $row["Full_Name"]
    );
    echo json_encode($response);
} else {
    // Return an error message as a JSON object
    $response = array("error" => "Donor not found");
    echo json_encode($response);
}

// Close the database connection
$conn->close();

/*if (!$result) {
    // Return an error message as a JSON object
    $response = array("error" => mysqli_error($conn));
    echo json_encode($response);
} else if ($result->num_rows > 0) {
    // Return the donor info as a JSON object
    $row = $result->fetch_assoc();
    $response = array(
        "donorid" => $row["Donor_Id"],
        "dname" => $row["Full_Name"]
    );
    echo json_encode($response);
} else {
    // Return an error message as a JSON object
    $response = array("error" => "Donor not found");
    echo json_encode($response);
}

// Close the database connection
$conn->close();
?>*/






