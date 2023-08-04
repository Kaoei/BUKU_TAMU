<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
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

    <form action="find_action.php" class="border" style="width: 450px; margin:20vh 65vh; padding:40px;" method="POST" id="Form">
    <div class="mb-3">
        <label>Kategori :</label>
        <select name="fields" class="form-control">
            <option value="kosong">--Select--</option>
            <option value="nama">Nama</option>
            <option value="komentar">Komentar</option>
            <option value="email">Email</option>
            <option value="tanggal">Tanggal</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="search">Cari kata :</label>
        <input type="text" name="search" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit">SUBMIT</button>
        <button type="button" onclick="reset()">Reset</button>
    </div>
</form>


<script>
    function reset(){
        document.getElementById("Form").reset();
    }
</script>

   



</body>
</html>
