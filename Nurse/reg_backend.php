<?php 
session_start();

// make connection here
require 'conp.php';
if (isset($_POST['BtnSubmit'])) {

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
    

    $date = date("Y/m/d");
    $Prefix = $_POST["prefix"];
    $Fullname = $_POST["fullname"];
    $Initial = $_POST["Initials"];
    $NIC = $_POST["NIC"];
    $DOB = $_POST["DOB"];
    $Email = $_POST["email"];
    $Gender = $_POST["gender"];
    $Address = $_POST["address"];
    $province = $_POST["province"];
    $postal = $_POST["postal"];
    $mobile_number = $_POST["mobile"];
    $land_number = $_POST["land"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $Hospital_ID = $y;
    $Type = 6;
    $Nurse_ID= $x;

    // insert the user into the database.
    $jql = "INSERT INTO system_users(User_ID, UserName, Password, Type) VALUES('', '$username', '$password', 6)";
    if ($conn->query($jql)) {
        $sql = "INSERT INTO donors (Prefix, Full_Name, Initials, NIC_Number, DOB, Email, Gender, Address, province, postal, mobile_number, land_number, username, password, date, Hospital_ID, Remark,Nurse_ID) 
                VALUES ('$Prefix', '$Fullname', '$Initial', '$NIC', '$DOB', '$Email', '$Gender', '$Address', '$province', '$postal', '$mobile_number', '$land_number', '$username', '$password', '$date', '$Hospital_ID', 'Added','$Nurse_ID')";
        if ($conn->query($sql)) {
            echo '<script type="text/javascript">';
            echo 'alert("Registration is successful");';
            echo 'window.location.href="reg.php";';
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo "Error in " . $sql . "<br>" . $conn->error;
            echo 'alert("Error in entering try again!");';
            echo 'window.location.href="reg.php";';
            echo '</script>';
        }
    }

    $conn->close();
}
?>
