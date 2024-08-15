<?php

if (isset($_POST['sign_up'])) {
    # code...

    $level = $_POST['level'];

    $queryPengguna = $crud->read(
        "pengguna",
        "WHERE user = '$_POST[user]' AND level = '$level'"
    );

    if (mysqli_num_rows($queryPengguna) > 0) {
        # code...
        echo $fungsi->NotifRedirect(
            "Gagal Registrasi Akun",
            "Username yang anda masukan sudah digunakan",
            "warning",
            "?a=SignUp"
        );
    } else {
        # code...
        if (empty($_POST['jk'])) {
            # code...
            echo $fungsi->NotifRedirect(
                "Gagal Registrasi Akun",
                "Mohon lengkapi data input anda",
                "error",
                "?a=SignUp"
            );
        } else {
            # code...
            $crud->create(
                "pengguna",
                "user, pass, nama_pengguna, jk, nohp, alamat, level",
                "'$_POST[user]', '$_POST[pass]', '$_POST[nama_pengguna]', '$_POST[jk]', 
                 '$_POST[nohp]', '$_POST[alamat]', '$level'"
            );

            echo $fungsi->NotifRedirect(
                "Berhasil Registrasi Akun Anda",
                "Terimakasih dan silahkan login pada website kami",
                "success",
                "?a=SignIn"
            );
        }
    }
}
