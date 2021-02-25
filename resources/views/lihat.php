<?php
	include "koneksi.php";

	if($_GET){
	$kode= isset($_GET['kode']) ?  $_GET['kode'] : '';
	$lihat = "SELECT * FROM mhs where id = '$kode'";
	$data = mysqli_query($koneksi, $lihat);
		while($tampil = mysqli_fetch_array($data)){?>

			Nama Mahasiswa : <?php echo $tampil['nama']; ?><br>
			Kelas Mahasiswa : <?php echo $tampil['kelas']; ?><br>
			jurusan Mahasiswa : <?php echo $tampil['jurusan']; ?><br>
			<a href="index.php"><input type="submit" name="batal" value="batal"><a/>
<?php
		}
	}
?>