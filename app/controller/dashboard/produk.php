<?php

$no = 0;

$level = "Pelanggan";

$viewData = $crud->read(
    "produk x, kategori y",
    "WHERE x.id_kategori = y.id_kategori"
);

$viewKategori = $crud->read(
    "kategori",
    "ORDER BY nama_kategori ASC"
);

if (isset($_POST['tambah'])) {
    # code...

    $nmFoto = $_FILES['foto']['name'];
    $lkFoto = $_FILES['foto']['tmp_name'];
    $tmp = "public/assets/img/produk/" . $nmFoto;

    if (move_uploaded_file($lkFoto, $tmp)) {
        # code...
        $crud->create(
            "produk",
            "id_kategori, nama_produk, stok, harga_produk, keterangan, foto",
            "'$_POST[id_kategori]', '$_POST[nama_produk]', '$_POST[stok]', 
             '$_POST[harga_produk]', '$_POST[keterangan]', '$nmFoto'"
        );
    }

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}

if (isset($_POST['edit'])) {
    # code...

    $nmFoto = $_FILES['foto']['name'];
    $lkFoto = $_FILES['foto']['tmp_name'];
    $tmp = "public/assets/img/produk/" . $nmFoto;

    if (!empty($lkFoto)) {
        # code...
        move_uploaded_file($lkFoto, $tmp);
        $foto = ", foto='$nmFoto'";
    } else {
        # code...
        $foto = "";
    }

    $crud->update(
        "produk",
        "id_kategori='$_POST[id_kategori]', nama_produk='$_POST[nama_produk]', 
         stok='$_POST[stok]', harga_produk='$_POST[harga_produk]' $foto",
        "id_produk = '$_POST[id_produk]'"
    );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}

if (isset($_POST['hapus'])) {
    # code...
    $crud->delete(
        "produk",
        "id_produk",
        $_POST['id_produk']
    );

    // $crud->delete(
    //     "keranjang",
    //     "id_produk",
    //     $_POST['id_produk']
    // );

    // $crud->delete(
    //     "komen",
    //     "id_produk",
    //     $_POST['id_produk']
    // );

    // $crud->delete(
    //     "checkout",
    //     "id_produk",
    //     $_POST['id_produk']
    // );

    echo $fungsi->Redirect("?d=" . $_GET['d']);
}
