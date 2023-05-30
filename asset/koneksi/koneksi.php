<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "rakitpece";

$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connect) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}
?>