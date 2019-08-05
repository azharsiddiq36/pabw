<?php
	$conn = new mysqli("localhost","root","", "database1");

		$nim= $_GET['nim'];
		$query = "delete from mahasiswa where nim = ".$nim;
		$hasil = mysqli_query($conn,$query);
		if ($hasil) {
			?>
			<script type="text/javascript">
				alert('berhasil Menghapus data');
				window.location = "read.php";
			</script>
		<?php
	}
?>