<?php 
if ($_SESSION['status']=="") {
    header("location:../index.php?status=belumlogin");
}
?>