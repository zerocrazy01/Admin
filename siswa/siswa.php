<?php
include_once "koneksi.php";

// Periksa apakah koneksi berhasil
if (!$mysqli) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

// Jalankan query untuk mengambil data dari tabel 'minuman'
$query = "SELECT * FROM minuman";
$hasil = $mysqli->query($query);

// Periksa apakah query berhasil
if (!$hasil) {
    die("Query gagal: " . $mysqli->error);
}

// Inisialisasi nomor urut
$no = 1;

// Iterasi melalui hasil query dan tampilkan data
while ($row = $hasil->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8') . "</td>";
    echo "<td>" . htmlspecialchars($row['harga'], ENT_QUOTES, 'UTF-8') . "</td>";
    echo "<td>" . htmlspecialchars($row['stok'], ENT_QUOTES, 'UTF-8') . "</td>";
    echo "<td>";
    echo "<a href='index.php?hal=edit_siswa&id=" . htmlspecialchars($row['Id'], ENT_QUOTES, 'UTF-8') . "'>";
    echo "<button type='button' class='btn btn-warning'><i class='fa fa-pencil'></i> Edit</button>";
    echo "</a> ";
    echo "<a onclick='return confirm(\"Anda Yakin...?\")' href='siswa/hapus_siswa.php?id=" . htmlspecialchars($row['Id'], ENT_QUOTES, 'UTF-8') . "'>";
    echo "<button type='button' class='btn btn-danger'><i class='fa fa-trash'></i> Hapus</button>";
    echo "</a>";
    echo "</td>";
    echo "</tr>";
}

// Tutup hasil query
$hasil->free();

// Tutup koneksi database
$mysqli->close();
?>
