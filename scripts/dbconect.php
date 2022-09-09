<?php

function db_connect()
{
$server ="localhost";
$database="visitorbox";
$username="root";
$password="";
$conn = mysqli_connect($server, $username, $password, $database);
return $conn;
}

?>