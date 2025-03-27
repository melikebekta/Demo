<?php 
$server_name = "localhost";
$mail = "root";
$password = "";
$db_name = "tablo";

$conn = new mysqli($server_name, $mail, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>