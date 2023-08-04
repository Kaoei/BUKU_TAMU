<?php
$koneksi = mysqli_connect("localhost","root","","bukutamu");

if(mysqli_connect_errno()){
    echo "gagal".mysqli_connect_errno();
}
?>