<?php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Siswa</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sistem Data Siswa</title>
</head>

<body>
    <!-- Navbar -->
    <marquee bgcolor="green" style="font-family: Arial; font-size:20px; color:#ffff;">SMKN 2 Purwodadi adalah Sekolah Menengah Kejuruan (SMK) Negeri yang berlokasi di Propinsi Jawa Tengah, Kabupaten Kab.Grobogan dengan alamat Jl Mh.Thamrin No. 50, Purwodadi 58113.</marquee>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">Sistem Informasi Data Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <h1><b>Selamat Datang Di Sistem Penyimpanan data Siswa Smk N2 Purwodadi</b></h1>
        <h3>Tahun Ajaran 2021/2022</h3>
    </header>

    <footer class="footer">
        <div class="footer-left">
            <div class="credit-cards">
                <img src="img/smk.png" alt="">
                <img src="img/smkbisa.jpeg" alt="">
            </div>
            <p class="footer-copyright">Smk Negeri 2 Purwodadi</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Indonesia</span> Purwodadi, Grobogan</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+62 097-625-727</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">smkn2pwdd@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>About</span>
                Visi Misi <br>
                Struktur Organisasi <br>
                Kepala Sekolah <br>
                Guru dan Karyawan <br>
                Kompetensi Keahlian <br>
                Mars SMK Negeri 2 Purwodadi <br>
                Lokasi SMKN 2 Purwodadi <br>
            </p>
        </div>

    </footer>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center" style="padding: 50px;">
        <b>© FTIK - Universitas Semarang</b>
        <p>Yudi Cahyono - <a target="_blank" style="color: #fff;">G.211.20.0035 | 2022</a></p>
    </footer>
    <!-- Close Footer -->
</body>

</html>