<div class="container">
    <br>
    <h3>Daftar Penjualan</h3>
    <br>
    <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card p-3 mb-2 ">
                <table class="table table-hover">
                    <thead class="table-secondary">
                        <th scope="col">Id Penjualan</th>
                        <th scope="col">Tanggal Penjualan</th>
                        <th scope="col">Total Penjualan</th>
                        <th scope="col">Id Pelanggan</th>
                        <th scope="col">Petugas</th>
                    </thead>
                    <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tb_penjualan");
                    foreach ($sql as $penjualan) {
                    ?>
                        <tr>
                            <th scope="col"><?= $penjualan['id_penjualan'] ?></th>
                            <td><?= $penjualan['tgl_penjualan'] ?></td>
                            <td>Rp. <?= $penjualan['total'] ?></td>
                            <td><?= $penjualan['id_pelanggan'] ?></td>
                            <td><?= $penjualan['id_login'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>