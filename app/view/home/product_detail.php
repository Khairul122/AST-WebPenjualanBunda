<!-- Header -->
<?php include 'app/view/home/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/home/product_detail.php' ?>
    <!-- \Controller -->

    <!-- Nav -->
    <?php include 'app/view/home/layout/nav.php' ?>
    <!-- \Nav -->

    <!-- Content -->
    <div class="product_image_area section_padding">
        <div class="container">
            <div class="row s_product_inner justify-content-between">
                <div class="col-lg-7 col-xl-7">
                    <div class="product_slider_img">
                        <div id="vertical">
                            <div>
                                <img src="public/assets/img/produk/<?= $dataProduk['foto'] ?>" class="img-fluid d-block mx-auto" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="s_product_text">
                        <a href="?h=Product" class="btn_4 mb-3">Back</a>
                        <h3><?= $dataProduk['nama_produk'] ?></h3>
                        <h2>Rp. <?= number_format($dataProduk['harga_produk']) ?></h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> : <?= $dataProduk['nama_kategori'] ?></a>
                            </li>
                            <li>
                                <a href="#"> <span>Stok</span> : <?= $dataProduk['stok'] ?></a>
                            </li>
                        </ul>
                        <p>
                            <?= $dataProduk['keterangan'] ?>
                        </p>
                        <form method="post">
                            <div class="card_area d-flex justify-content-between align-items-center">
                                <div class="product_count">
                                    <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                                    <input class="input-number" type="text" name="jumlah_produk" value="1" min="1" max="<?= $dataProduk['stok'] ?>">
                                    <span class="number-increment"> <i class="ti-plus"></i></span>
                                </div>
                                <button type="submit" name="keranjang" class="btn_3">Masuk Keranjang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <form method="post" class="needs-validation" novalidate>
                <div class="row" style="margin-top: 5rem;">

                    <div class="col-md-12 mb-2">
                        <h3 class="text-center font-weight-bolder">Ulasan Produk</h3>
                    </div>
                    <div class="col-md-9">
                        <textarea name="komen" class="form-control" placeholder="Isi Komentar Anda" rows="3" required></textarea>
                        <div class="invalid-feedback">
                            Mohon Isikan Komentar Anda
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <select name="bintang" class="form-control" required>
                                    <option value="" disabled selected>Bintang</option>
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php endfor ?>
                                </select>
                                <div class="invalid-feedback">
                                    Mohon Pilih Bintang Ulasan Anda
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="kirim_komen" class="btn btn-success w-100">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="font-weight-bolder">Komentar</h5>
                        </div>
                        <div class="card-body">
                            <?php if (mysqli_num_rows($viewKomen) > 0) : ?>
                                <?php foreach ($viewKomen as $row) : ?>
                                    <blockquote class="blockquote mb-2">
                                        <h6><?= $row['level'] == "Admin" ? 'Admin' : $row['nama_pengguna'] ?> <span class="text-muted"><?= $row['waktu_komentar'] ?></span></h6>
                                        <?php if ($row['level'] != "Admin") : ?>
                                            <?php for ($i = 1; $i <= $row['bintang']; $i++) : ?>
                                                <span class="fa fa-star check"></span>
                                            <?php endfor ?>
                                            <?php if ($row['bintang'] < 5) : ?>
                                                <?php $bintang = 5 - $row['bintang'] ?>
                                                <?php for ($i = 1; $i <= $bintang; $i++) : ?>
                                                    <span class="fa fa-star"></span>
                                                <?php endfor ?>
                                            <?php endif ?>
                                        <?php endif ?>
                                        <footer class="blockquote-footer"><?= $row['komen'] ?></footer>
                                    </blockquote>
                                    <hr>
                                <?php endforeach ?>
                            <?php else : ?>
                                <blockquote class="blockquote">
                                    <h6 class="text-center text-muted">Belum ada ulasan</h6>
                                </blockquote>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- \Content -->

    <!-- Footer -->
    <?php include 'app/view/home/layout/footer.php' ?>
    <!-- \Footer -->

    <!-- Script -->
    <?php include 'app/view/home/layout/script.php' ?>
    <!-- \Script -->
</body>

</html>