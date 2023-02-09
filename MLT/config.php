<?php
$host="localhost";
$user="root";
$password="";
$db_name="database";
$conn = new mysqli($host,$user,$password,$db_name);

if (!$conn) {
    echo "connection failed";
}
  

?>