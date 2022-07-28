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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="icon" href="https://github.com/BreadcodeX/skidipapap/blob/main/logo22.png?raw=true%22%3E">
    <title>Challenge</title>
    <link rel="stylesheet" href="main-challenge.css?v=<?php echo time(); ?>">

</head>

<body>
    <!--Start Header-->
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
    <!--End Header-->

    <!--Start Challenge Pick-->
    <div class="container">
        <div class="row">
            <div class="col-4 chal1">
                <div class="infomamen real">
                    <a href="./Snap-6.8.1 breadcode\snap2.html">
                        <img src="./lomba/main-challenge/listbelanja.png" alt="" class="logochal">
                    </a>
                    <div class="konten mt-3">
                        <p class="judul">Simple Loop</p>
                        <img src="./lomba/main-challenge/easy.png" alt="" class="ez">
                    </div>
                    <p>Buatlah sebuah perulangan angka dari 1 hingga 10 lalu kemudian dicetak</p>
                </div>
            </div>
            <div class="col-4 chal1">
                <div class="infomamen">
                    <a href="#"><img src="./lomba/main-challenge/fizzbuzz.png" alt="" class="logochal"></a>
                    <div class="konten mt-3">
                        <p class="judul">FizzBuzz</p>
                        <img src="./lomba/main-challenge/medium.png" alt="" class="ez">
                    </div>
                    <p>Buat sebuah list dengan menggunakan perulangan yang berisikan list belanja</p>
                </div>
            </div>
            <div class="col-4 chal1">
                <div class="infomamen">
                    <a href="#"><img src="./lomba/main-challenge/kalkulator.png" alt="" class="logochal"></a>
                    <div class="konten mt-3">
                        <p class="judul">Mini-Kalkulator</p>
                        <img src="./lomba/main-challenge/medium.png" alt="" class="ez">
                    </div>
                    <p>Buat sebuah kalkulator simpel yang bisa melakukan pertambahan, pengurangan, serta perkalian</p>
                </div>
            </div>
        </div>
    </div>
    <!--End Challenge Pick-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>