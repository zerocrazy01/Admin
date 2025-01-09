<?php
$host = "localhost";
$user = "root";
$pass = ""; // Kosongkan password jika default
$db = "db_estetico";

$mysqli = new mysqli($host, $user, $pass, $db);

// Periksa apakah koneksi berhasil
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
?>
