<!-- Header -->
<?php include 'app/view/dashboard/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/dashboard/pesanan.php' ?>
    <!-- \Controller -->

    <!-- Sidebar -->
    <?php include 'app/view/dashboard/layout/sidebar.php' ?>
    <!-- \Sidebar -->

    <div id="right-panel" class="right-panel">
        <!-- Nav -->
        <?php include 'app/view/dashboard/layout/nav.php' ?>
        <!-- \Nav -->

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="font-weight-bold"><?= $page ?></h4>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-center align-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Produk</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Waktu Pemesanan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($viewData as $row) : $no++ ?>
                                                <?php if ($row['kode_voucher'] != "-") {
                                                    # code...
                                                    $dataVoucher = mysqli_fetch_array($crud->read("voucher", "WHERE kode_voucher = '$row[kode_voucher]'"));
                                                    $ket_diskon = "Diskon " . $dataVoucher['diskon'] . "%";
                                                    $total = $row['harga_produk'] * $row['jumlah_beli'];
                                                    $diskon = ($total * $dataVoucher['diskon']) / 100;
                                                    $total_bayar = $total - $diskon;
                                                } else {
                                                    # code...
                                                    $ket_diskon = "Tidak ada diskon";
                                                    $total_bayar = $row['harga_produk'] * $row['jumlah_beli'];
                                                } ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td>
                                                        <img src="public/assets/img/bukti/<?= $row['foto_bukti'] ?>" height="80" width="50" alt="">
                                                    </td>
                                                    <td><?= $row['nama_pengguna'] ?></td>
                                                    <td><?= $row['nama_produk'] ?></td>
                                                    <td><?= $row['jumlah_beli'] ?></td>
                                                    <td>Rp. <?= number_format($total_bayar) ?></td>
                                                    <td><?= $row['status'] ?></td>
                                                    <td><?= $row['wsimpan'] ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#checkModal<?= $no ?>">
                                                            <i class="menu-icon fa fa-check"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <!-- Form Konfirmasi Data -->
                                                <div class="modal fade" id="checkModal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form method="post" enctype="multipart/form-data">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pemesanan</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="kode_pembelian" value="<?= $row['kode_pembelian'] ?>" required>
                                                                    <input type="hidden" name="id_produk" value="<?= $row['id_produk'] ?>" required>
                                                                    <input type="hidden" name="jumlah_beli" value="<?= $row['jumlah_beli'] ?>" required>
                                                                    <p>Konfirmasi pemesanan pelanggan dengan nama <b><?= $row['nama_pengguna'] ?></b> ?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" name="check" class="btn btn-success">Konfirmasi</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Form Hapus Data -->
                                                <div class="modal fade" id="hapusModal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <form method="post">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Yakin ingin hapus data dengan nama <b><?= $row['nama_produk'] ?></b> ?</p>
                                                                    <input type="hidden" name="id_produk" value="<?= $row['id_produk'] ?>">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                                    <button type="submit" name="hapus" class="btn btn-danger">Yakin</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

        <!-- Footer -->
        <?php include 'app/view/dashboard/layout/footer.php' ?>
        <!-- \Footer -->
    </div>

    <!-- Script -->
    <?php include 'app/view/dashboard/layout/script.php' ?>
    <!-- \Script -->

</body>

</html>