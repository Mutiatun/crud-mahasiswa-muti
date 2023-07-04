<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "universitas_muti";

$koneksi = mysqli_connect($host,$user,$password,$db);

if(!$koneksi) {
    die("Gagal terhubung dengan database");
}
?>