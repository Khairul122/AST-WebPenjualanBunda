<!-- Header -->
<?php include 'app/view/home/layout/header.php' ?>
<!-- \Header -->

<body>

    <!-- Controller -->
    <?php include 'app/controller/home/voucher.php' ?>
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
                                <th scope="col">Kode Voucher</th>
                                <th scope="col">Minimal Belanjan</th>
                                <th scope="col">Diskon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($viewData as $row) : $no++ ?>
                                <tr>
                                    <td>
                                        <div class="product_count">
                                            <?= $row['kode_voucher'] ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            Rp. <?= number_format($row['min_belanja']) ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <?= $row['diskon'] ?>%
                                        </div>
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