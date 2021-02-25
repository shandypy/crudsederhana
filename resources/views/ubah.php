<?php
	include "koneksi.php";
?>
<?php
	if(isset($_POST['ubah'])){
		$id 		= $_POST['id'];
		$nama 		= $_POST['nama'];
		$kelas 		= $_POST['kelas'];
		$jurusan 	= $_POST['jurusan'];

		mysqli_query($koneksi,"UPDATE mhs SET nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id = '$id'");
		header("location:index.php");
	}else{
		header("location:index.php");
	}
?>