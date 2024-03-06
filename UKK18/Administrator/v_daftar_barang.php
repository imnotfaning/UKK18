<div class="container">
    <br>
    <h3>Daftar Barang</h3>
    <br>
    <!-- coding tambah barang start -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah"><i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg></i>&nbsp;Tambah Barang
    </button>
    <br>
    <br>
    <!-- Modal -->
    <div>
        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Barang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form action="?halaman=simpanTambahBarang" method="post">
                                <div class="row">
                                    Nama barang :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                            </svg></span>
                                        <input type="text" name="nama_barang" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    Stok barang :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                            </svg></span>
                                        <input type="text" name="stok_barang" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    Harga barang :
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp.</span>
                                        <input type="text" name="harga_barang" id="" class="form-control">
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
    <!-- coding tambah barang end -->

    <!-- coding pesan start-->
    <br>
    <div>
        <center>
            <?php
            if ($_SESSION['pesanTambahBarang']) {
                echo $_SESSION['pesanTambahBarang'];
                unset($_SESSION['pesanTambahBarang']);
            } else {
                echo $_SESSION['pesanUbahBarang'];
                unset($_SESSION['pesanUbahBarang']);
            }
            ?>
        </center>
    </div>
    <!-- coding pesan end-->

    <!-- coding tabel daftar barang start-->
    <br>
    <br>
    <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card p-3 mb-2 ">
                <table class="table table-hover">
                    <thead class="table-secondary">
                        <th scope="col">Id Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Stok Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col" colspan="2">
                            Aksi
                        </th>
                    </thead>
                    <?php
                    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_barang');
                    foreach ($sql as $barang) {
                    ?>
                        <tr>
                            <th scope="col"><?= $barang['id_barang'] ?></th>
                            <td><?= $barang['nama_barang'] ?></td>
                            <td><?= $barang['stok_barang'] ?></td>
                            <td>Rp. <?= $barang['harga_barang'] ?></td>
                            <td><a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $barang['id_barang'] ?>">Ubah</a></td>
                            <td><a href="?halaman=hapusBarang&id_barang=<?= $barang['id_barang'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')" class="btn btn-danger">Hapus</a></td>
                        </tr>

                        <!-- coding ubah barang start-->
                        <!-- Modal -->
                        <div>
                            <div class="modal fade" id="modalUbah<?= $barang['id_barang'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Barang</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <form action="?halaman=simpanUbahBarang" method="post">
                                                    <div class="row">
                                                        <input type="hidden" name="id_barang" id="" class="form-control" value="<?= $barang['id_barang'] ?>">
                                                    </div>
                                                    <div class="row">
                                                        Nama barang :
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                                                </svg></span>
                                                            <input type="text" name="nama_barang" id="" class="form-control" value="<?= $barang['nama_barang'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        Stok barang :
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                                                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0" />
                                                                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                                                                </svg></span>
                                                            <input type="text" name="stok_barang" id="" class="form-control" value="<?= $barang['stok_barang'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        Harga barang :
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Rp.</span>
                                                            <input type="text" name="harga_barang" id="" class="form-control" value="<?= $barang['harga_barang'] ?>">
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
                        <!-- coding ubah barang end -->
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>