<?= $this->extend('Layout/template') ?>
 
<?= $this->section('content') ?>
<div class="container">
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
        
        <div class="card">
            <div class="card-body">
                <strong>Gempabumi di Rasakan</strong>
                <!--perlu curl-->
            </div>
        </div>

        <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLErM6ZFc6NXMz04wh_Q9pxj0tliU4-wId" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen></iframe>
        </div>

        <div>
            <strong>Layanan Stasiun Geofisika Denpasar</strong>
            <div class="card" id="card-layanan">
                <div class="card-body">
                    <h5>Informasi Gempabumi & Tsunami</h5>
                </div>
            </div>
            <div class="card" id="card-layanan">
                <div class="card-body">
                    <h5>Layanan Data</h5>
                </div>
            </div>
            <div class="card" id="card-layanan">
                <div class="card-body">
                    <h5>Kunjungan Siswa</h5>
                </div>
            </div>
            <div class="card" id="card-layanan">
                <div class="card-body">
                    <h5>Kerja Praktek</h5>
                </div>
            </div>
        </div>
</div>
<?= $this->endSection() ?>