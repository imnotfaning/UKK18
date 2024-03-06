<?php

session_start();

include("config.php");

$username_login = $_POST['username_login'];
$password_login = $_POST['password_login'];

$sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username_login' AND password='$password_login'");

$hasil = mysqli_num_rows($sql);


if ($hasil > 0) {
    $data = mysqli_fetch_assoc($sql);

    if ($data['status'] == "Administrator") {
        $_SESSION['login'] = 'admin';
        //mengirim nama dan id terlogin
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['id_login'] = $data['id_login'];
        header('location: administrator/index.php');
    } else if ($data['status'] == "Petugas") {
        $_SESSION['login'] = 'petugas';
        //mengirim nama dan id terlogin
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['id_login'] = $data['id_login'];
        header('location: petugas/index.php');
    }
} else {
    echo "<script>alert('Username atau Password Anda salah. Silahkan coba lagi!')</script>";
    include('index.php');
}
