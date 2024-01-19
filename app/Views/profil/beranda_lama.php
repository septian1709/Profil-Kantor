<?= $this->extend('Layout/template') ?>
 
<?= $this->section('content') ?>

<div class="container mb-3">
    <div class="row content">
        <div class="col-lg-8">
            <div>
                <h5>Gempa Realtime</h5>
            </div>
            <iframe src="https://inatews.bmkg.go.id/wrs/index3.html" width="100%" height ="600px" allowfullscreen="true"></iframe>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" hidden>
                <div class="container carousel-inner">
                    <div class="carousel-item active" data-bs-interval="20000">
                    <iframe src="https://inatews.bmkg.go.id/wrs/index.html" width="100%" height ="600px"></iframe>
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
        </div>
        <div class="col-lg-4">
            <div>
                <h5>Informasi gempa dirasakan</h5>
            </div>
            <?php
                    $data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml") or die("Gagal mengakses!");
                    $shakemap = $data->gempa->Shakemap;
            ?>
            <div class="content-box">
                <div class="col-lg-12 gempa-map"><img src="https://data.bmkg.go.id/DataMKG/TEWS/<?=$shakemap?>" width="100%" alt="informasi gempa bumi region 3"></div>
            </div>
        </div>
    </div>

</div>
<div class="container mb-3">

    <div class="row content">
        <div class="col-lg-8">
            <div>
                <h5>Info Kegiatan dan Berita </h5>
            </div>
            <div class="content-box">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="4000">
                                <img src="<?php echo base_url('gambar/DSC_1.JPG') ?>" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block bg-dark rounded-3">
                                <h5>Upacara Peringatan Hari Meteorologi Klimatologi dan Geofisika Ke-76 Tahun 2023</h5>
                                <p>Jumat (21/07) Balai Besar Meteorologi Klimatologi dan Geofisika Wilayah III melaksanakan upacara peringatan Hari Meteorologi Klimatologi dan Geofisika (HMKG) ...</p>
                                <div class="text-center"><a href="berita-detail-Upacara-Peringatan-Hari-Meteorologi-Klimatologi-dan-Geofisika-Ke-76-Tahun-2023-0" class="btn btn-success">Selengkapnya</a></div>
                                </div>
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
            </div>
        </div>
        <div class="col-lg-4">
            <div>
                <h5>Press Release / Artikel</h5>
            </div>
            <div class="content-box">
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Upacara Hari Pahlawan</h5>
                        <p class="card-text">Upacara tanggal 10 November 2023 bertempat di Balai MKG Wilayah III Badung .....</p>
                        <a href="<?php echo base_url('web/artikel/gempa2023') ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Upacara Hari Pahlawan</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Upacara Hari Pahlawan</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container">
        <h5 class="text-center">LAYANAN</h5>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="row mb-2">
                <div class="col-4">
                    <div class="card">
                    <img src="<?php echo base_url('gambar/layanan1.png') ?>" width="60%" class="mx-auto mt-3">
                    <div class="card-body">
                        <h5>GEMPA</h5>
                        <p class="card-text">Memberikan layanan informasi Gempa</p>
                    </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                    <img src="<?php echo base_url('gambar/layanan1.png') ?>" width="60%" class="mx-auto mt-3">
                    <div class="card-body">
                        <h5>GEMPA</h5>
                        <p class="card-text">Memberikan layanan informasi Gempa</p>
                    </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                    <img src="<?php echo base_url('gambar/layanan1.png') ?>" width="60%" class="mx-auto mt-3">
                    <div class="card-body">
                        <h5>GEMPA</h5>
                        <p class="card-text">Memberikan layanan informasi Gempa</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                    <img src="<?php echo base_url('gambar/layanan1.png') ?>" width="60%" class="mx-auto mt-3">
                    <div class="card-body">
                        <h5>GEMPA</h5>
                        <p class="card-text">Memberikan layanan informasi Gempa</p>
                    </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                    <img src="<?php echo base_url('gambar/layanan1.png') ?>" width="60%" class="mx-auto mt-3">
                    <div class="card-body">
                        <h5>GEMPA</h5>
                        <p class="card-text">Memberikan layanan informasi Gempa</p>
                    </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                    <img src="<?php echo base_url('gambar/layanan1.png') ?>" width="60%" class="mx-auto mt-3">
                    <div class="card-body">
                        <h5>GEMPA</h5>
                        <p class="card-text">Memberikan layanan informasi Gempa</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="container">
                <img src="<?php echo base_url('gambar/ikm.png') ?>" alt="" width="100%">
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>