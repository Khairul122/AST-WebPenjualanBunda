<?php

$kode = $_GET['kode'];

$viewData = $crud->read(
    "checkout",
    "INNER JOIN produk ON checkout.id_produk = produk.id_produk
     INNER JOIN pengguna ON checkout.id_pengguna = pengguna.id_pengguna
     WHERE checkout.id_pengguna = '$dataPengguna[id_pengguna]' AND kode_pembelian = '$kode'"
);

$dataPemesanan = mysqli_fetch_array($viewData);

if ($dataPemesanan['kode_voucher'] != "-") {
    # code...
    $dataVoucher = mysqli_fetch_array($crud->read("voucher", "WHERE kode_voucher = '$dataPemesanan[kode_voucher]'"));
    $ket_diskon = "Diskon " . $dataVoucher['diskon'] . "%";
    $total = $dataPemesanan['harga_produk'] * $dataPemesanan['jumlah_beli'];
    $diskon = ($total * $dataVoucher['diskon']) / 100;
    $total_bayar = $total - $diskon;
} else {
    # code...
    $ket_diskon = "Tidak ada diskon";
    $total = $dataPemesanan['harga_produk'] * $dataPemesanan['jumlah_beli'];
    $total_bayar = $dataPemesanan['harga_produk'] * $dataPemesanan['jumlah_beli'];
}
