<?php

$no = 0;

$viewData = $crud->read(
    "checkout",
    "INNER JOIN produk ON checkout.id_produk = produk.id_produk
     WHERE id_pengguna = '$dataPengguna[id_pengguna]'"
);

if (isset($_POST['edit'])) {
    # code...
    $crud->update(
        "keranjang",
        "jumlah_produk='$_POST[jumlah_produk]'",
        "id_keranjang = '$_POST[id_keranjang]'"
    );

    echo $fungsi->Redirect("?h=" . $_GET['h']);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "keranjang",
        "id_keranjang",
        "$_POST[id_keranjang]"
    );

    echo $fungsi->Redirect("?h=" . $_GET['h']);
}
