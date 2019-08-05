<?php
		$conn = new mysqli("localhost","root","", "database1");
		$nim= $_GET['nim'];
		$query = "select * from mahasiswa where nim = ".$nim;
		$data = $conn->query($query)->fetch_array();
		
	?>
<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="nama" value="<?= $data['nama']?>" placeholder="nama">
		<input type="text" name="prodi" placeholder="prodi" value="<?= $data['prodi']?>">
		<input type="text" name="fakultas" placeholder="fakultas" value="<?= $data['fakultas']?>">
		<input type="text" name="tgl_lahir" placeholder="tgl_lahir" value="<?= $data['tanggal_lahir']?>">
		<input type="submit" name="submit" value="kirim">
	</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$nama= $_POST['nama'];

		$prodi= $_POST['prodi'];
		$tgl_lahir= $_POST['tgl_lahir'];
		$fakultas = $_POST['fakultas'];
		$query = "Update mahasiswa set nama = '$nama',fakultas = '$fakultas',prodi = '$prodi',tanggal_lahir = '$tgl_lahir' where nim = '$nim'";
		$hasil = mysqli_query($conn,$query);

		if ($hasil) {
			?>
			<script type="text/javascript">
				alert('berhasil menambahkan data');
				window.location = "read.php";
			</script>
			<?php
		}
		else{
			echo "".mysqli_error($conn);
			?>
			<script type="text/javascript">
				alert('gagal menambahkan data');
				
			</script>
			<?php
		}
	}
?>