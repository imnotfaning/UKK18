<div class="container">
    <br>
    <h3>Penjualan</h3>
    <br>
    <div>
        <center>
            <?php
            if ($_SESSION['pesanStokBarang']) {
                echo $_SESSION['pesanStokBarang'];
                unset($_SESSION['pesanStokBarang']);
            }
            ?>
        </center>
    </div>
    <br><br>
    <!-- <div class="row"> -->
    <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card p-3 mb-2 ">
                <table class="table table-hover">
                    <thead class="table-secondary">
                        <th scope="col">Id Barang</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Stok Barang</th>
                        <th scope="col">Harga Barang</th>
                        <th scope="col">Aksi</th>
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
                        </tr>

                        <!-- coding ubah barang start-->
                        <!-- Modal -->
                        <div>
                            <div class="modal fade" id="modalUbah<?= $barang['id_barang'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Barang</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <form action="?halaman=simpanUbahBarang" method="post">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <input type="hidden" name="id_barang" id="" class="form-control" value="<?= $barang['id_barang'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        Nama barang :
                                                        <input type="text" name="nama_barang" id="" class="form-control" value="<?= $barang['nama_barang'] ?>" readonly>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        Stok barang :
                                                        <input type="text" name="stok_barang" id="" class="form-control" value="<?= $barang['stok_barang'] ?>">
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        Harga barang :
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Rp.</span>
                                                            <input type="text" name="harga_barang" id="" class="form-control" value="<?= $barang['harga_barang'] ?>" readonly>
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
</div>