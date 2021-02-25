<?php
	include "koneksi.php";
?>
			<form method="POST" action="ubah.php">
<?php
	if($_GET){
	$kode= isset($_GET['kode']) ?  $_GET['kode'] : '';
	$lihat = "SELECT * FROM mhs where id = '$kode'";
	$data = mysqli_query($koneksi, $lihat);
		while($tampil = mysqli_fetch_array($data)){?>

			<input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">	
			Nama Mahasiswa : <input type="text" name="nama" value="<?php echo $tampil['nama']; ?>"><br>
			Kelas Mahasiswa : <input type="text" name="kelas" value="<?php echo $tampil['kelas']; ?>"><br>
			jurusan Mahasiswa : <input type="text" name="jurusan" value="<?php echo $tampil['jurusan']; ?>"><br>
			
<?php
		}
?>
			<input type="submit" name="ubah" value="ubah data"> 
		</form>
			<a href="index.php">
				<input type="submit" name="batal" value="Batal mengubah data">
			<a/>
<?php		
	}
?>