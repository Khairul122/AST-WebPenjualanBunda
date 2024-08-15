<!-- Header -->
<?php include 'app/view/dashboard/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/dashboard/laporan.php' ?>
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
                    <div class="col-md-12">

                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card shadow-lg">
                            <div class="card-header">
                                <div class="row my-2">
                                    <div class="col-md-12 mb-2">
                                        <div class="alert alert-info shadow" role="alert">
                                            <h4 class="alert-heading font-weight-bold mb-2">Informasi (Instruksi)</h4>
                                            <p>
                                                Cetak Perhari : isi tanggal (bulan dan tahun kosongkan saja). <br>
                                                Cetak Perbulan : isi bulan dan tahun (tanggal kosongkan saja kosongkan saja). <br>
                                                Cetak Pertahun : isi tahun (tanggal dan bulan kosongkan saja).
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <form class="row" method="post">
                                            <div class="col-md-4">
                                                <label class="form-label-group">Tanggal</label>
                                                <input type="date" class="form-control" name="tgl">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label-group">Bulan</label>
                                                <select class="form-control" name="bulan">
                                                    <option value="" selected>Pilih</option>
                                                    <?php for ($i = 0; $i < count($angkaBulan); $i++) : ?>
                                                        <option value="<?= $angkaBulan[$i] ?>"><?= $angkaBulan[$i] ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label-group">Tahun</label>
                                                <select class="form-control" name="tahun">
                                                    <option value="" selected>Pilih</option>
                                                    <?php for ($i = 2018; $i <= 2024; $i++) : ?>
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                    <?php endfor ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mt-3">
                                                <label class="form-label-group">Nama Pimpinan</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control mr-2" name="pimpinan" required>
                                                    <button type="submit" name="cetak" class="btn btn-primary">
                                                        Cetak
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-center align-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Kode Pembelian</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Nama Produk</th>
                                                <th>Jumlah</th>
                                                <th>Total Bayar</th>
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
                                                }
                                                $total_all += $total_bayar ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $row['tgl_beli'] ?></td>
                                                    <td><?= $row['kode_pembelian'] ?></td>
                                                    <td><?= $row['nama_pengguna'] ?></td>
                                                    <td><?= $row['nama_produk'] ?></td>
                                                    <td><?= $row['jumlah_beli'] ?></td>
                                                    <td>Rp. <?= number_format($total_bayar) ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                            <?php if ($total_all > 0) : ?>
                                                <tr>
                                                    <th colspan="6" class="text-right">Total :</th>
                                                    <th>Rp. <?= number_format($total_all) ?></th>
                                                </tr>
                                            <?php endif ?>
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