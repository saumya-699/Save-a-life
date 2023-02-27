<?php
$conn = new mysqli ("localhost" , "root" , "", "ci");
    if($conn->connect_error)
    {
        die('Connection failed :'.$conn->connect_error);  
    }

   
   ?>

