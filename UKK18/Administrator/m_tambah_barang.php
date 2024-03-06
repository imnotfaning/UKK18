<?php

$nama_barang = $_POST['nama_barang'];
$stok_barang = $_POST['stok_barang'];
$harga_barang = $_POST['harga_barang'];

$sql = mysqli_query($koneksi, "INSERT INTO tb_barang VALUES(Null, '$nama_barang', '$stok_barang', '$harga_barang')");

if ($sql) {
    $_SESSION['pesanTambahBarang'] = 'Barang berhasil ditambahkan!';
    header('location: ?halaman=pendataan');
}
