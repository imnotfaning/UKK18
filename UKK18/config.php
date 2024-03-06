<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "UKK18";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi) {
    echo "Koneksi Gagal!";
}
