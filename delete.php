<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$ID_Buku = $_GET['ID_Buku'];
// query SQL untuk insert data
$query="DELETE FROM tb_buku WHERE ID_Buku='$ID_Buku'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:Admin.php");

?>