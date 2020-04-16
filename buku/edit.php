<?php
include '../koneksi.php';
include '../aset/header.php';
$id_buku = $_GET['id_buku'];
$sql = mysqli_query($con, "SELECT * FROM buku WHERE id_buku=$id_buku");
$query = mysqli_query($con, "SELECT * FROM kategori");

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
								while ($id_buku= mysqli_fetch_assoc($sql)):
								?>
							<tr>
								<input type="hidden" name="id_buku" value="<?php echo $id_buku['id_buku'];?>">
								<td>Judul Buku</td>
								<td><input type="text" name="judul" value="<?php echo $id_buku['judul'];?>" required></td>
							</tr>
							<tr>
								<td>Penerbit</td>
								<td><input type="text" name="penerbit" value="<?php echo $id_buku['penerbit'];?>" required></td>
							</tr>
							<tr>
								<td>Pengarang</td>
								<td><input type="text" name="pengarang" value="<?php echo $id_buku['pengarang'];?>" required></td>
							</tr>
							<tr>
								<td>Ringkasan</td>
								<td>
									<textarea name="ringkasan">
										<?php echo $id_buku['ringkasan'];?>
									</textarea>
								</td>
							</tr>
							<tr>
								<td>Cover</td>
								<td><input type="file" name="cover" value="<?php echo $id_buku['cover'];?>" required>
									<img src="<?php echo $id_buku['cover'];?>" style="width: 25%">
								</td>
							</tr>
							<tr>
								<td>Stok</td>
								<td><input type="number" name="stok" value="<?php echo $id_buku['stok'];?>" required></td>
							</tr>
							<?php
							endwhile;
							?>
							<tr>
								<td>Kategori</td>
								<td>
									<select style="width: 200px" name="id_kategori">
										<option value="">-- Pilih Kategori --</option>
										<?php
											while ($kategori = mysqli_fetch_assoc($query)):
										?>
										<option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
										<?php
											endwhile;
										?>
									</select>
								</td>
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
