<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/styleProfil.css"> -->
</head>

<body>
    <div class="container">
        <div class="main-body">
            <br>
            <h3>Profil</h3>
            <br>
            <div class="row gutters-sm">
                <?php
                $id_login = $_GET['id_login'];
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id_login='$id_login'");
                foreach ($sql as $pengguna) {
                ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                    </svg>
                                    <div class="mt-3">
                                        <h4><?= $pengguna['username'] ?></h4>
                                        <p class="text-secondary mb-1"><?= $pengguna['status'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">ID Pengguna :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $pengguna['id_login'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nama Pengguna :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $pengguna['nama'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Username Pengguna :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $pengguna['username'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Passwod Pengguna :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $pengguna['password'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Status :</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <?= $pengguna['status'] ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $pengguna['id_login'] ?>"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg></i>&nbsp;Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- coding ubah pengguna start -->
                    <div>
                        <div class="modal fade" id="modalUbah<?= $pengguna['id_login'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Pengguna</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <form action="?halaman=simpanUbahProfil" method="post">
                                                <div class="row">
                                                    <input type="hidden" name="id_login" id="" class="form-control" value="<?= $pengguna['id_login'] ?>">
                                                </div>
                                                <div class="row">
                                                    Nama Pengguna :
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                            </svg></span>
                                                        <input type="text" name="nama_pengguna" id="" class="form-control" value="<?= $pengguna['nama'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    Username Pengguna :
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                                                <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914" />
                                                            </svg></span>
                                                        <input type="text" name="username_pengguna" id="" class="form-control" value="<?= $pengguna['username'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    Password Pengguna :
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill" viewBox="0 0 16 16">
                                                                <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354" />
                                                            </svg></span>
                                                        <input type="text" name="password_pengguna" id="" class="form-control" value="<?= $pengguna['password'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    Status :
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                                            </svg></span>
                                                        <select class="form-select" aria-label="Default select example" name="status">
                                                            <?php
                                                            if ($pengguna['status'] == "Administrator") {
                                                                echo "<option value='Administrator' selected>Administrator</option>";
                                                            } else {
                                                                echo "<option value='Administrator'>Administrator</option>";
                                                            }
                                                            if ($pengguna['status'] == "Petugas") {
                                                                echo "<option value='Petugas' selected>Petugas</option>";
                                                            } else {
                                                                echo "<option value='Petugas'>Petugas</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input type="submit" value="Simpan" class="btn btn-secondary">
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- coding ubah pengguna end -->
                <?php } ?>
            </div>

        </div>
    </div>

</body>

</html>