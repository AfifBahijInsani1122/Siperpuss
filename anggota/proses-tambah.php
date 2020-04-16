<?php
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$id_anggota		= $_POST['id_anggota'];
	$kelas 		 = $_POST['kelas'];
	$telp 	 = $_POST['telp'];
	$username 	 = $_POST['username'];
	$password 	 = $_POST['password'];
	$id_level 		 = $_POST['id_level'];

	$sql = "INSERT INTO anggota(id_anggota, kelas, telp, username, password, id_level )
	VALUES ('$id_anggota', '$kelas', '$telp', '$username', '$password', '$id_level')";

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
