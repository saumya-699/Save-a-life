<?php
$host="localhost";
$user="root";
$password="";
$db_name="database";

$con=mysqli_connect($host,$user,$password,$db_name);

if(!$con)
{
    echo "connection failed";
}


?>