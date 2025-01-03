<?php
session_start();
include 'koneksi.php'; // Sambungkan ke database

// Ambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi input
if (empty($email) || empty($password)) {
    echo "<script>alert('Email dan password harus diisi!');window.location='login.php';</script>";
    exit;
}

// Menggunakan Prepared Statement untuk keamanan
$query = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Verifikasi password (asumsi password di database menggunakan password_hash())
    if (password_verify($password, $row['password'])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        header("Location: index.php"); // Redirect ke halaman utama
        exit;
    } else {
        echo "<script>alert('Password salah!');window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Email tidak ditemukan!');window.location='login.php';</script>";
}

$stmt->close();
$conn->close();
?>
