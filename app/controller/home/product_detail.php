<?php

$no = 0;
$id = $_GET['id'];
$level = "Pelanggan";

$viewData = $crud->read(
    "produk",
    "INNER JOIN kategori ON produk.id_kategori = kategori.id_kategori
     WHERE produk.id_produk = '$id'"
);

$viewKomen = $crud->read(
    "komen",
    "INNER JOIN produk ON produk.id_produk = komen.id_produk
     INNER JOIN pengguna ON pengguna.id_pengguna = komen.id_pengguna
     WHERE komen.id_produk = '$id'
     ORDER BY komen.waktu_komentar DESC"
);

$dataProduk = mysqli_fetch_array($viewData);

if (isset($_POST['keranjang'])) {
    # code...
    if (isset($_SESSION['login_gito']) != true) {
        # code...
        echo $fungsi->NotifRedirect(
            "Opps Anda Belom Login!!",
            "Mohon login terlebih dahulu untuk melanjutkan aktivitas anda",
            "info",
            "?h=Detail&id=$id"
        );
    } else {
        # code...
        if ($dataPengguna['level'] == "Admin") {
            # code...
            echo $fungsi->NotifRedirect(
                "Opps Anda Belom Login!!",
                "Mohon login terlebih dahulu untuk melanjutkan aktivitas anda",
                "info",
                "?h=Detail&id=$id"
            );
        } else {
            # code...
            $crud->create(
                "keranjang",
                "id_pengguna, id_produk, jumlah_produk",
                "'$dataPengguna[id_pengguna]', '$id', $_POST[jumlah_produk]"
            );

            echo $fungsi->NotifRedirect(
                "Produk Berhasil Masuk Ke Keranjang",
                "",
                "success",
                "?h=Detail&id=$id"
            );
        }
    }
}

if (isset($_POST['kirim_komen'])) {
    # code...
    if (isset($_SESSION['login_gito']) != true) {
        # code...
        echo $fungsi->NotifRedirect(
            "Opppss Anda Belum Login",
            "Mohon login terlebih dahulu untuk memberi ulasan pada produk kami",
            "info",
            "?h=Detail&id=$id"
        );
    } else {
        # code...
        $komen = $_POST['komen'];
        $bintang = $_POST['bintang'];
        // $waktu = date('d-m-Y h:i:s');

        $crud->create(
            "komen",
            "id_produk, id_pengguna, komen, bintang",
            "'$id', '$id_pengguna', '$komen', '$bintang'"
        );

        echo $fungsi->NotifRedirect(
            "Terimakasih",
            "Ulasan anda sangat berarti bagi kemajuan produk kami",
            "success",
            "?h=Detail&id=$id"
        );
    }
}
