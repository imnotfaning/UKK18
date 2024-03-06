<div class="container">
    <br>
    <h3>Penjualan</h3>
    <br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
            </svg></i>&nbsp;Tambah Pelanggan
    </button>

    <!-- coding tambah pelanggan start -->
    <!-- Modal -->
    <div>
        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pelanggan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="?halaman=simpanTambahPelanggan" method="post">
                                <div class="row">
                                    <div class="col-3">
                                        <input type="hidden" name="id_login" id="" class="form-control" value="<?= $_SESSION['id_login'] ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    ID Pelanggan :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill" viewBox="0 0 16 16">
                                                <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A6 6 0 0 1 5 6.708V2.277a3 3 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354" />
                                            </svg></span>
                                        <input type="text" name="id_pelanggan" id="" class="form-control" value="<?= date('mis') ?>" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    Nama Pelanggan :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                            </svg></span>
                                        <input type="text" name="nama_pelanggan" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    Alamat Pelanggan :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                            </svg></span>
                                        <input type="text" name="alamat_pelanggan" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    Telepon Pelanggan :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                            </svg></span>
                                        <input type="text" name="telepon_pelanggan" id="" class="form-control">
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
    <!-- coding tambah pelanggan end -->

    <!-- coding pesan start-->
    <br>
    <div>
        <center>
            <?php
            if ($_SESSION['pesanPelanggan']) {
                echo $_SESSION['pesanPelanggan'];
                unset($_SESSION['pesanPelanggan']);
            } else {
                echo $_SESSION['pesanUbahPengguna'];
                unset($_SESSION['pesanUbahPengguna']);
            }
            ?>
        </center>
    </div>
    <!-- coding pesan end-->

    <br><br>
    <div class="container">
        <!-- <div class="row"> -->
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card p-3 mb-2 ">
                <br>
                <table class="table">

                    <?php
                    if (isset($_GET['cari'])) {
                        $cari = $_GET['cari'];
                        echo "<b>Hasil pencarian : " . $cari . "</b>";
                    }
                    ?>
                    <thead class="table-secondary">
                        <th scope="col">Id pelanggan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Alamat Pelanggan</th>
                        <th scope="col">Telepon Pelanggan</th>
                        <th scope="col" colspan="2">Aksi</th>
                    </thead>
                    <?php
                    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_pelanggan ORDER BY id_pelanggan DESC');
                    foreach ($sql as $pelanggan) {
                    ?>
                        <tr>
                            <th scope="col"><?= $pelanggan['id_pelanggan'] ?></th>
                            <td><?= $pelanggan['nama_pelanggan'] ?></td>
                            <td><?= $pelanggan['alamat_pelanggan'] ?></td>
                            <td><?= $pelanggan['telepon_pelanggan'] ?></td>
                            <td><a href="?halaman=hapusPelanggan&id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-danger">Hapus</a></td>
                            <td><a href="?halaman=beli&id_pelanggan=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-primary">Beli</a></td>
                        </tr>
                    <?php }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>