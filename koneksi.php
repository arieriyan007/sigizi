<?php 

date_default_timezone_set("Asia/Makassar");

$koneksi = mysqli_connect("localhost","root","","gizi");
if (mysqli_connect_errno()) {
    echo "Gagal Koneksi ke database";
}

?>