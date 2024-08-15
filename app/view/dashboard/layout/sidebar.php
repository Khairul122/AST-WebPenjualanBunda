<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?= $_GET['d'] == "Dashboard" ? 'active' : '' ?>">
                    <a href="?d=Dashboard">
                        <i class="menu-icon fa fa-laptop"></i>
                        Dashboard
                    </a>
                </li>
                <li class="<?= $_GET['d'] == "Profile" ? 'active' : '' ?>">
                    <a href="?d=Profile">
                        <i class="menu-icon fa fa-user"></i>
                        Profile
                    </a>
                </li>
                <li class="menu-title">Data</li>
                <li class="<?= $_GET['d'] == "Pelanggan" ? 'active' : '' ?>">
                    <a href="?d=Pelanggan">
                        <i class="menu-icon fa fa-users"></i>
                        Pelanggan
                    </a>
                </li>
                <li class="<?= $_GET['d'] == "Kategori" ? 'active' : '' ?>">
                    <a href="?d=Kategori">
                        <i class="menu-icon fa fa-file-archive-o"></i>
                        Kategori
                    </a>
                </li>
                <li class="<?= $_GET['d'] == "Produk" ? 'active' : '' ?>">
                    <a href="?d=Produk">
                        <i class="menu-icon fa fa-file-image-o"></i>
                        Produk
                    </a>
                </li>
                <li class="<?= $_GET['d'] == "Voucher" ? 'active' : '' ?>">
                    <a href="?d=Voucher">
                        <i class="menu-icon fa fa-files-o"></i>
                        Voucher
                    </a>
                </li>

                <li class="menu-title">Pembelian</li>
                <li class="<?= $_GET['d'] == "Pesanan" ? 'active' : '' ?>">
                    <a href="?d=Pesanan">
                        <i class="menu-icon fa fa-cart-plus"></i>
                        Pesanan
                    </a>
                </li>
                <li class="<?= $_GET['d'] == "Konfirmasi" ? 'active' : '' ?>">
                    <a href="?d=Konfirmasi">
                        <i class="menu-icon fa fa-check"></i>
                        Konfirmasi
                    </a>
                </li>

                <li class="menu-title">Laporan</li>
                <li class="<?= $_GET['d'] == "Laporan" ? 'active' : '' ?>">
                    <a href="?d=Laporan">
                        <i class="menu-icon fa fa-money"></i>
                        Penjualan
                    </a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</aside>