<?php
include("../koneksi.php");
$sql="delete from minuman where id='$_GET[id]'";
$query=mysqli_query($mysqli,$sql);
if ($query) {
	header("location:../index.php?hal=siswa&pesan=berhasil_hapus");
}else{
	header("location:../index.php?hal=siswa&pesan=gagal_hapus");
	echo mysqli_eror();
	echo "$sql";
}
?>