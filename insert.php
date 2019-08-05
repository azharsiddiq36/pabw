<?php
$conn = new mysqli("localhost","root","kambing123", "testnvc");
	?>
<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="nama" placeholder="nama">
		<input type="text" name="prodi" placeholder="prodi">
		<input type="text" name="fakultas" placeholder="fakultas">
		<input type="text" name="tgl_lahir" placeholder="tgl_lahir">
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
		$query = "insert into mahasiswa (nama,prodi,fakultas,tanggal_lahir) VALUES ('$nama','$prodi','$fakultas','$tgl_lahir')";
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