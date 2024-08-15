<?php

session_start();

// Import
require_once 'app/config/db.php';
require_once 'app/func/crud.php';
require_once 'app/func/fungsi.php';

// Fungsi Back End
$crud = new CRUD();
$fungsi = new Fungsi();

// Route
include_once 'app/routes/route.php';
