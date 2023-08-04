<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buku tamu</title>
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
                    <a href="index.php" class="nav-link text-white fs-4">Daftar</a>
                </li>
            </ul>
            <div class="collapse navbar-cola"></div>
        </div>
    </nav>
    <!-- end -->

    <main>
        <section>
            <h1 style="text-align: center;">Daftar </h1>
            <a href="find.php">Cari Data</a>
            <!--Table Data-->
    <table class="table bg-dark text-white w-75" style=" margin:0 auto;">
    <thead class="thead-dark">
      <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Komentar</th>
      <th scope="col">Email</th>    
      <th scope="col">Tanggal</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
  include 'koneksi.php';
  $data = mysqli_query($koneksi,"select * from tb_tamu  ");
  while($table = mysqli_fetch_array($data)){
    ?>
    <tbody class="bg-light text-dark">
    <td><?php echo $table['id_tamu']?></td>
    <td><?php echo $table['nama']?></td>
    <td><?php echo $table['komentar']?></td>
    <td><?php echo $table['email']?></td>
    <td><?php echo $table['tanggal']?></td>
    <td>
        <a href="hapus.php?id_tamu=<?php echo $table['id_tamu']?>">Hapus</a>
    </td>
    </tbody>
    <?php
  }
  ?>
    </table>
    </center>
        </section>
    </main>
</body>
</html>