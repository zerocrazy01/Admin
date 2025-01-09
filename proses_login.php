<?php
session_start();
require 'koneksi.php'; // Pastikan file koneksi.php tersedia dan benar

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pastikan input username dan password ada
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Menggunakan prepared statement untuk keamanan
        $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verifikasi password menggunakan fungsi password_verify
            if (password_verify($password, $user['password'])) {
                // Set session untuk pengguna yang berhasil login
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $user['username'];

                // Redirect ke halaman index.php
                header("Location: index.php");
                exit;
            } else {
                // Jika password salah
                echo "<script>alert('Password salah!'); window.location='login.php';</script>";
            }
        } else {
            // Jika username tidak ditemukan
            echo "<script>alert('Username tidak ditemukan!'); window.location='login.php';</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Username dan password harus diisi!'); window.location='login.php';</script>";
    }
} else {
    // Redirect jika akses langsung tanpa menggunakan form login
    header("Location: login.php");
    exit;
}
?>
