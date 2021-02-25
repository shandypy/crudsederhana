<?php
	include "koneksi.php";

	if($_GET){
	$kode= isset($_GET['kode']) ?  $_GET['kode'] : '';
	$lihat = "DELETE FROM mhs where id = '$kode'";
	mysqli_query($koneksi, $lihat);
	header("location:index.php");
		
	}
?>