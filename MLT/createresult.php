<?php

session_start();
include "config.php";

if (isset($_SESSION["ID"])) {
  include "config.php";
  $m = $_SESSION["Name"];
  $query = "SELECT * FROM mlt WHERE UserName ='$m'";
  $result1 = $conn->query($query);

  if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
      $x = $row["MLT_ID"];
    }
  }
}

$vql = "select * from mlt where MLT_ID='$x'";

$resultr = $conn->query($vql);

//  echo "Error in ".$vql."<br>".$conn->error;
if ($resultr->num_rows > 0) {

  while ($rowx = $resultr->fetch_assoc()) {
    $y = $rowx["Hospital_ID"];
  }
}

if (isset($_POST['submit'])) {

  $Donor_Id = $_POST['Donor_Id'];

  $blood_group = $_POST['blood_group'];

  $malaria_result = $_POST['malaria_result'];

  $hiv_result = $_POST['hiv_result'];

  $hbv_result = $_POST['hbv_result'];

  $hcv_result = $_POST['hcv_result'];

  $vdrl_result = $_POST['vdrl_result'];

  $batch_number = $_POST['batch_number'];

  $process_date = date("Y/m/d");

  $status = ("Pending");


  $sql = "INSERT INTO blood_testing_result (Donor_Id, blood_group, malaria_result, hiv_result, hbv_result,hcv_result,vdrl_result,batch_number,process_date,status,MLT_ID,Hospital_ID) VALUES ('$Donor_Id','$blood_group','$malaria_result', '$hiv_result','$hbv_result','$hcv_result','$vdrl_result','$batch_number','$process_date','$status','$x','$y')";

  $result = $conn->query($sql);

  if ($result == TRUE) {
    echo '<script type="text/javascript">';
    echo 'alert("Added Successfully");';
    echo 'window.location.href="Enter Blood testing result.php";';
    echo'</script>'; 
    } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
  $updateSql= "UPDATE donation_records SET AddStatus	='1',MLT_ID='$x' WHERE Donor_ID=  $Donor_Id";
  $updateresult = $conn->query($updateSql);

  $update= "UPDATE donors SET blood_group	='$blood_group' WHERE Donor_ID= $Donor_Id";
  $updateresult = $conn->query($update);
  $conn->close();
}

if (isset($_POST['cancel'])) {
  header('location:Enter Blood testing result.php');
}

 /* 
echo $patient_gender;
echo $blood_group;
echo $blood_component ;
echo "sucess:";
*/
