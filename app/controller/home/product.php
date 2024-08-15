<?php

$no = 0;
$level = "Pelanggan";

$viewData = $crud->read(
    "produk x, kategori y",
    "WHERE x.id_kategori = y.id_kategori"
);
