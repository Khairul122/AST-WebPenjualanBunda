<!-- Header -->
<?php include 'app/view/home/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/home/pemesanan.php' ?>
    <!-- \Controller -->

    <!-- Nav -->
    <?php include 'app/view/home/layout/nav.php' ?>
    <!-- \Nav -->

    <!-- Content -->
    <section class="cart_area padding_top">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col" class="text-left">Foto Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Diskon</th>
                                <th scope="col">Total Bayar</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
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
                                    <td class="text-left">
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="public/assets/img/produk/<?= $row['foto'] ?>" height="50" width="50" alt="" />
                                            </div>
                                            <div class="media-body">
                                                <p><?= $row['nama_produk'] ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>Rp. <?= number_format($row['harga_produk']) ?></h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <?= $row['jumlah_beli'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <?= $ket_diskon ?>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>Rp. <?= number_format($total_bayar) ?></h5>
                                    </td>
                                    <td>
                                        <?= $row['status'] ?>
                                    </td>
                                    <td>
                                        <a href="?h=Faktur&kode=<?= $row['kode_pembelian'] ?>" class="btn btn-info" target="_blank">
                                            <i class="fas fa-print"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- \Content -->

    <!-- Footer -->
    <?php include 'app/view/home/layout/footer.php' ?>
    <!-- \Footer -->

    <!-- Script -->
    <?php include 'app/view/home/layout/script.php' ?>
    <!-- \Script -->
</body>

</html>