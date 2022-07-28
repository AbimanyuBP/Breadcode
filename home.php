<?php

if (isset($_SESSIO["is_login"])) {
    header("location:menu.php");
    exit;
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
    <link rel="stylesheet" href="style.css">
    <title>BreadCode</title>
    <link rel="icon" href="https://github.com/BreadcodeX/skidipapap/blob/main/logo22.png?raw=true%22%3E">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mynav">
        <div class="container navbar-tes">
            <a class="navbar-brand" href="#">
                <img src="./lomba/logo22.png" alt="" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-md-auto">
                    <li class="nav-item">
                        <a class="nav-menu" href="#materi">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu" href="#forum">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu" href="#challenge">Challenge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-menu" href="#about">About Us</a>
                    </li>
                </ul>
                <button type="button" class="btn-logins"><a href="login.php">Login</a></button>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- hero -->
    <div class="hero">
        <div class="container heroo">
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <h2 class="mb-5">Programming mudah dengan BreadCode</h2>
                    <p class="fs-6 teks-isi">BreadCode adalah sebuah platform belajar berkonsep balok yang mudah
                        ditangkap
                        oleh
                        anak-anak,
                        platform ini bertujuan untuk mencetak programmer muda untuk masa depan </p>
                    <button type="button" class="btn-logins mt-4 btn-hero-desktop"><a href="login.php">Start
                            Journey</a></button>
                </div>
                <div class="col-md-5">
                    <img class="hero-img-desktop" src="./lomba/bocil home.png" width="500" alt="">
                    <img src="./lomba/hero-mobile.png" class="hero-img-mobile" width="400" alt="">
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="url(#grad1)" fill-opacity="1" d="M0,0L48,48C96,96,192,192,288,213.3C384,235,480,181,576,149.3C672,117,768,107,864,117.3C960,128,1056,160,1152,181.3C1248,203,1344,213,1392,218.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
        <defs>
            <linearGradient id="grad1" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color:#ffe19c;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#ffe19c;stop-opacity:0.3" />
            </linearGradient>
        </defs>
    </svg>
    <div class="container journey">
        <h2 class="mb-5 text-center">Ayo mulai Sekarang!
            <br>Bersama BreadCode!
        </h2>
        <button type="button" class="btn-logins btn-hero-mobile mb-5"><a href="login.php">Start
                Journey</a></button>
    </div>
    <!-- end hero -->

    <!-- fitur -->
    <div class="fitur-desktop">
        <div class="container">
            <div class="row fitur-space materi justify-content-evenly" id="materi">
                <div class="col-md-6">
                    <img src="./lomba/materihome.png" width="450" alt="">
                </div>
                <div class="col-md-4 mt-5">
                    <h2>Materi</h2>
                    <p class="fs-5">Dengan penjelasan yang
                        mudah dicerna dan bisa
                        langsung diaplikasikan di
                        mode playground</p>
                </div>
            </div>
            <div class="row fitur-space justify-content-evenly" id="forum">
                <div class="col-md-4 mt-5">
                    <h2>Forum</h2>
                    <p class="fs-5">Jika murid kesulitan dalam
                        suatu materi, murid dapat
                        mengunjungi forum dimana
                        murid bisa saling berinteraksi
                        dan membantu satu sama lain</p>
                </div>
                <div class="col-md-6">
                    <img src="./lomba/forumhome.png" width="450" alt="">
                </div>
            </div>
            <div class="row fitur-space justify-content-evenly" id="challenge">
                <div class="col-md-6">
                    <img src="./lomba/chalengehome.png" width="450" alt="">
                </div>
                <div class="col-md-4 mt-5">
                    <h2>Challenge</h2>
                    <p class="fs-5">Tiap minggu mentor akan
                        membuat challenge atau tantangan bagi murid untuk
                        menjawab, dengan menggunakan
                        semua skill yang sudah murid
                        pelajari</p>
                </div>
            </div>
        </div>
    </div>

    <!-- fitur mobile -->
    <div class="fitur-mobile">
        <div class="container">
            <div class="row  materi justify-content-evenly pt-5" id="materi">
                <div class="col-10 pt-5 pb-5 text-center">
                    <h2>Kalian ngapain aja sih di BreadCode??</h2>
                </div>
                <div class="col-10 text-center mb-3">
                    <h2>Materi</h2>
                </div>
                <div class="col mb-5">
                    <img src="./lomba/materihome.png" width="450" alt="">
                    <p class="fs-5 mt-3">Dengan penjelasan yang
                        mudah dicerna dan bisa
                        langsung diaplikasikan di
                        mode playground</p>
                </div>
            </div>
            <div class="row  justify-content-evenly" id="forum">
                <div class="col text-center mb-3">
                    <h2>Forum</h2>
                </div>
                <div class="col mb-5">
                    <img src="./lomba/forumhome.png" width="450" alt="">
                    <p class="fs-5 mt-3">Dengan penjelasan yang
                        mudah dicerna dan bisa
                        langsung diaplikasikan di
                        mode playground</p>
                </div>
            </div>
            <div class="row  justify-content-evenly" id="challenge">
                <div class="col text-center mb-3">
                    <h2>Challenge</h2>
                </div>
                <div class="col mb-5">
                    <img src="./lomba/chalengehome.png" width="450" alt="">
                    <p class="fs-5 mt-3">Dengan penjelasan yang
                        mudah dicerna dan bisa
                        langsung diaplikasikan di
                        mode playground</p>
                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="url(#grad2)" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,53.3C384,64,480,96,576,144C672,192,768,256,864,250.7C960,245,1056,171,1152,149.3C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
        <defs>
            <linearGradient id="grad2" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color:#ffe19c;stop-opacity:0.3" />
                <stop offset="100%" style="stop-color:#ffe19c;stop-opacity:1" />
            </linearGradient>
        </defs>
    </svg>
    <!-- end fitur -->

    <!-- about us -->
    <div class="about pb-5 pt-5" id="about">
        <div class="container pt-5">
            <div class="row pb-5">
                <div class="col text-center">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="aboutus-desktop row card-desktop justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="atas"></div>
                        <div class="isi">
                            <img src="./lomba/poto1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="fs-4">Reihan Setya Abida</p>
                                <p>FullStack Developer</p>
                                <p class="fst-italic mt-4">“if you can’t stand the
                                    <br>fatigue of study, you will
                                    feel the poignant
                                    of stupidity“
                                </p>
                                <div class="sosmed mt-5">
                                    <img src="./lomba/instagram (1).svg" alt="">
                                    <img src="./lomba/github.svg" alt="">
                                    <img src="./lomba/twitter.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="atas"></div>
                        <div class="isi">
                            <img src="./lomba/abim" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="fs-4">Abimanyu Bevan Pramudito</p>
                                <p>FullStack Developer</p>
                                <p class="fst-italic mt-4">“It’s your road and yours alone
                                    other may walk it with you, but
                                    no one can walk it for you”</p>
                                <div class="sosmed mt-5">
                                    <img src="./lomba/instagram (1).svg" alt="">
                                    <img src="./lomba/github.svg" alt="">
                                    <img src="./lomba/twitter.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row aboutus-mobile">
                <div class="col">
                    <div class="card" onclick="showMe('card1')">
                        <img src="./lomba/poto1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>Reihan Setya Abida</h6>
                            <p>FullStack Developer</p>
                        </div>
                        <div class="hotlink" id="card1">
                            <img src="./lomba/instagram (1).svg" alt="">
                            <img src="./lomba/github.svg" alt="">
                            <img src="./lomba/twitter.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" onclick="showMe('card2')">
                        <img src="./lomba/abime.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>Abimanyu Bevan Pramudito</h6>
                            <p>FullStack Developer</p>
                        </div>
                        <div class="hotlink" id="card2">
                            <img src="./lomba/instagram (1).svg" alt="">
                            <img src="./lomba/github.svg" alt="">
                            <img src="./lomba/twitter.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about us -->

    <!-- footer -->
    <footer class="text-center pb-3">
        <p></p>Copyright &copy; BreadCode 2021
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    <script src="./script.js"></script>
</body>

</html>