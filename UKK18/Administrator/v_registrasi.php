<div class="container">
    <br>
    <h4>Daftar Pengguna</h4>
    <br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
            </svg></i>&nbsp;Tambah Pengguna
    </button>

    <!-- coding tambah pengguna start -->
    <!-- Modal -->
    <div>
        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pengguna</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="?halaman=simpanTambahPengguna" method="post">
                                <div class="row">
                                    Nama Pengguna :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                            </svg></span>
                                        <input type="text" name="nama_pengguna" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    Username Pengguna :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
                                                <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914" />
                                            </svg></span>
                                        <input type="text" name="username_pengguna" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    Password Pengguna :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill" viewBox="0 0 16 16">
                                                <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354" />
                                            </svg></span>
                                        <input type="text" name="password_pengguna" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    Status :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                            </svg></span>
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option value="Administrator">Administrator</option>
                                            <option value="Petugas">Petugas</option>
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
    <!-- coding tambah pengguna end -->

    <!-- coding pesan start -->
    <br>
    <div>
        <center>
            <?php
            if ($_SESSION['pesanPengguna']) {
                echo $_SESSION['pesanPengguna'];
                unset($_SESSION['pesanPengguna']);
            } else {
                echo $_SESSION['pesanUbahPengguna'];
                unset($_SESSION['pesanUbahPengguna']);
            }
            ?>
        </center>
    </div>
    <!-- coding pesan end -->

    <br><br>
    <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card p-3 mb-2 ">
                <table class="table table-hover">
                    <thead class="table-secondary">
                        <th scope="col">Id Login</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </thead>
                    <?php
                    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_login');
                    foreach ($sql as $pengguna) {
                    ?>
                        <tr>
                            <th scope="col"><?= $pengguna['id_login'] ?></th>
                            <td><?= $pengguna['nama'] ?></td>
                            <td><?= $pengguna['username'] ?></td>
                            <td><?= $pengguna['password'] ?></td>
                            <td><?= $pengguna['status'] ?></td>
                            <td><a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $pengguna['id_login'] ?>">Ubah</a></td>
                        </tr>

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
                                                <form action="?halaman=simpanUbahPengguna" method="post">
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
                </table>
            </div>
        </div>
    </div>
</div>