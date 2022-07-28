<?php
include_once('db_connect.php');
$database = new database();
if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    if ($database->register($nama, $username, $email, $password)) {
        header('location:login.php');
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


    <title>Register</title>
</head>

<body>
    <main>
        <div class="regis-kiri">
            <h2 class="h2-mobile text-center">Selamat datang di BreadCode</h2>
            <img src="./lomba/Login Animation/Illustrations/Login BW/login bw.svg" width="700" alt="">
        </div>
        <div class="regis-kanan">
            <div class="container">
                <form action="" method="post">
                    <div class="row">
                        <div class="col mb-5">
                            <h2 class="h2-desktop">Selamat datang di BreadCode</h2>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col regis-form">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="masukan username">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="masukan email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="masukan password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col">
                            <p class="fs-6 regis-akun"> <a href="login.php">Sudah punya akun?</a> </p>
                            <button type="submit" class="btn-register mb-5" name="register">Register</button>
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