<?php
session_start();

unset($_SESSION["ID"]);
 session_destroy();
 //echo '<script type="text/javascript">';
		 //echo 'alert("login successfull");';
         
		 //echo 'window.location.href="FAQ.html";';
 //echo '</script>';
header("Location:../Guest/login/login.php");
?>