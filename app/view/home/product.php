<!-- Header -->
<?php include 'app/view/home/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/home/product.php' ?>
    <!-- \Controller -->

    <!-- Nav -->
    <?php include 'app/view/home/layout/nav.php' ?>
    <!-- \Nav -->

    <!-- Content -->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="font-weight-bold text-center">Product Mandaflorist</h2>
                        </div>
                    </div>

                    <div class="row align-items-center latest_product_inner mt-3">
                        <?php foreach ($viewData as $row) : ?>
                            <div class="col-md-3">
                                <div class="single_product_item shadow rounded-0">
                                    <img src="public/assets/img/produk/<?= $row['foto'] ?>" class="p-5">
                                    <div class="single_product_text text-center">
                                        <h4><?= $row['nama_produk'] ?></h4>
                                        <h3>Rp. <?= number_format($row['harga_produk']) ?></h3>
                                        <a href="?h=Detail&id=<?= $row['id_produk'] ?>" class="add_cart">+ Detail Product</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
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