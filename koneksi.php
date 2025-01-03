<?php
$host = "localhost"; // Nama host
$user = "root";      // Username database
$pass = "";          // Password database
$db   = "web_login"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
