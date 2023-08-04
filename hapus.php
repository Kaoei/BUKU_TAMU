<?php
include 'koneksi.php';
$key =  $_GET['id_tamu'];
mysqli_query($koneksi,"DELETE FROM tb_tamu WHERE id_tamu ='$key'");
header("location:daftar.php");
?>