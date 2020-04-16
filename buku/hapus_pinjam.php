<?php
include '../koneksi.php';
$id_buku=$_GET["id_buku"];

$query2=mysqli_query($con,"DELETE FROM buku where id_buku= $id_buku");


// var_dump($query1&&$query2);

if(($query2)==1){
    echo
            "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'index.php';
            </script>
            ";
}
// else{
//     header("location : index.php");
//     exit;
// }
?>
