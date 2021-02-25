<?php
	include "koneksi.php";
?>
<center>
	<form action="cari.php" method="GET">
	<font size="4"> Cari data </font>
	<input type="text" name="nama" placeholder="cari bedasarkan nama">
	<input type="submit" name="mencari" value="cari data"><p>
	</form>
	<table border="1">
		<tr>
	<th> id </th>
	<th> nama </th>
	<th> kelas </th>
	<th> jurusan </th>
	<th colspan="3"> PENGATURAN </th>
		</tr>
		<?php
			$data = mysqli_query($koneksi, "select * from mhs");
			while($tampil = mysqli_fetch_array($data)){
		?>
			<tr>
				<td><?php echo $tampil['id']; ?></td>
				<td><?php echo $tampil['nama']; ?></td>
				<td><?php echo $tampil['kelas']; ?></td>
				<td><?php echo $tampil['jurusan']; ?></td>
				<td><a href="lihat.php?kode=<?php echo $tampil['id']; ?>">LIHAT DATA </a></td>
				<td><a href="edit.php?kode=<?php echo $tampil['id']; ?>">EDIT DATA </td>
				<td><a href="hapus.php?kode=<?php echo $tampil['id']; ?>">HAPUS DATA </td>
			</tr>
		<?php } ?>
	</table>
	<p>
	<a href="tambah.php"><input type="button" value="TAMBAH DATA"></a>
</center>
