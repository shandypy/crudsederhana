<?php
	include "koneksi.php";
?>
<?php
	if(isset($_GET['mencari'])){
		$nama	= $_GET['nama'];

					echo "<h3> DATA YANG ANDA CARI </h3> <hr>";
			$data = mysqli_query($koneksi, "SELECT * FROM mhs WHERE nama LIKE '%$nama%'");
			while($tampil = mysqli_fetch_array($data)){ ?>

				nama anda : <?php echo $tampil['nama']; ?><br>
				kelas anda : <?php echo $tampil['kelas']; ?><br>
				jurusan anda : <?php echo $tampil['jurusan']; ?><br>
				<hr>
<?php
			}		
	}
?>