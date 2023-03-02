
<?php 

session_start();

if (isset($_SESSION['ward_doctor_id']) && isset($_SESSION['user_id'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>
    <link rel="stylesheet" href="Stylet.css">

</head>
<body>

     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>

     <a href="logout.php">Logout</a>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>