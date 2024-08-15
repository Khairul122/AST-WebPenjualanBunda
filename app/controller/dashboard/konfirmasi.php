<?php

$no = 0;

$viewData = $crud->read(
    "checkout",
    "INNER JOIN produk ON checkout.id_produk = produk.id_produk
     INNER JOIN pengguna ON checkout.id_pengguna = pengguna.id_pengguna
     WHERE status = 'Dikonfirmasi'
     ORDER BY checkout.kode_pembelian DESC"
);
