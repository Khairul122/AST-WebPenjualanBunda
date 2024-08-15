<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="./">
                        <h2>Mandaflorist</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fas fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?= $_GET['h'] == "Home" ? 'text-danger' : '' ?> " href="./">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($_GET['h'] == "Product" or  $_GET['h'] == "Detail") ? 'text-danger' : '' ?>" href="?h=Product">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= $_GET['h'] == "Contact" ? 'text-danger' : '' ?>" href="?h=Contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hearer_icon d-flex">
                        <?php if (isset($_SESSION['login_gito']) == true) : ?>
                            <?php if ($dataPengguna['level'] == "Personal" or $dataPengguna['level'] == "Perusahaan") : ?>
                                <div class="dropdown cart">
                                    <a class="dropdown-toggle" href="?h=Pemesanan">
                                        <i class="fas fa-car-side"></i>
                                    </a>
                                </div>
                                <div class="dropdown cart">
                                    <a class="dropdown-toggle" href="?h=Keranjang">
                                        <i class="fas fa-cart-plus"></i>
                                    </a>
                                </div>
                                <!-- <div class="dropdown cart">
                                    <a class="dropdown-toggle" href="?h=Voucher">
                                        <i class="fas fa-file-archive"></i>
                                    </a>
                                </div> -->
                                <a id="search_1" href="?h=Profile"><i class="ti-user"></i></a>
                                <a href="?h=Logout"><i class="ti-power-off"></i></a>
                            <?php elseif ($dataPengguna['level'] == "Admin") : ?>
                                <a href="?d=Dashboard" class="genric-btn primary circle arrow">Admin Panel</a>
                            <?php endif ?>
                        <?php else : ?>
                            <a href="?a=SignIn" class="genric-btn success circle arrow mr-2">Sign In</a>
                            <a href="?a=SignUp" class="genric-btn primary circle arrow">Sign Up</a>
                        <?php endif ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>