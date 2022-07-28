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
    <link rel="stylesheet" href="menu.css">
    <link rel="icon" href="https://github.com/BreadcodeX/skidipapap/blob/main/logo22.png?raw=true%22%3E">
    <title>Menu</title>
</head>

<body>
    <main>
        <a href="#">
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
        <div class=" row">
            <div class="col-md-4 menu menu-materi">
                <a href="materi.php">
                    <img src="./lomba/E-Learning/E-learning.svg" alt="">
                </a>
                <h3>Materi<h3>
            </div>
            <div class="col-md-4 menu menu-forum">
                <a href="forum.php">
                    <img src="./lomba/Scrum Meeting/Scrum Meeting.svg" alt="">
                </a>
                <h3>Forum</h3>
            </div>
            <div class="col-md-4 menu menu-challenge">
                <a href="./main-challenge.php">
                    <img src="./lomba/Vision/Vision.svg" alt="">
                </a>
                <h3>Challenge</h3>
            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</body>

</html>