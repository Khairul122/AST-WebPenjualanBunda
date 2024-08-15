<?php

if ($_GET['d'] == "Dashboard") {
    # code...
    include 'app/view/dashboard/dashboard.php';
} elseif ($_GET['d'] == "Logout") {
    # code...
    session_destroy();
    echo $fungsi->Redirect("?h=Home");
} elseif ($_GET['d'] == "Profile") {
    # code...
    $page = "Profile";
    include 'app/view/dashboard/profile.php';
} elseif ($_GET['d'] == "Pelanggan") {
    # code...
    $page = "Data Pelanggan";
    include 'app/view/dashboard/pelanggan.php';
} elseif ($_GET['d'] == "Kategori") {
    # code...
    $page = "Data Kategori";
    include 'app/view/dashboard/kategori.php';
} elseif ($_GET['d'] == "Produk") {
    # code...
    $page = "Data Produk";
    include 'app/view/dashboard/produk.php';
} elseif ($_GET['d'] == "Voucher") {
    # code...
    $page = "Data Voucher";
    include 'app/view/dashboard/voucher.php';
} elseif ($_GET['d'] == "Pesanan") {
    # code...
    $page = "Pemesanan Pelanggan";
    include 'app/view/dashboard/pesanan.php';
} elseif ($_GET['d'] == "Konfirmasi") {
    # code...
    $page = "Pemesanan Terkonfirmasi";
    include 'app/view/dashboard/konfirmasi.php';
} elseif ($_GET['d'] == "Laporan") {
    # code...
    $page = "Laporan Penjualan";
    include 'app/view/dashboard/laporan.php';
} elseif ($_GET['d'] == "CetakLaporan") {
    # code...
    include 'app/view/report/cetak_laporan.php';
} else {
    # code...
    echo $fungsi->Redirect("?d=Dashboard");
}
