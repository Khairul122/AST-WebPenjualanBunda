<!-- Header -->
<?php include 'app/view/home/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/home/checkout.php' ?>
    <!-- \Controller -->

    <!-- Nav -->
    <?php include 'app/view/home/layout/nav.php' ?>
    <!-- \Nav -->

    <!-- Content -->
    <section class="checkout_area padding_top">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Checkout</h3>
                        <form class="row contact_form" method="post" enctype="multipart/form-data">
                            <div class="col-md-12 form-group p_star">
                                <label class="form-check-label">Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Isikan alamat lengkap tujuan pengiriman" required></textarea>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label class="form-check-label">Bank Pembayaran</label>
                                <select class="form-control" name="bank">
                                    <option value="" disabled selected>Pilih</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BCA">BCA</option>
                                    <option value="Bank Lainnya">Bank Lainnya</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <label class="form-check-label">Upload Bukti Pembayaran</label>
                                <input type="file" class="form-control" name="foto_bukti" required>
                            </div>
                            <div class="col-md-12 form-group p_star mt-1">
                                <button type="submit" name="checkout" class="btn_3">Chackout</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Product
                                        <span>Total</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"><?= $dataKeranjang['nama_produk'] ?> (x<?= $dataKeranjang['jumlah_produk'] ?>)
                                        <span class="last">Rp. <?= number_format($total_belanja - $total_diskon) ?></span>
                                    </a>
                                </li>
                                <?php if ($diskon > 0) : ?>
                                    <li>
                                        <p class="mt-3">
                                            Selamat anda mendapatkan diskon sebesar <b><?= $diskon . "%" ?></b> dikarenakan total belanja anda sampai dengan <b>Rp. <?= number_format($min) ?></b>
                                        </p>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <p class="mt-3">
                                            Tingkatkan total belanja anda agar mendapatkan diskon menarik dari kami.
                                        </p>
                                    </li>
                                <?php endif ?>
                            </ul>
                            <div class="payment_item active mt-3">
                                <p>
                                    No Rekening (BRI) : xxx-xxx-xxx <br><br>
                                    Mohon upload bukti pembayaran anda agar cepat di proses oleh admin.
                                </p>
                            </div>
                        </div>
                    </div>
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