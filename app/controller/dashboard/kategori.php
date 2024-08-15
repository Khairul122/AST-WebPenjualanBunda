<?php

$no = 0;

$level = "Pelanggan";

$viewData = $crud->read("kategori");

if (isset($_POST['tambah'])) {
    # code...
    $crud->create(
        "kategori",
        "nama_kategori",
        "'$_POST[nama_kategori]'"
    );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}

if (isset($_POST['edit'])) {
    # code...
    $crud->update(
        "kategori",
        "nama_kategori='$_POST[nama_kategori]'",
        "id_kategori = '$_POST[id_kategori]'"
    );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "kategori",
        "id_kategori",
        $_POST['id_kategori']
    );

    // $crud->delete(
    //     "produk",
    //     "id_kategori",
    //     $_POST['id_kategori']
    // );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}
