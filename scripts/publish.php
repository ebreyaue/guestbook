<?php
require_once '../scripts/dbconect.php';
$conn = db_connect();

$name = $_POST["name"];
$email = $_POST["email"];
$content = $_POST["content"];
// save information to the database

$sql = "INSERT INTO visitorbox (name,email,content)
VALUES('".$name."','".$email."','".$content."')";

mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:../index.php")
?>