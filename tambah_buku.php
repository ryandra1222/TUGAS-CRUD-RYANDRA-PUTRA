<?php
    include "koneksi.php";
    // menangkap data yang di kirim dari form
    $ID_Buku = $_POST['ID_Buku'];
    $Kategori = $_POST['Kategori'];
    $Nama_Buku = $_POST['Nama_Buku'];
    $Harga = $_POST['Harga'];
    $Stok = $_POST['Stok'];
    $Penerbit= $_POST['Penerbit'];
    // menginput data ke database
    $query = "INSERT INTO tb_buku VALUES ('$ID_Buku','$Kategori','$Nama_Buku','$Harga','$Stok','$Penerbit')";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
    echo "<script>alert('Buku berhasil ditambahkan');location='Admin.php';</script>";
    }
?>