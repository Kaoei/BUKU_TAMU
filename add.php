<?php
include 'koneksi.php';

$nama =$_POST["name"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];

mysqli_query($koneksi,"insert into tb_tamu values(' ' ,'$nama','$komentar','$email',sysdate())");

header("location:daftar.php");
?>