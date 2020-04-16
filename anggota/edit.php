<?php
include '../koneksi.php';
include '../aset/header.php';
$id_anggota = $_GET['id_anggota'];
$sql = mysqli_query($con, "SELECT * FROM anggota WHERE id_anggota=$id_anggota");
$query = mysqli_query($con, "SELECT * FROM id_level");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Buku</title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i>Edit Data Buku</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-edit.php">
							<table class="table">
								<?php
								while ($id_anggota= mysqli_fetch_assoc($sql)):
								?>
							<tr>
								<input type="hidden" name="id_anggota" value="<?php echo $id_anggota['id_anggota'];?>">
								<td>Nama</td>
								<td><input type="text" name="nama" value="<?php echo $id_anggota['nama'];?>" required></td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td><input type="text" name="kelas" value="<?php echo $id_anggota['kelas'];?>" required></td>
							</tr>
							<tr>
								<td>Telp</td>
								<td><input type="text" name="telp" value="<?php echo $id_anggota['telp'];?>" required></td>
							</tr>
							<tr>
								<td>username</td>
								<td><input type="text" name="username" value="<?php echo $id_anggota['username'];?>" required></td>
							</tr>
							<tr>
								<td>password</td>
								<td><input type="password" name="password" value="<?php echo $id_anggota['password'];?>" required></td>
							<tr>
								<td>id_level</td>
								<td><input type="number" name="id_level" value="<?php echo $id_anggota['$id_level'];?>" required></td>
							</tr>
							<?php
							endwhile;
							?>

							<tr>
								<th></th>
								<th><input type="submit"class="btn btn-primary" name="simpan" value="simpan"></th>
							</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php
include '../aset/footer.php';
?>
