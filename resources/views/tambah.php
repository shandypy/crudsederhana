<?php
	include "koneksi.php";
?>
<?php
	if(isset($_POST['kirim'])){
		$nama 		= $_POST['nama'];
		$kelas 		= $_POST['kelas'];
		$jurusan 	= $_POST['jurusan'];

		if ($nama == "" or $kelas == "" or $jurusan == "") {
			echo "data tidak boleh ada yang kosong";
		}else{
			mysqli_query($koneksi,"INSERT INTO mhs (id,nama,kelas,jurusan) VALUES ('','$nama','$kelas','$jurusan')");
			header("location:index.php");
		}
	}else{
?>
<form  action="" method="POST">
	<table>
		<tr>
			<td> Nama </td>
			<td><input type="text" name="nama"> </td>
		</tr>
		<tr>
			<td> Kelas </td>
			<td><input type="text" name="kelas"> </td>
		</tr>
		<tr>
			<td> Jurusan </td>
			<td><input type="text" name="jurusan"> </td>
		</tr>
		<tr>
			<td colspan="2" align="right"> <input type="submit" name="kirim" value="Kirim data baru"> </td>
		</tr>
	</table>
</form>
<?php } ?>