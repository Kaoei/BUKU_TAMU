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
include 'koneksi.php';
$field = $_POST['fields'];
$keyword = $_POST['search'];

echo "<h4>Kata Yang Dicari : $keyword</h4><br>";
echo "<h6>Pencarian Data Berdasarkan : $field</h6>";

$query = mysqli_query($koneksi, "SELECT * FROM tb_tamu WHERE $field LIKE '%$keyword%'");
?>

<ul>
<?php
while ($d = mysqli_fetch_array($query)) {
    echo "<li><a href='show.php?id=" . $d['id_tamu'] . "'>" . $d[$field] . "</a></li>";
}
?>
</ul>

</body>
</html>
