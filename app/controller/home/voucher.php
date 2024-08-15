<?php

$no = 0;

$viewData = $crud->read(
    "voucher",
    "ORDER BY min_belanja DESC"
);
