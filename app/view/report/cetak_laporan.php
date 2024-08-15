<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/assets/home/css/bootstrap.min.css" />
</head>

<body>

    <body style="background-color: #fff !important; font-family: 'Times New Roman', Times, serif !important;">

        <!-- Controller -->
        <?php include 'app/controller/report/laporan.php' ?>
        <!-- /Controller -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center text-uppercase">
                    <h1>Laporan Penjualan Toko Bunga Mandaflorist</h1>
                    <h4><?= $waktu ?></h4>
                </div>
                <div class="col-md-12 mt-3">
                    <?php if ($tipe == "Perhari") : ?>
                        <table class="table table-bordered table-hover text-center align-middle">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Kode Pembelian</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Jumlah Beli</th>
                                    <th>Diskon Voucher</th>
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
                                        <td>Rp. <?= number_format($row['harga_produk']) ?></td>
                                        <td><?= $row['jumlah_beli'] ?></td>
                                        <td><?= $ket_diskon ?></td>
                                        <td>Rp. <?= number_format($total_bayar) ?></td>
                                    </tr>
                                <?php endforeach ?>
                                <?php if ($total_all > 0) : ?>
                                    <tr>
                                        <th colspan="8" class="text-right">Total :</th>
                                        <th>Rp. <?= number_format($total_all) ?></th>
                                    </tr>
                                <?php endif ?>
                            </tbody>
                        </table>
                    <?php elseif ($tipe == "Perbulan") : ?>
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
                    <?php elseif ($tipe == "Pertahun") : ?>
                        <table class="table table-bordered table-hover text-center align-middle">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Kode Pembelian</th>
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
                                        <td><?= $row['jumlah_beli'] ?></td>
                                        <td>Rp. <?= number_format($total_bayar) ?></td>
                                    </tr>
                                <?php endforeach ?>
                                <?php if ($total_all > 0) : ?>
                                    <tr>
                                        <th colspan="4" class="text-right">Total :</th>
                                        <th>Rp. <?= number_format($total_all) ?></th>
                                    </tr>
                                <?php endif ?>
                            </tbody>
                        </table>
                    <?php endif ?>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="justify-content-end d-flex">
                        <div class="d-block">
                            <p style="margin-bottom: 70px">
                                Padang, <?= $fungsi->TanggalIndo(date("Y-m-d")) ?><br />
                                Pimpinan
                            </p>
                            <p class="font-weight-bold">
                                <span class="text-underline"><?= $_GET['pimpinan'] ?></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.print()
        </script>
    </body>
</body>

</html>