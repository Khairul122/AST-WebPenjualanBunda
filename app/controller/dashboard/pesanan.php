<?php

$no = 0;

$viewData = $crud->read(
    "checkout",
    "INNER JOIN produk ON checkout.id_produk = produk.id_produk
     INNER JOIN pengguna ON checkout.id_pengguna = pengguna.id_pengguna
     WHERE status = 'Belum Dikonfirmasi'
     ORDER BY checkout.kode_pembelian DESC"
);

if (isset($_POST['check'])) {
    # code...

    $status = "Dikonfirmasi";

    $crud->update(
        "checkout",
        "status='$status'",
        "kode_pembelian = '$_POST[kode_pembelian]'"
    );

    echo $fungsi->NotifRedirect(
        "Pemesanan Dikonfirmasi",
        "",
        "success",
        "?d=" . $_GET['d']
    );
}
