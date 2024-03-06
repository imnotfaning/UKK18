<?php

error_reporting(0);
session_start();

if ($_SESSION['login'] != 'petugas') {
    header('location: ../index.php');
}

include('../config.php');
include('header.php');

$halaman = $_GET['halaman'];

switch ($halaman) {
    case 'logOut':
        include('v_logout.php');
        break;

        // coding dasborad
    case 'dasboard':
        include('v_petugas.php');
        break;

        // coding stok barang start
    case 'stokBarang':
        include('v_stok_barang.php');
        break;
    case 'simpanUbahBarang':
        include('m_ubah_barang.php');
        break;
        // coding stok barang end

        // cooding penjualan start
    case 'penjualan':
        include('v_penjualan.php');
        break;
    case 'simpanTambahPelanggan':
        include('m_tambah_pelanggan.php');
        break;
    case 'hapusPelanggan':
        include('m_hapus_pelanggan.php');
        break;
    case 'beli':
        include('v_detail_penjualan.php');
        break;
        // coding penjualan end

        //coding detail penjualan
    case 'tambahBeli':
        include('m_beli_barang.php');
        break;
    case 'subTotal':
        include('m_hitung_sub_total.php');
        break;
    case 'updateBarangDetail':
        include('m_update_barang_detail.php');
        break;
    case 'hapusDetailBarang':
        include('m_hapus_detail_barang.php');
        break;
    case 'hitungTotal':
        include('m_hitung_total.php');
        break;

        // coding petugas stard
    case 'profil':
        include('../v_profil.php');
        break;
    case 'simpanUbahProfil':
        include('../m_ubah_profil.php');
        break;
        // coding petugas end

    default:
        include("v_petugas.php");
        break;
}

include("footer.php");
