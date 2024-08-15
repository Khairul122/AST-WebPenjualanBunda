<?php

class DB
{
    public const HOST = "127.0.0.1";
    public const USER = "root";
    public const PASS = "";
    public const DB = "manda_floris";

    public $con;

    public function __construct()
    {
        $this->con = mysqli_connect(
            self::HOST,
            self::USER,
            self::PASS,
            self::DB
        );

        if (!$this->con) {
            # code...
            echo "<script> alert('Gagal terkoneksi ke database server') </script>";
        }
    }
}
