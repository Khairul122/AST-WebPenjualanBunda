<!-- Header -->
<?php include 'app/view/dashboard/layout/header.php' ?>
<!-- \Header -->

<body>
    <!-- Controller -->
    <?php include 'app/controller/dashboard/dashboard.php' ?>
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
                <!-- <div class="row">
                    <div class="col-md-12">
                        <h4 class="font-weight-bold">Dashboard</h4>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-4 font-weight-bold text-center">
                            SISTEM INFORMASI PENJUALAN HAND BOUQET DAN KARANGAN BUNGA<br>
                            MENGGUNAKAN CUSTOMER RELATIONSHIP MANAGEMENT (CRM)<br>
                            TOKO BUNGA MANDAFLORIST
                        </h2>
                    </div>
                </div>
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">
                                                Rp. <?= number_format($total_penjualan) ?>
                                            </div>
                                            <div class="stat-heading">Penjualan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">
                                                <span class="count"><?= mysqli_num_rows($queryPemesanan) ?></span>
                                            </div>
                                            <div class="stat-heading">Pemesanan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-copy-file"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">
                                                <span class="count"><?= mysqli_num_rows($queryProduk) ?></span>
                                            </div>
                                            <div class="stat-heading">Produk</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">
                                                <span class="count"><?= mysqli_num_rows($queryPelanggan) ?></span>
                                            </div>
                                            <div class="stat-heading">Pelanggan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
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