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
    

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    
    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <!-- CONTUM CSS -->
    <style>

    @keyframes fade { 
    from { opacity: 0; } 
    }

    .blinking {
    animation: fade 2s infinite alternate;
    }

    p {
        text-align: justify;
    }

    </style>

    <title>Geofisika Denpasar</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('gambar/logo bmkg.png') ?>">
</head>
<body onload = display_jam()>
    <div class="container-fluid" id="box-jam">
        <div class="container" >
            <span id="jam"></span>
        </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url('/beranda') ?>"><img src="<?php echo base_url('gambar/STASIUN_GEOFISIKA_DENPASAR.png') ?>" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('/sejarah') ?>">Sejarah</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/visiMisi') ?>">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/tugas') ?>">Tugas & Fungsi</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/struktur') ?>">Struktur Organisasi</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Informasi Layanan</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('/layanan') ?>">Standar Pelayanan</a></li>
                        <li><a class="dropdown-item" href="#">Ketersediaan Data</a></li>
                        <li><a class="dropdown-item" href="#">Form Permohonan Data</a></li>
                        <li><a class="dropdown-item" href="#">Form Pengaduan Layanan</a></li>
                        <li><a class="dropdown-item" href="https://eskm.bmkg.go.id/survey/437344/0/2/2023-11/2023/0">E-SKM BMKG</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Informasi Gempabumi Wilayah Bali</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('/infogempaterkini') ?>">Gempa Bumi Terkini</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/visiMisi') ?>">Gempa Bumi Dirasakan</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/tugas') ?>">Gempa Bumi M > 5 SR</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Publikasi</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Buletin</a></li>
                        <li><a class="dropdown-item" href="https://www.youtube.com/channel/UChOunbpZLEeppdisO9m8TFA">Youtube</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        
<div class="container mb-3">
    <div class="row content mt-2">
        <div class="col-lg-8">
        <?= $this->renderSection('content') ?>
        </div>
        <div class="col-lg-4">
            <div class="container">
            <?php
                    $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                    $shakemap = $data->gempa->Shakemap;
                    ?>
                <div class="card">
                    <div class="card-header" style="background-color:#343f52; color: white;"><h5>ShakeMap Gempa Terkini</h5></div>
                    <div class="card-body">
                        <div class="col-lg-12 gempa-map"><img src="https://data.bmkg.go.id/DataMKG/TEWS/<?=$shakemap?>" width="100%" alt="informasi gempa bumi region 3"></div>
                    </div>      
                </div>
            </div>
            <div class="container mt-2">
                <div class="card">
                    <div class="card-header" style="background-color:#343f52; color: white;" >
                        <h5>Press Release / Artikel</h5>
                    </div>
                    <div class="content-body">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">Simulasi Kesiapsiagaan Gempabumi dan Tsunami ITDC</h5>
                                <p class="card-text">Berdasarkan Undang-Undang Nomor 24 Tahun 2007 tentang Penanggulangan Bencana, maka tanggal 26 April 2023 ditetapkan sebagai Hari Kesiapsiagaan Bencana Nasional (HKBN). .....</p>
                                <a href="<?php echo base_url('artikel/20230427') ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">Rangkaian BMKG Goes to School Kabupaten Buleleng </h5>
                                <p class="card-text">Sebagai tidak lanjut kegiatan Sekolah Lapang Gempabumi yang diadakan di Kabupaten Buleleng wilayah Desa Pengastulan, Stasiun Geofisika Denpasar melakukan kegiatan BMKG Goes To School....</p>
                                <a href="<?php echo base_url('artikel/20230905') ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pelatihan Penanggulangan Bencana Alam Di Wilayah Kerja Lanal Denpasar 2023</h5>
                                <p class="card-text">Berdasarkan rapat pimpinan TNI-Polri tahun 2023 yang dilaksanakan pada hari Rabu, 8 Februari 2023. Presiden RI Joko Widodo menyebutkan bahwa pemerintah telah menetapkan tujuh prioritas nasional ....</p>
                                <a href="<?php echo base_url('artikel/20230208') ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-2">
            <?php
                    $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                    $shakemap = $data->gempa->Shakemap;
                    ?>
                <div class="card">
                    <div class="card-header" style="background-color:#343f52; color: white;"><h5>Indeks Kepuasan Masyarakat</h5></div>
                    <div class="card-body">
                        <div class="col-lg-12"><img src="<?php echo base_url('gambar/ikmDNP.png') ?>" alt="" width="100%"></div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>





        <p><?= $this->renderSection('content') ?></p>

        <div class="container-fluid">
            <div class="row" id="footer-info">
                <div class="col-xs-12 col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1532436586704!2d115.20741827476296!3d-8.67697329137098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240c235c98933%3A0xc5a57e03744b5d3!2sKantor%20BMKG%20Stasiun%20Geofisika%20Sanglah%20Denpasar!5e0!3m2!1sid!2sid!4v1683617984105!5m2!1sid!2sid" width="auto" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-xs-12 col-md-4">
                    <p><strong>STASIUN GEOFISIKA DENPASAR</strong></p>
                    <p>Jl. Pulau Tarakan No. 1 Sanglah, Dauh Puri Kelod,
                    </br>
                        Denpasar Barat, Denpasar - Bali 80114
                    </br></br>
                        Telp (0361) 226157
                    </br>
                        Fax (0361) 226690
                    </br></br>
                    <strong>Email:</strong>
                    </br>
                    stageof.denpasar@bmkg.go.id
                    </br>
                    bmkg.denpasar@gmail.com
                    </p>
                    </br> 
                </div>
                <div class="col-xs-12 col-md-4">
                    <span><strong>Aplikasi Mobile BMKG</strong></span>
                    <p class="col-xs-12 col-md-6">Semua informasi mengenai Prakiraan Cuaca, Iklim, Kualitas Udara,
                        dan Gempabumi yang terjadi di Indonesia tercakup
                         dalam satu aplikasi mobile.</p>
                    <div class="row">
                        <div class="col-xs-4 col-md-3"><a href="https://play.google.com/store/apps/details?id=com.Info_BMKG" target="_blank"><img src="<?php echo base_url('gambar/googleplay.png') ?>" class="img-apps-footer" alt="googleplay" ></a></div>
                        <div class="col-xs-6 col-md-3"><a href="https://apps.apple.com/id/app/info-bmkg/id1114372539?l=id?l=id" target="_blank"><img src="<?php echo base_url('gambar/appstore.png') ?>" class="img-apps-footer" alt="applestore"></a></div>
                    </div>

                    </br><strong><p>FIND US</p></strong>
                    <a class="sosmed-icon" href="#"><i class="bi bi-whatsapp"></i></a>  
                    <a class="sosmed-icon" href="#"><i class="bi bi-instagram"></i></a>
                    <a class="sosmed-icon" href="#"><i class="bi bi-facebook"></i></a>
                    <a class="sosmed-icon" href="#"><i class="bi bi-twitter"></i></a>
                    <a class="sosmed-icon" href="#"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
        <footer class="container-fluid" id="copyright"><p>2023 | Stasiun Geofisika Denpasar</p></footer>
    
    <script>
    var map = L.map('map').setView([51.505, -0.09], 13);
    </script>
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
