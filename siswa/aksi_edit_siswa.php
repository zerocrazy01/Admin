<?php
$id=$_POST['id'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

include("../koneksi.php");

$sql="update tbl_siswa set nama='$nama',
harga='$harga',
stok='$stok' where id='$id'";

$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_edit");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_edit");
	echo mysqli_error();
	echo "$sql";
}


