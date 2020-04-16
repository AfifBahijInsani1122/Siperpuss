<?php
include '../koneksi.php';
$id=$_GET["id_anggota"];
$query2=mysqli_query($con,"DELETE FROM anggota where id_anggota='$id'");


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
