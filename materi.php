<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- my css -->
    <!-- <link rel="stylesheet" href="./materi.css"> -->
    <link rel="stylesheet" href="materi.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css?v=<?php echo time(); ?>">
    <link rel="icon" href="https://github.com/BreadcodeX/skidipapap/blob/main/logo22.png?raw=true%22%3E">
    <title>Materi pelajaran</title>
</head>

<body>
    <!-- Header Baby! -->
    <a href="./menu.php">
        <img src="./lomba/logo22.png" class="img-1" width="90" alt="">
    </a>
    <div class="dropdown">
        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="./lomba/menu orang.png" width="60" class="rounded-circle img-2 " alt="">
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Notifikasi <span class="badge bg-secondary">2</span></a></li>
            <li><a class="dropdown-item" href="#"> <?php echo $_SESSION["username"] ?></a></li>
            <li><a class="dropdown-item" href="./logout.php" type="submit">Logout</a></li>
        </ul>
    </div>
    <!-- End Header -->

    <!-- Start Materi Boogie Woogie -->
    <div class="container">
        <div class="row">
            <div class=" col-4 text-center materi materi-top materib">
                <a href="./materiInfo1.php"><img src="./lomba/materi/materi1.png" alt=""></a>
                <h3>Variable<h3>
            </div>
            <div class="col-4 text-center materi materi-top">
                <a href="#" id="tombol-materi"><img src="./lomba/materi/materi2.png" alt=""></a>
                <h3>Operator</h3>
            </div>
            <div class="col-4 text-center materi materi-top">
                <a href="#" id="tombol-materi"><img src="./lomba/materi/materi3.png" alt=""></a>
                <h3>Percabangan</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-center materi materi-bottom">
                <a href="#" id="tombol-materi"><img src="./lomba/materi/materi4.png" alt=""></a>
                <h3>Perulangan<h3>
            </div>
            <div class="col-4 text-center materi materi-bottom">
                <a href="#" id="tombol-materi"><img src="./lomba/materi/materi5.png" alt=""></a>
                <h3>Fungsi</h3>
            </div>
            <div class="col-4 text-center materi materi-bottom">
                <a href="#" id="tombol-materi"><img src="./lomba/materi/materi6.png" alt=""></a>
                <h3>Class</h3>
            </div>
        </div>
    </div>

    <!-- End Materi Boogie Woogie-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const tombol = document.querySelectorAll('#tombol-materi');
        tombol.forEach(function(w) {
            w.addEventListener('click', function(el) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Fitur belum tersedia untuk saat ini',
                })
            })
        })
    </script>

</body>

</html>