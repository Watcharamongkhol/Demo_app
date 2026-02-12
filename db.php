<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "kidney_db";

$conn = new mysqli($host,$user,$pass,$dbname);

if($conn->connect_error){
    die("เชื่อมต่อฐานข้อมูลล้มเหลว");
}
?>
