<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$ID_Penerbit = $_GET['ID_Penerbit'];
// query SQL untuk insert data
$query="DELETE FROM tb_pembuat WHERE ID_Penerbit='$ID_Penerbit'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:Pengadaan.php");

?>