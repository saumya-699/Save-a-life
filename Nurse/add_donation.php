<?php 
session_start();

?>


 <?php
   if(isset($_SESSION["ID"]))   {
	
    require "conp.php";
    
     			
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Side bar</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css'>
<link rel='stylesheet' href='https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script><link rel="stylesheet" href="./password.css">


</head>
<body>
<!-- partial:index.partial.html -->
<?php
require 'conp.php';

// Check if the form is submitted
if (isset($_POST['BtnSubmit'])) {
    // Get the entered donor ID from the form
    $donorId = $_POST['Donor_Id'];

    // Query to check if the donor ID exists in the registered donors table
    $sql = "SELECT * FROM donors WHERE Donor_Id = '$donorId'";
    $result = $conn->query($sql);

    // Check if the donor ID is registered
    if ($result->num_rows > 0) {
        // Donor ID is registered, continue with form submission
        // Add your code here to process the form data and insert into the database
        // Redirect to a success page or display a success message
        echo "Donor ID is registered. Proceed with form submission.";
    } else {
        // Donor ID is not registered
        // Display an error message and prevent form submission
        echo "Error: Donor ID is not registered. Please enter a valid donor ID.";
        exit(); // Stop further execution
    }
}
?>

<div class="container-shadow"></div>
<div class="container">
  <div class="wrap">
    <div class="headings">
      <center><span><h1>Add Donation Details</h1></span></center>
    </div>
    
    <form method="post" action="add_donation_backend.php">
      <label for="exampleFormControlInput1" class="form-label lbl star">Donor ID</label>
      <input type="text" name="Donor_Id" class="form-control txt-input" placeholder="Type Donor ID" required>

      <label for="exampleFormControlInput1" class="form-label lbl star">Blood Packet Number</label>
      <input type="text" name="Packet_Id" class="form-control txt-input" placeholder="Blood Packet Number" required>

      <label for="exampleFormControlInput1" class="form-label lbl star">Nurse ID</label>
      <input type="text" class="form-control txt-input" placeholder="Nurse ID" name="Nurse_ID" required>

      <br><br><br><br>

      <div class='row btn-buttons'>
        <input type='submit' name='BtnSubmit' value='Add' class='b1'>
        <input type='submit' name='btnCancel' value='Cancel' class='b2' onclick='history.back()'>
      </div>
    </form>
  </div>
</div>

</main>
</div>
</div>
<!-- partial -->
<script src='https://unpkg.com/@popperjs/core@2'></script><script  src="./script.js"></script>

</body>
</html>

<?php
$conn->close();
?>
<?php
}
?>