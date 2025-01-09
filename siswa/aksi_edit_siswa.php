<?php
include("../koneksi.php");

// Mendapatkan data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

// Periksa apakah semua data telah diterima
if (!empty($id) && !empty($nama) && !empty($harga) && !empty($stok)) {
    // Query UPDATE untuk mengubah data berdasarkan ID
    $sql = "UPDATE minuman SET nama='$nama', harga='$harga', stok='$stok' WHERE id='$id'";
    $query = mysqli_query($mysqli, $sql);

    if ($query) {
        // Redirect ke halaman tertentu jika berhasil
        header("Location: ../success.php?message=Data berhasil diperbarui");
        exit();
    } else {
        // Tampilkan error jika query gagal
        echo "Gagal memperbarui data: " . mysqli_error($mysqli);
    }
} else {
    echo "Semua field harus diisi.";
}
?>
