<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<fieldset >
    <!--Judul pada fieldset-->
    <legend align="center">Toko Ryandra Putra</legend>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="Admin.php">Admin</a>
        <a href="Pengadaan.php">Pengadaan</a>
    </div>
    <h3 align="center">Selamat Datang Di toko saya</h3>
    <center><h1>Pencarian Buku</h1></center>
   <center><a href="tambah_form.html">Tambah Data</a></center>
    <br>
    <div class="cari">
    <form method="GET" action="index.php">
    <label>Kata Pencarian : </label>
    <input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo
    $_GET['kata_cari']; } ?>" />
    <button type="submit">Cari</button>
    </div>
    <table class="table-home">
        <thead class="table thead">
            <tr>
            <th>ID_Buku</th>
            <th>Kategori</th>
            <th>Nama Buku</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Penerbit</th>
            <th colspan="2">Aksi/Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //untuk meinclude kan koneksi
            include 'koneksi.php';
            //jika kita klik cari, maka yang tampil query cari ini
            if(isset($_GET['kata_cari'])) {
            //menampung variabel kata_cari dari form pencarian
            $kata_cari = $_GET['kata_cari'];
            $query = "SELECT * FROM tb_buku WHERE ID_Buku like '%".$kata_cari."%' OR
            Nama_Buku like '%".$kata_cari."%' OR
            Kategori like '%".$kata_cari."%' ORDER BY ID_Buku ASC";
            } else {
            //jika tidak ada pencarian, default yang dijalankan query ini
            $query = "SELECT * FROM tb_buku ORDER BY ID_Buku ASC";
            }
            $result = mysqli_query($koneksi, $query);
            if(!$result) {
            die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
            }
            //kalau ini melakukan foreach atau perulangan
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr align="center">
                    <td><?php echo $row['ID_Buku']; ?></td>
                    <td><?php echo $row['Kategori']; ?></td>
                    <td><?php echo $row['Nama_Buku']; ?></td>
                    <td><?php echo $row['Harga']; ?></td>
                    <td><?php echo $row['Stok']; ?></td>
                    <td><?php echo $row['Penerbit']; ?></td>
                    <!--Tambahan untuk opsi edit dan hapus-->
                    <td>
                        <a href="edit_form.php?ID_Buku=<?php echo $row['ID_Buku']; ?>">EDIT</a>
                        <a href="delete.php?ID_Buku=<?php echo $row['ID_Buku']; ?>">HAPUS</a>
                    </td>
                </tr>
    
        <?php
        }
        ?>
    </tbody>
    </table>
    </fieldset>
    </body>
    </html>