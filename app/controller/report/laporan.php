<?php

$no = 0;
$total_all = 0;
$tipe = $_GET['tipe'];
$pimpinan = $_GET['pimpinan'];

if ($tipe == "Perhari") {
    # code...
    $viewData = $crud->read(
        "checkout",
        "INNER JOIN produk ON checkout.id_produk = produk.id_produk
         INNER JOIN pengguna ON checkout.id_pengguna = pengguna.id_pengguna
         WHERE status = 'Dikonfirmasi' AND tgl_beli = '$_GET[tgl]'
         ORDER BY checkout.kode_pembelian DESC"
    );

    $waktu = $fungsi->TanggalIndo($_GET['tgl']);
} elseif ($tipe == "Perbulan") {
    # code...
    $viewData = $crud->read(
        "checkout",
        "INNER JOIN produk ON checkout.id_produk = produk.id_produk
         INNER JOIN pengguna ON checkout.id_pengguna = pengguna.id_pengguna
         WHERE status = 'Dikonfirmasi' AND bulan = '$_GET[bulan]' AND tahun = '$_GET[tahun]'
         ORDER BY checkout.kode_pembelian DESC"
    );

    $waktu = "Bulan " . $_GET['bulan'] . " Tahun " . $_GET['tahun'];
} elseif ($tipe == "Pertahun") {
    # code...
    $viewData = $crud->read(
        "checkout",
        "INNER JOIN produk ON checkout.id_produk = produk.id_produk
         INNER JOIN pengguna ON checkout.id_pengguna = pengguna.id_pengguna
         WHERE status = 'Dikonfirmasi' AND tahun = '$_GET[tahun]'
         ORDER BY checkout.kode_pembelian DESC"
    );

    $waktu = "Tahun " . $_GET['tahun'];
}
