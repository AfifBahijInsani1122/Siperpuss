 <?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama";

$res = mysqli_query($con, $sql);

$anggota = array();

while ($data = mysqli_fetch_assoc($res)) {
	$anggota[] = $data;
}
?>
<?php
include '../aset/header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			<div class="card">
  			  <div class="card-header">
			    <h2 class="card-title"><i class="fas fa-user"></i> Data Anggota</h2>
			  </div>
			  <div class="card-body">
			  	<table class="table table-dark">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Nama</th>
				      <th scope="col">Kelas</th>
				      <th scope="col">Aksi</th>
              <th scope="col">telp</th>
              <th scope="col"><a href="tambah.php" class="badge badge-success">Tambah </a></th>

				    </tr>
				  </thead>
				  <?php
				  	$no = 1;
				  	foreach ($anggota as $a) {?>
				  	<tr>
				      <th scope="row"><?=$no?></th>
				      <td><?=$a['username']?></td>
				      <td><?=$a['kelas']?></td>
              <td><?=$a['telp']?></td>
				      <td>
				      	<a href="proses-tambah.php" class="badge badge-success">Detail</a>
						<a href="edit.php?id_anggota=<?= $a['id_anggota'];?>" class="badge badge-warning">Edit</a>
						<a href="hapus_pinjam.php?id_anggota=<?= $a['id_anggota'];?>" class="badge badge-danger">Hapus</a>
				      </td>
				    </tr>
				    <?php
				    	$no++;
				  	}
				  ?>
				  </tbody>
				</table>
			  </div>
			</div>
		</div>
	</div>
</div>


<?php
include '../aset/footer.php';
?>
