<?php
include '../koneksi.php';
include '../aset/header.php';

$query = mysqli_query($con, "SELECT * FROM id_level");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data </title>
</head>
<body>
	<div class="container">
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i> Tambah Data Anggota</h2>
					</div>
					<div class="card-body">
						<form method="post" action="proses-tambah.php">
							<table class="table">
								<tr>
									<td>id_anggota</td>
									<td><input type="text" name="id_anggota"></td>
								</tr>
							<tr>
								<td>Nama</td>
								<td><input type="text" name="nama"></td>
							</tr>
							<tr>
								<td>kelas</td>
								<td><input type="text" name="kelas"></td>
							</tr>
							<tr>
								<td>telp</td>
								<td><input type="text" name="telp"></td>
							</tr>
							<tr>
								<td>username</td>
								<td><input type="text" name="username"></td>
							</tr>
							<tr>
								<td>password</td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td>id_level</td>
								<td><input type="number" name="id_level"></td>
							</tr>

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
