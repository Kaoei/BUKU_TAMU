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
                    <a href="daftar.php" class="nav-link text-white fs-4">Daftar</a>
                </li>
            </ul>
            <div class="collapse navbar-cola"></div>
        </div>
    </nav>
    <!-- end -->


    <main>
        <section>
            <form action="add.php" method="POST" class="bukutamu">
            <table class="form">
            <h1>Buku Tamu</h1>
            <tr>
                <td>
                    <label for="nama">Nama :</label>
                    <input type="text" name="name" id="nama">
                </td>
            </tr>
           <tr>
            <td>
                <label for="tanggal">Email : </label>
                <input type="email" name="email" id="tanggal">
            </td>
           </tr>
           <tr>
            <td>
                <label for="kesan">Komentar :</label>
                <textarea name="komentar" id="komentar" cols="40" rows="4" id="kesan"></textarea>
            </td> 
            </table>
            <button type="submit" style="margin:20px 100px;">Submit</button>
            </form>
        </section>
    </main>
    
</body>
</html>