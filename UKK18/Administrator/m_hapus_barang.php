<?php

$id_barang = $_GET['id_barang'];

//cari data di tabel barang
$cari = mysqli_query($koneksi, "SELECT * FROM tb_detail_penjualan WHERE id_barang='$id_barang'");

$hasilCari = mysqli_fetch_assoc($cari);
// var_dump($hasilCari);

//cek jika total > 0 maka tidak bisa dihapus
if ($hasilCari > 0) {
    echo "<script>alert('GAGAL HAPUS !!! DATA SUDAH DIPAKAI TRANSAKSI')</script>";
    header('location: ?halaman=pendataan');
} else {

    $sql = mysqli_query($koneksi, "DELETE FROM tb_barang WHERE id_barang='$id_barang'");

    if ($sql) {
        header('location: ?halaman=pendataan');
    }
}
