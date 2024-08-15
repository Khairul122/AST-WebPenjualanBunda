<!-- Header -->
<?php include 'app/view/dashboard/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/dashboard/konfirmasi.php' ?>
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
                                                <th>Nama</th>
                                                <th>Produk</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Waktu Pemesanan</th>
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
                                                    <td><?= $row['nama_pengguna'] ?></td>
                                                    <td><?= $row['nama_produk'] ?></td>
                                                    <td><?= $row['jumlah_beli'] ?></td>
                                                    <td>Rp. <?= number_format($total_bayar) ?></td>
                                                    <td><?= $row['wsimpan'] ?></td>
                                                </tr>
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