<div class="container">
    <br>
    <h3>Dasboard</h3>
    <br>
    <div class="shadow p-3 mb-5 bg-body rounded">
        <div class="img">
            <img src="../img/Dashboard.png" alt="" width="1020px" height="290px">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <div class="card p-3 mb-2 ">
                    <div class="d-flex justify-content-between">
                        <di v class="d-flex flex-row align-items-center">
                            <div class="icon">
                                <!-- <i class="bi bi-person-fill-check"></i>  -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                                </svg>
                            </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0">Petugas Terlogin</h6> <span>sedang login</span>
                            </div>
                        </di>
                        <!-- <div class="badge"> <span>Design</span> </div> -->
                    </div>
                    <div class="mt-5">
                        <h3 class="h6">
                            <table class="table">
                                <tr>
                                    <td>ID</td>
                                    <td>:</td>
                                    <td><?= $_SESSION['id_login'] ?> </td>
                                </tr>
                                <tr>
                                    <td>Pengguna</td>
                                    <td>:</td>
                                    <td><?= $_SESSION['nama'] ?></td>
                                </tr>
                            </table>
                        </h3>
                        <div class="mt-5">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--coding card2-->
    <?php

    $barang = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_barang");
    $jumlahBarang = mysqli_fetch_assoc($barang);

    $penjualan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_penjualan");
    $jumlahPenjualan = mysqli_fetch_assoc($penjualan);

    $pelanggan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_pelanggan");
    $jumlahPelanggan = mysqli_fetch_assoc($pelanggan);

    ?>
    <!-- coding 3 card start -->
    <section id="card">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col mb-5">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="card">
                            <br>
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z" />
                                </svg>
                            </center>
                            <br>
                            <center>
                                <button type="button" class="btn btn-success">
                                    Data Barang <span class="badge text-bg-secondary"> <?= $jumlahBarang['Jumlah']; ?></span>
                                </button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="card">
                            <br>
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                                    <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1" />
                                </svg>
                            </center>
                            <br>
                            <center>
                                <button type="button" class="btn btn-success">
                                    Data Pembelian <span class="badge text-bg-secondary"> <?= $jumlahPenjualan['Jumlah']; ?></span>
                                </button>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="shadow p-3 mb-5 bg-body rounded">
                        <div class="card">
                            <br>
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                </svg>
                            </center>
                            <br>
                            <center>
                                <button type="button" class="btn btn-success">Data Pelanggan
                                    <span class="badge text-bg-secondary"> <?= $jumlahPelanggan['Jumlah']; ?></span>
                                </button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End card-->
</div>