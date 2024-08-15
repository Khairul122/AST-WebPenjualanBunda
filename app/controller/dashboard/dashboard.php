<?php

$total_penjualan = 0;
$queryPenjualan = $crud->read(
    "checkout",
    "INNER JOIN produk ON checkout.id_produk = produk.id_produk
     INNER JOIN pengguna ON checkout.id_pengguna = pengguna.id_pengguna
     WHERE status = 'Dikonfirmasi'
     ORDER BY checkout.kode_pembelian DESC"
);

foreach ($queryPenjualan as $row) {
    # code...
    if ($row['kode_voucher'] != "-") {
        # code...
        $dataVoucher = mysqli_fetch_array($crud->read("voucher", "WHERE kode_voucher = '$row[kode_voucher]'"));
        $ket_diskon = "Diskon " . $dataVoucher['diskon'] . "%";
        $total = $row['harga_produk'] * $row['jumlah_beli'];
        $diskon = ($total * $dataVoucher['diskon']) / 100;
        $total_bayar = $total - $diskon;
    } else {
        # code...
        $ket_diskon = "Tidak ada diskon";
        $total_bayar = $row['harga_produk'] * $row['jumlah_beli'];
    }

    $total_penjualan += $total_bayar;
}

$queryPemesanan = $crud->read(
    "checkout",
    "INNER JOIN produk ON checkout.id_produk = produk.id_produk
     INNER JOIN pengguna ON checkout.id_pengguna = pengguna.id_pengguna
     WHERE status = 'Belum Dikonfirmasi'
     ORDER BY checkout.kode_pembelian DESC"
);

$queryProduk = $crud->read(
    "produk x, kategori y",
    "WHERE x.id_kategori = y.id_kategori"
);

$queryPelanggan = $crud->read(
    "pengguna",
    "WHERE level = 'Pelanggan'"
);
