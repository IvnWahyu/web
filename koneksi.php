<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "moonlight";

//buat koneksi
$conn = mysqli_connect($serverName, $userName, $password, $dbname);

//cek koneksi
if(!$conn) {
    die("Koneksi gagal");
}
?>