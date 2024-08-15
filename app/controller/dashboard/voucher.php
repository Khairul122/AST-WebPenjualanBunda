<?php

$no = 0;

$level = "Pelanggan";

$viewData = $crud->read(
    "voucher",
    "ORDER BY akun ASC"
);

if (isset($_POST['tambah'])) {
    # code...
    $kode = "V" . date('his');
    $crud->create(
        "voucher",
        "kode_voucher, diskon, min_belanja, akun",
        "'$kode', '$_POST[diskon]', '$_POST[min_belanja]', '$_POST[akun]'"
    );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}

if (isset($_POST['edit'])) {
    # code...

    $crud->update(
        "voucher",
        "min_belanja='$_POST[min_belanja]', diskon='$_POST[diskon]', akun='$_POST[akun]'",
        "id_voucher = '$_POST[id_voucher]'"
    );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "voucher",
        "id_voucher",
        $_POST['id_voucher']
    );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}
