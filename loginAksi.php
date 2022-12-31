<?php 
include 'koneksi.php';

$name       = $_POST['name'];
$password   = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$name' AND password ='$password' ");

$cek = mysqli_num_rows($login);
if ($cek > 0) {
    $data_user = mysqli_fetch_assoc($login);
    $_SESSION['id']         = $data_user['id'];
    $_SESSION['username']   = $name;
    $_SESSION['status']     = "Berhasil";

    header("location:views/index.php?status=login");
} else {
    header("location:index.php?status=gagal");
}
?>