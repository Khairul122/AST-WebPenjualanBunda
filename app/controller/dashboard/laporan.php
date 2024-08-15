<?php

$no = 0;
$total_all = 0;

$viewData = $crud->read(
    "checkout",
    "INNER JOIN produk ON checkout.id_produk = produk.id_produk
     INNER JOIN pengguna ON checkout.id_pengguna = pengguna.id_pengguna
     WHERE status = 'Dikonfirmasi'
     ORDER BY checkout.kode_pembelian DESC"
);

$angkaBulan = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];

if (isset($_POST['cetak'])) {
    # code...
    $pimpinan = $_POST['pimpinan'];
    if (!empty($_POST['tgl']) and empty($_POST['bulan']) and empty($_POST['tahun'])) {
        # code...
        $tipe = "Perhari";
        echo $fungsi->Redirect("?d=CetakLaporan&tipe=$tipe&pimpinan=$pimpinan&tgl=$_POST[tgl]&bulan=$_POST[bulan]&tahun=$_POST[tahun]");
    } elseif (empty($_POST['tgl']) and !empty($_POST['bulan']) and !empty($_POST['tahun'])) {
        # code...
        $tipe = "Perbulan";
        echo $fungsi->Redirect("?d=CetakLaporan&tipe=$tipe&pimpinan=$pimpinan&tgl=$_POST[tgl]&bulan=$_POST[bulan]&tahun=$_POST[tahun]");
    } elseif (empty($_POST['tgl']) and empty($_POST['bulan']) and !empty($_POST['tahun'])) {
        # code...
        $tipe = "Pertahun";
        echo $fungsi->Redirect("?d=CetakLaporan&tipe=$tipe&pimpinan=$pimpinan&tgl=$_POST[tgl]&bulan=$_POST[bulan]&tahun=$_POST[tahun]");
    } else {
        # code...
        echo $fungsi->NotifRedirect(
            "Gagal Cetak",
            "Mohon ikuti instruksi pada halaman Laporan Penjualan",
            "error",
            "?d=Laporan"
        );
    }
}
