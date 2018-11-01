<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM daftar_tabel WHERE id='$id'");
	header("location:main.php");
 ?>