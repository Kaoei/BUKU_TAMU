<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white fs-4">Home</a>
                </li>
                <li class="nav-item">
                    <a href="daftar.php" class="nav-link text-white fs-4">Daftar</a>
                </li>
            </ul>
            <div class="collapse navbar-cola"></div>
        </div>
    </nav>
    <!-- end -->    
<?php
include "koneksi.php";
    $id_tamu = $_GET["id"];
   $data =  mysqli_query($koneksi, "SELECT * FROM tb_tamu WHERE id_tamu = '$id_tamu'");
   while($table = mysqli_fetch_array($data)){
        ?>
        <div>
            <h4>Nama : <?php echo $table['nama']; ?></h4>
            <h4>Email : <?php echo $table['email']; ?></h4>
            <h4>Komentar : <?php echo $table['komentar']; ?></h4>
            <h4>ID : <?php  echo $table['id_tamu']; ?></h4>
            <a href="find.php">Kembaliq</a>
        </div>
        <?php
   }
?>
</body>
</html>
