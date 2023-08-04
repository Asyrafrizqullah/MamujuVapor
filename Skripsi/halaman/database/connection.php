<?php
$host = 'localhost'; //nama host
$user = 'root'; //username untuk mengakses database
$pass = ''; //password untuk mengakses database
$dbname = 'db_mamujuvapor'; //nama database

//membuat koneksi dengan mysqli
$conn = mysqli_connect($host, $user, $pass, $dbname);

//mengecek apakah koneksi berhasil atau tidak
if (!$conn) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}
