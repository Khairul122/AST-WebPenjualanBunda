<?php

$no = 0;
$total_belanja = array();

$id = $_GET['id'];

$viewVoucher = $crud->read(
    "voucher",
    "WHERE akun = '$dataPengguna[level]'"
);

$viewKeranjang = $crud->read(
    "keranjang",
    "INNER JOIN produk ON keranjang.id_produk = produk.id_produk
     WHERE id_keranjang = '$id'"
);

$dataKeranjang = mysqli_fetch_array($viewKeranjang);
$total_belanja = $dataKeranjang['jumlah_produk'] * $dataKeranjang['harga_produk'];
$diskon = 0;
$ket = "";
$kode_voucher = "-";

foreach ($viewVoucher as $data) {
    # code...
    if ($total_belanja >= $data['min_belanja']) {
        # code...
        $diskon = $data['diskon'];
        $min = $data['min_belanja'];
        $kode_voucher = $data['kode_voucher'];
    }
}

$total_diskon = ($total_belanja * $diskon) / 100;

if (isset($_POST['checkout'])) {
    # code...
    if (empty($_POST['bank'])) {
        # code...
        echo $fungsi->NotifRedirect(
            "Gagal Checkout Pembelian",
            "Mohon lengkapi kebutuhan data dalam proses transaksi",
            "error",
            "?h=Checkout&id=$id"
        );
    } else {
        # code...
        $kode = "KP" . date('Ydis');
        $status = "Belum Dikonfirmasi";
        $tgl_beli = date('Y-m-d');
        $bulan = date('m');
        $tahun = date('Y');

        $nmFoto = $_FILES['foto_bukti']['name'];
        $lkFoto = $_FILES['foto_bukti']['tmp_name'];
        $tmp = "public/assets/img/bukti/" . $nmFoto;

        $dataProduk = mysqli_fetch_array(
            $crud->read(
                "produk",
                "WHERE id_produk = '$dataKeranjang[id_produk]'"
            )
        );

        $stok = $dataProduk['stok'] - $dataKeranjang['jumlah_produk'];

        if (move_uploaded_file($lkFoto, $tmp)) {
            # code...
            $crud->create(
                "checkout",
                "kode_pembelian, id_pengguna, id_produk, jumlah_beli, alamat, kode_voucher, bank, foto_bukti, status, 
                 tgl_beli, bulan, tahun",
                "'$kode', '$dataPengguna[id_pengguna]', '$dataKeranjang[id_produk]', 
                 '$dataKeranjang[jumlah_produk]', '$_POST[alamat]', '$kode_voucher', 
                 '$_POST[bank]', '$nmFoto', '$status', '$tgl_beli', '$bulan', '$tahun'"
            );

            $crud->update(
                "produk",
                "stok='$stok'",
                "id_produk = '$dataKeranjang[id_produk]'"
            );

            $crud->delete(
                "keranjang",
                "id_keranjang",
                "$id"
            );

            echo $fungsi->NotifRedirect(
                "Berhasil Checkout Pembelian",
                "Mohon tunggu konfirmasi dari admin dan selalu cek pada halaman pemesanan",
                "success",
                "?h=Pemesanan"
            );
        }
    }
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
