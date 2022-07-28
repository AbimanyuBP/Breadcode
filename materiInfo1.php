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

    <title>Operator</title>
    <link rel="icon" href="https://github.com/BreadcodeX/skidipapap/blob/main/logo22.png?raw=true%22%3E">
    <link rel="stylesheet" href="materiInfo.css">
</head>

<body>

    <!-- Start -->
    <nav>
        <a href="./materi.php">
            <svg xmlns="http://www.w3.org/2000/svg" class="img-1" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
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
    </nav>
    <div class="container">
        <div id="materi1" class="materi">
            <div class="row">
                <div class="col text-center">
                    <h3>Pengenalan Variable</h3>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-around mt-5">
                <div class="col-md-5 mt-3">
                    <p>Variabel merupakan sebuah konsep yang akan sering kita temui dalam programming, Variabel bisa
                        kita anggap sebagai nama dari sebuah data, kita perlu memberi nama pada sebuah data karena dalam
                        program data akan sering berubah <br><br> jadi untuk mempermudah kita perlu memberi nama kepada
                        data
                        tersebut agar mudah dicari, nah nama itu kita sebut variabel dalam programming</p>
                </div>
                <div class="col-md-5">
                    <img src="./lomba/ss1(1).png" width="400" alt="ss an roti">
                </div>
            </div>
            <div class="row row-btn justify-content-between">
                <div class="col-md-11 text-end ">
                    <a href="#" onclick="opentag('materi2')">
                        <button type="button" id='btn' class="btn-bread">Selanjutnya</button>
                    </a>
                </div>
            </div>
        </div>
        <div id="materi2" class="materi" style="display: none;">
            <div class="row">
                <div class="col text-center">
                    <h3>Penggunaan blok variable</h3>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-around mt-5">
                <div class="col-md-5 mt-3">
                    <p>Untuk pembelajaran kita akan menggunakan blok ini untuk menunjukan hubungan antara variabel dan
                        datanya, kalian dapat memberikan nama sendiri untuk variabelnya.
                        <br><br>
                        Pastikan untuk menggunakan nama yang benar agar kalian tidak kebingungan saat mencari data
                        tertentu, kalian bisa menghubungkan blok variabel ini ke blok lain, eksperimen dan cari
                        kombinasi yang benar
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="./lomba/ss2.png" width="400" alt="ss an roti">
                </div>
            </div>
            <div class="row row-btn">
                <div class="col-md-6 ms-5">
                    <a href="#" onclick="opentag('materi1')">
                        <button type=" button" id='btn' class="btn-bread ">Sebelumnya</button>
                    </a>
                </div>
                <div class="col-md-4 ms-5 text-end">
                    <a href="Snap-6.8.1 breadcode\snap.html">
                        <button type="button" id='btn' class="btn-bread">Implementasi</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- end -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script>
        function opentag(namatag) {
            var i;
            var x = document.getElementsByClassName("materi");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(namatag).style.display = "block";
        }
    </script>
</body>

</html>