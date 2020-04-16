<?php
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$id_buku		= $_POST['id_buku'];
	$judul 		 = $_POST['judul'];
	$penerbit 	 = $_POST['penerbit'];
	$pengarang 	 = $_POST['pengarang'];
	$ringkasan 	 = $_POST['ringkasan'];
	$cover 		 = $_POST['cover'];
	$stok 		 = $_POST['stok'];
	$id_kategori = $_POST['id_kategori'];

	$sql = "INSERT INTO buku(judul, penerbit, pengarang, ringkasan, cover, stok, id_kategori)
	VALUES ('$judul', '$penerbit', '$pengarang', '$ringkasan', '$cover', '$stok', '$id_kategori')";

	$res = mysqli_query($con, $sql);
	$count = mysqli_affected_rows($con);

	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di tambah !!!');
			document.location.href='index.php';
			</script>
		";
	}
}
?>
