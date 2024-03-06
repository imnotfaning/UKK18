<?php

error_reporting(0);
session_start();

if ($_SESSION['login'] != 'admin') {
    header('location: ../index.php');
}

include('../config.php');
include('header.php');

$halaman = $_GET['halaman'];

switch ($halaman) {
    case 'logOut':
        include('v_logout.php');
        break;
    case 'dasboard':
        include('v_admin.php');
        break;

        //cooding registrasi admin
    case 'registrasi':
        include('v_registrasi.php');
        break;
    case 'simpanTambahPengguna':
        include('m_tambah_pengguna.php');
        break;
    case 'simpanUbahPengguna':
        include('m_ubah_pengguna.php');
        break;

        //coding pendataan start
    case 'pendataan':
        include('v_daftar_barang.php');
        break;
    case 'simpanTambahBarang':
        include('m_tambah_barang.php');
        break;
    case 'hapusBarang':
        include('m_hapus_barang.php');
        break;
    case 'simpanUbahBarang':
        include('m_ubah_barang.php');
        break;
        //coding end


        //coding pelanggan start
    case 'pelanggan':
        include('v_daftar_pelanggan.php');
        break;
        // coding pelanggan end

        //coding penjualan start
    case 'penjualan':
        include('v_daftar_penjualan.php');
        break;
        //coding penjualan end

        // coding petugas stard
    case 'profil':
        include('../v_profil.php');
        break;
    case 'simpanUbahProfil':
        include('../m_ubah_profil.php');
        break;
        // coding petugas end

    default:
        include('v_admin.php');
        break;
}

include('footer.php');
