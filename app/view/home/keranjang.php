<!-- Header -->
<?php include 'app/view/home/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/home/keranjang.php' ?>
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
                                <th scope="col">Stok Produk</th>
                                <th scope="col">Jumlah Beli</th>
                                <th scope="col">Total</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($viewData as $row) : $no++ ?>
                                <?php if ($row['stok'] < $row['jumlah_produk']) {
                                    # code...
                                    $ket = "Stok Tidak Cukup";
                                } else {
                                    # code...
                                    $ket = "Stok Tersedia";
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
                                            <?= $row['stok'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <?= $row['jumlah_produk'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>Rp. <?= number_format($row['harga_produk'] * $row['jumlah_produk']) ?></h5>
                                    </td>
                                    <td>
                                        <h5><?= $ket ?></h5>
                                    </td>
                                    <td>
                                        <?php if ($ket == "Stok Tersedia") : ?>
                                            <a href="?h=Checkout&id=<?= $row['id_keranjang'] ?>" class="btn btn-info">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        <?php else : ?>
                                            <button type="button" disabled class="btn btn-info">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        <?php endif ?>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $no ?>">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?= $no ?>">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Form Edit Data -->
                                <div class="modal fade" id="editModal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="post">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_keranjang" value="<?= $row['id_keranjang'] ?>" required>
                                                    <label class="form-check-label">Jumlah</label>
                                                    <input type="number" class="form-control" name="jumlah_produk" value="<?= $row['jumlah_produk'] ?>" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="edit" class="btn btn-success">Submit</button>
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
                                                    <input type="hidden" name="id_keranjang" value="<?= $row['id_keranjang'] ?>" required>
                                                    <p>Yakin ingin hapus data dengan nama <b><?= $row['nama_produk'] ?></b> ?</p>
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