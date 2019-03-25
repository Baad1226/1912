<?php
//Adatbázis
$servername = "127.0.0.1";
$username = "1912elore";
$password = "1912elore";
$dbname = "1912elore";
// Csatlakozás
$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) {
    die("Sikertelen csatlakozás: " . $connect->connect_error);
}
?>