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
    <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'> -->
    <link rel="stylesheet" href="./forum.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css?v=<?php echo time(); ?>">
    <link rel="icon" href="https://github.com/BreadcodeX/skidipapap/blob/main/logo22.png?raw=true%22%3E">
    <title>Forum</title>
</head>

<body>
    <!-- <main>
        <div class="row main justify-content-center">
            <div class="col-md-3  kiri">
                <div class="row content">
                    <div class="col-12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                        </svg>
                    </div>
                    <div class="col-12">
                        <h5>List Materi</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-9  kanan">
                <div class="row">
                    <div class="col">
                        <img src="./lomba/logo22.png" width="60" alt="">
                    </div>
                    <div class="col ">
                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="./lomba/menu orang.png" width="40" class="rounded-circle img-2 " alt="">
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Notifikasi <span
                                            class="badge bg-secondary">2</span></a></li>
                                <li><a class="dropdown-item" href="#">Ariana Grande</a></li>
                                <li><a class="dropdown-item" href="home.html">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> -->

    <main>
        <div class="kiri">
            <div class="container">
                <div class="row mt-3">
                    <div class="col">
                        <a href="./menu.php" class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <h3>List Materi</h3>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 materi text-center">
                        <button type="button" class="btn-materi materi-belom"><a href="#">Materi 1</a></button>
                    </div>
                    <div class="col-12 materi text-center">
                        <button type="button" class="btn-materi materi-belom"><a href="#">Materi 2</a></button>
                    </div>
                    <div class="col-12 materi text-center">
                        <button type="button" class="btn-materi materi-belom"><a href="#">Materi 3</a></button>
                    </div>
                    <div class="col-12 materi text-center">
                        <button type="button" class="btn-materi materi-belom"><a href="#">Materi 4</a></button>
                    </div>
                    <div class="col-12 materi text-center">
                        <button type="button" class="btn-materi materi-belom"><a href="#">Materi 5</a></button>
                    </div>
                    <div class="col-12 materi text-center">
                        <button type="button" class="btn-materi materi-akhir"><a href="#">Materi 6</a></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="kanan">
            <div class="container kanan">
                <div class="row justify-content-center mt-2">
                    <div class="col-6">
                        <a href="#">
                            <img src="./lomba/logo22.png" class="img-1" width="60" alt="">
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <div class="dropdown kanan-img">
                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./lomba/menu orang.png" width="60" class="rounded-circle img-2 " alt="">
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Notifikasi <span class="badge bg-secondary">2</span></a></li>
                                <li><a class="dropdown-item" href="#"> <?php echo $_SESSION["username"] ?></a></li>
                                <li><a class="dropdown-item" href="./logout.php" type="submit">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul id="ul" class="ul">
                    <div class="row mt-5" id="row">
                        <li>
                            <div class="card">
                                <div class="card-body card-profile">
                                    <img src="./lomba/admin forum.png" class="rounded-circle" width="40" alt="">
                                    <h5 class="nama-profile ms-2 ">Dodit Suherman</h5>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Penggunaan Percabangan</h5>
                                    <p class="card-text">Untuk membuat kondisi percabangan menggunakan blok kode if
                                        dan
                                        else, if
                                        akan berjalan jika kondisi bernilai benar dan else akan berjalan jika
                                        kondisi
                                        bernilai
                                        salah</p>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
                <!-- <div class="row mt-4">
                    <div class="card">
                        <div class="card-body card-profile">
                            <img src="./lomba/admin forum.png" class="rounded-circle" width="40" alt="">
                            <h5 class="nama-profile ms-2 ">Dodit Suherman</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Penggunaan Percabangan</h5>
                            <p class="card-text">Untuk membuat kondisi percabangan menggunakan blok kode if dan else, if
                                akan berjalan jika kondisi bernilai benar dan else akan berjalan jika kondisi bernilai
                                salah</p>
                        </div>
                    </div>
                </div> -->
                <div class="row mt-4">
                    <div class="kanan-kotak">
                        <textarea class="area-tanya" id="input" placeholder="Masukan pertanyaanmu...."></textarea><br>
                        <button type="button" id='btn' class="btn-tanya">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script>
        const add = document.getElementById('btn');
        const ul = document.getElementById('ul');
        const inp = document.getElementById('input');
        const del = document.createElement('span');
        const li = document.querySelector('li')
        const angka = document.querySelector('.clear h3');
        const row = document.getElementById('row')
        const card = document.querySelector('.card')

        //fungsi add
        add.addEventListener('click', function() {
            let txt = inp.value
            if (txt == '') {
                // alert('Untuk mengi');
                Swal.fire({
                    icon: 'error',
                    title: 'harap diisi textboxnya',
                })
            } else {
                // const del = document.createElement('span');
                // del.setAttribute("id", "closee")
                // const delTxt = document.createTextNode('x');
                // del.append(delTxt);
                // li.append(del);

                const li = document.createElement('li');
                const cartu = document.createElement('div');
                cartu.setAttribute('class', 'card')
                const cartubody = document.createElement('div');
                cartubody.setAttribute('class', 'card-body')
                const cartubody2 = document.createElement('div');
                cartubody2.setAttribute('class', 'card-body');


                cartu.appendChild(cartubody);
                cartu.appendChild(cartubody2)
                cartubody.innerHTML =
                    ' <img src="./lomba/menu orang.png" class="rounded-circle" width="40" alt=""> &nbsp <h5><?php echo $_SESSION["username"] ?></h5>';
                cartubody.style.display = 'flex'
                cartubody.style.alignItems = 'center'
                // cartubody.style.justifyContent = 'flex-end'
                cartubody2.append(txt);
                row.appendChild(li);
                li.appendChild(cartu);


                // ul.appendChild(li);
                document.querySelector(".ul").style.textTransform = "capitalize";
                inp.value = ''

                count()
            }
        })

        const materi = document.querySelectorAll('.materi-belom');
        materi.forEach(function(el) {
            el.addEventListener('click', function() {
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