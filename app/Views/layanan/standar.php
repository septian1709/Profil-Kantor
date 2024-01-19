<?= $this->extend('Layout/template');?>
<?= $this->section('content') ?>
<div class="container">
    <h1>Standar Layanan</h1>
    <div class="card">
        <div class="card-header">
            Jadwal Pelayanan
        </div>
        <div class="card-body">
            <h5 class="card-title">Jam Layanan</h5>
            <p class="card-text">Senin - Kamis Pukul 08.00 - 16.00 WITA</p>
            <p class="card-text">Jumat Pukul 08.00 - 16.30 WITA</p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Maklumat Pelayanan
        </div>
        <div class="card-body">
            <img src="<?php echo base_url('gambar/maklumat-pelayanan.jpg') ?>" alt="Maklumat Pelayanan" id="gbr-maklumat">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Alur Pelayanan
        </div>
        <div class="card-body">
            <img src="<?php echo base_url('gambar/alur pelayanan.jpg') ?>" alt="Alur Pelayanan" id="gbr-alur-pelayanan">
        </div>
    </div>
</div>
<?= $this->endSection()?>