<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('style.css') ?>"/>

    <!-- bootstrap js-->
    
    <title>Geofisika Denpasar</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('gambar/logo bmkg.png') ?>">
</head>
<body onload = display_jam()>
        <div class="container-fluid" id="box-jam">
            <span id="jam"></span>
        </div>

        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container">
                <a class="navbar-brand" href=""><img src="<?php echo base_url('gambar/STASIUN_GEOFISIKA_DENPASAR.png') ?>" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sejarah</a></li>
                        <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="#">Tugas & Fungsi</a></li>
                        <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Informasi Layanan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Standar Pelayanan</a></li>
                        <li><a class="dropdown-item" href="#">Ketersediaan Data</a></li>
                        <li><a class="dropdown-item" href="#">Form Permohonan Data</a></li>
                        <li><a class="dropdown-item" href="https://eskm.bmkg.go.id/survey/437344/0/2/2023-06/2023/0">E-SKM BMKG</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Informasi Gempabumi & Tsunami</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Publikasi</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Buletin</a></li>
                        <li><a class="dropdown-item" href="#">Youtube</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                <img src="<?php echo base_url('gambar/DSC_1.JPG') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="<?php echo base_url('gambar/DSC_2.JPG') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="<?php echo base_url('gambar/DSC_3.JPG') ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container-fluid">
            <div class="row" id="footer-info">
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1532436586704!2d115.20741827476296!3d-8.67697329137098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240c235c98933%3A0xc5a57e03744b5d3!2sKantor%20BMKG%20Stasiun%20Geofisika%20Sanglah%20Denpasar!5e0!3m2!1sid!2sid!4v1683617984105!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col">
                    <p><strong>STASIUN GEOFISIKA DENPASAR</strong></p>
                    <p>
                        Jl. Pulau Tarakan No. 1 Sanglah, Dauh Puri Kelod,
                    </br>
                        Denpasar Barat, Denpasar - Bali 80114
                    </br>
                    </br>
                        Telp (0361) 226157
                    </br>
                        Fax (0361) 226690
                    </br>
                    </br>
                    <strong>Email:</strong>
                    </br>
                    stageof.denpasar@bmkg.go.id
                    </br>
                    bmkg.denpasar@gmail.com
                    </p>
                    </br> 
                </div>
                <div class="col">
                    <strong>Aplikasi Mobile BMKG</strong>
                    <div class="col"><img src="<?php echo base_url('gambar/googleplay.png') ?>" class="img-apps-footer" alt="googleplay"></div>
                    <div class="col"><img src="<?php echo base_url('gambar/appstore.png') ?>" class="img-apps-footer" alt="googleplay"></div>

                    <strong><p>FIND US</p></strong>
                    <span class="sosmed-icon" href="#"><i class="bi bi-whatsapp"></i></span>
                    <span class="sosmed-icon" href="#"><i class="bi bi-instagram"></i></span>
                    <span class="sosmed-icon" href="#"><i class="bi bi-facebook"></i></span>
                    <span class="sosmed-icon" href="#"><i class="bi bi-twitter"></i></span>
                    <span class="sosmed-icon" href="#"><i class="bi bi-youtube"></i></span>
                </div>
            </div>
        </div>
        <footer class="container-fluid" id="copyright"><p>2023 | Stasiun Geofisika Denpasar</p></footer>
    

    <!-- Jquery dan Bootsrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function display_jam(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('jam()',refresh)
        }

        function jam() {
            var x = new Date()
            document.getElementById('jam').innerHTML = x;
            display_jam();
        }
    </script>

</body>
</html>
