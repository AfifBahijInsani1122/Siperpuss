<?php
include'../koneksi.php';
$sql = "select * from buku order by judul";
$res = mysqli_query($con, $sql);
$buku = array();
while ($data = mysqli_fetch_assoc($res)) {
$buku[] = $data;
}

include'../aset/header.php';
 ?>
<div class="container">
<div class="row mt-4">
<div class="col-md">
  <div class="card">
<div class="card-header">
</div>
<div class="card-body">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
        <th scope="col">Ringkasan</th>
        <th scope="col">cover</th>
        <th scope="col">stok</th>
        <th scope="col">kategori</th>
      <th scope="col">Aksi</th>
      <th scope="col"><a href="tambah.php" class="badge badge-success">Tambah Buku</a></th>
    </tr>
  </thead>
      <?php
      $no = 1;
      foreach ($buku as $b ) {?>
        <tr>
          <td scope="row"><?=$no?></td>
          <td><?=$b['judul']?></th>
          <td><?=$b['pengarang']?></td>
          <td><?=$b['ringkasan']?></td>
          <td><?=$b['cover']?></td>
          <td><?=$b['stok']?></td>
          <td><?=$b['id_kategori']?></td>

     <td>
       <a href="detail.php?id_buku=<?= $b['id_buku'];?>" class="badge badge-success">Detail</a>
   <a href="hapus_pinjam.php?id_buku=<?= $b['id_buku'];?>" class="badge badge-danger">Hapus</a>
       <a href="edit.php?id_buku=<?= $b['id_buku'];?>" class="badge badge-dark">Edit</a>
       <!-- <a href="#" class="badge badge-danger">Danger</a>
       <a href="#" class="badge badge-warning">Warning</a>
       <a href="#" class="badge badge-info">Info</a>
       <a href="#" class="badge badge-light">Light</a>
       <a href="#" class="badge badge-dark">Dark</a> -->
     </td>
        </tr>
        <?php
        $no++;
      }
         ?>

</table>
  <h2 class="card-title"><i class="fas fa-edit"></i>Data Peminjaman</h2>
</div>
</div>
</div>
  </div>

  </div>
 <?php
 include'../aset/footer.php';
  ?>
