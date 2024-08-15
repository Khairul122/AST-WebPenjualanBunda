<?php

$no = 0;


$viewData = $crud->read(
    "pengguna",
    "WHERE level = 'Personal' OR level = 'Perusahaan'"
);

if (isset($_POST['edit'])) {
    # code...
    $crud->update(
        "pengguna",
        "user='$_POST[user]', pass='$_POST[pass]', nama_pengguna='$_POST[nama_pengguna]', 
         jk='$_POST[jk]', nohp='$_POST[nohp]', alamat='$_POST[alamat]', level='$_POST[level]'",
        "id_pengguna = '$_POST[id_pengguna]'"
    );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "pengguna",
        "id_pengguna",
        $_POST['id_pengguna']
    );

    // $crud->delete(
    //     "keranjang",
    //     "id_pengguna",
    //     $_POST['id_pengguna']
    // );

    // $crud->delete(
    //     "komen",
    //     "id_pengguna",
    //     $_POST['id_pengguna']
    // );

    // $crud->delete(
    //     "voucher",
    //     "id_pengguna",
    //     $_POST['id_pengguna']
    // );

    // $crud->delete(
    //     "checkout",
    //     "id_pengguna",
    //     $_POST['id_pengguna']
    // );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}
