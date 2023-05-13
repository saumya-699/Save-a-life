
<?php 
session_start();

?>

<?php

//make connection here
require 'conp.php'; 
$m = $_SESSION["Name"];
$query = "SELECT * FROM nurse WHERE UserName ='$m'";
$result1 = $conn->query($query);

if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $y = $row["Hospital_ID"];
    }
  
  }


if(isset($_POST['BtnSubmit']))
{
    $date=date("Y/m/d");
    $Prefix=$_POST["prefix"];
    $Fullname=$_POST["fullname"];
	$Initial=$_POST["Initials"];
	$NIC=$_POST["NIC"];
	$DOB=$_POST["DOB"];
	$Email=$_POST["email"];
	$Gender=$_POST["gender"];
	$Address= $_POST["address"];
	$province= $_POST["province"];
	$postal= $_POST["postal"];
	$mobile_number=$_POST["mobile"];
	$land_number=$_POST["land"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$Hospital_ID=$y;
    
   
    
    
    //database connection

        $sql = "INSERT INTO donors (Prefix,Full_Name,Initials,NIC_Number,DOB,Email,Gender,Address,province,postal,mobile_number,land_number,username,password,date,Hospital_ID)
VALUES ('$Prefix','$Fullname','$Initial','$NIC','$DOB','$Email','$Gender','$Address','$province','$postal','$mobile_number','$land_number','$username','$password','$date','$Hospital_ID')";

if($conn->query($sql)) {
	//echo '<script type="text/javascript">';
	//echo 'alert("Registration is successfully");';
	//echo 'window.location.href="reg.php";';
	//echo '</script>';

	// Send email to donor with login credentials
	
	$to = $Email;
	$subject = "Donor Login Credentials";
	$message = "Hello $Fullname,\n\nYour login credentials are:\nEmail: $Email\nPassword: $password\n\nPlease login using this information to complete your registration.\n\nThank you!";
	$headers = "From: sahhansini@gmail.com";

	if (mail($to, $subject, $message, $headers)) {
		echo "Email sent successfully!";
		header("Location:reg.php");
		exit();
	} else {
		echo "Email sending failed.";
	}
  
} else {
	echo '<script type="text/javascript">';
	echo "Error in ".$sql."<br>".$conn->error;
	echo 'alert("Error in entering try again!");';
	echo 'window.location.href="reg.php";';
	echo '</script>';
}

$conn->close();
}
?>



