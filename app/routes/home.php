<?php

if ($_GET['h'] == "Home") {
    # code...
    include 'app/view/home/home.php';
} elseif ($_GET['h'] == "Logout") {
    # code...
    session_destroy();
    echo $fungsi->Redirect("?h=Home");
} elseif ($_GET['h'] == "Contact") {
    # code...
    include 'app/view/home/contact.php';
} elseif ($_GET['h'] == "Profile") {
    # code...
    include 'app/view/home/profile.php';
} elseif ($_GET['h'] == "Product") {
    # code...
    include 'app/view/home/product.php';
} elseif ($_GET['h'] == "Detail") {
    # code...
    include 'app/view/home/product_detail.php';
} elseif ($_GET['h'] == "Voucher") {
    # code...
    include 'app/view/home/voucher.php';
} elseif ($_GET['h'] == "Keranjang") {
    # code...
    include 'app/view/home/keranjang.php';
} elseif ($_GET['h'] == "Checkout") {
    # code...
    include 'app/view/home/checkout.php';
} elseif ($_GET['h'] == "Pemesanan") {
    # code...
    include 'app/view/home/pemesanan.php';
} elseif ($_GET['h'] == "Faktur") {
    # code...
    include 'app/view/report/faktur.php';
} else {
    # code...
    echo $fungsi->Redirect("?h=Home");
}
