<?php
$con = mysqli_connect('localhost', 'root', '', 'indopmm');
if (!$con) {
    echo 'Gagal terhubung ke database';
    die;
}
