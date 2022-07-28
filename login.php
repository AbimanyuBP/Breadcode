<?php
session_start();
include_once('db_connect.php');
$database = new database();

if (isset($_SESSION['is_login'])) {
    header('location:home.php');
}

if (isset($_COOKIE['username'])) {
    $database->relogin($_COOKIE['username']);
    header('location:home.php');
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($_POST['remember'])) {
        $remember = TRUE;
    } else {
        $remember = FALSE;
    }

    if ($database->login($username, $password, $remember) == true) {
        header('location:menu.php');
    }
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
    <!-- <link rel="stylesheet" href="regis&login.css"> -->
    <link rel="stylesheet" href="regis&login.css?v=<?php echo time(); ?>">
    <link rel="icon" href="https://github.com/BreadcodeX/skidipapap/blob/main/logo22.png?raw=true%22%3E">
    <title>Login</title>
</head>

<body>
    <main>
        <div class="regis-kiri">
            <h2 class="h2-mobile text-center">Login ke BreadCode</h2>
            <img src="./lomba/Login Animation/Illustrations/Login BW/login bw.svg" width="700" alt="">
        </div>
        <div class="regis-kanan">
            <div class="container">
                <form action="" class="form-signin" method="post">
                    <div class="row">
                        <div class="col mb-5">
                            <h2 class="h2-desktop mb-4">Login ke BreadCode</h2>
                            <img class="logo-mobile" src="./lomba/logo22.png" width="70" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col login-form">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="masukan username" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="masukan password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <p class="fs-6 regis-akun"> <a href="register.php">Belum punya akun?</a> </p>
                            <button type="submit" name="login" class="btn-register mb-5">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>


</body>

</html>