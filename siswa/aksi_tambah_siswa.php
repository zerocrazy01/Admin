<?php
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];


include("../koneksi.php");

$sql="insert into minuman(nama,harga,stok) values('$nama',
'$harga',
'$stok')";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_tambah");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_tambah");
	echo mysqli_error();
	echo "$sql";
}


