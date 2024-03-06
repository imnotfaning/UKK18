<div class="container">
    <br>
    <h3>Pelanggan</h3>
    <br>
    <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <div class="card p-3 mb-2 ">
                <table class="table table-hover">
                    <thead class="table-secondary">
                        <th scope="col">Id Pelanggan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Alamat Pelanggan</th>
                        <th scope="col">Telepon Pelanggan</th>
                    </thead>
                    <?php
                    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_pelanggan');
                    foreach ($sql as $pelanggan) {
                    ?>
                        <tr>
                            <th scope="col"><?= $pelanggan['id_pelanggan'] ?></th>
                            <td><?= $pelanggan['nama_pelanggan'] ?></td>
                            <td><?= $pelanggan['alamat_pelanggan'] ?></td>
                            <td><?= $pelanggan['telepon_pelanggan'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>