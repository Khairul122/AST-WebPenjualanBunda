<?php

$viewData = $crud->read(
    "pengguna",
    "WHERE id_pengguna = '$dataPengguna[id_pengguna]'"
);

$dataPelanggan = mysqli_fetch_array($viewData);

if (isset($_POST['edit_profile'])) {
    # code...
    $crud->update(
        "pengguna",
        "user='$_POST[user]', pass='$_POST[pass]', nama_pengguna='$_POST[nama_pengguna]', 
         jk='$_POST[jk]', nohp='$_POST[nohp]', alamat='$_POST[alamat]'",
        "id_pengguna = '$dataPengguna[id_pengguna]'"
    );

    echo $fungsi->NotifRedirect(
        "Berhasil Update Profile",
        "",
        "success",
        "?h=" . $_GET['h']
    );
}
