<?= $this->extend('Layout/template');?>
<?= $this->section('content') ?>
<div class="container">
    <h3>GEMPA BUMI TERKINI WILAYAH BALI (20 DATA TERAKHIR)</h3>
    <div id="map" class="map" style="width: 100%; height: 500px;"></div>
               
    <div class="table-responsive">
        <table class="table table-hover table-striped">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Waktu Gempa</th>
                <th>Koordinat</th>
                <th>Magnitudo</th>
                <th>Kedalaman</th>
                <th>Wilayah</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $db = \Config\Database::connect();
        $query = $db->query('SELECT infogempa FROM gempabali ORDER BY id DESC LIMIT 20');
        $results   = $query->getResultArray();
        $no = 1;
        foreach ($results as $row):
            list($waktu,$lintang,$bujur,$magnitude,$kedalaman,$lokasi) = prosesHTML($row['infogempa'],"no");?>
            <tr>
                <td><?=$no; $no++?></td>
                <td><?=$waktu?> WIB</td>
                <td><?=$lintang?> , <?=$bujur?></td>
                <td class="text-center"><?=$magnitude?> SR</td>
                <td class="text-center"><?=$kedalaman?> km</td>
                <td><?=$lokasi?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
        </table>
    </div>

</div>

<script>

var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

const map = L.map('map', {
center: [-9.5, 115.26],
zoom: 7,
layers: [googleSat]
}); 

const baseLayers = {
'Default': googleStreets,
'Satelite': googleSat,
};

const layerControl = L.control.layers(baseLayers).addTo(map);
</script>


<!-- MENAMPILKAN SELURUH GEMPA -->
<?php
$koordinatTerakhir = "";
$lintangTerakhir = "";
$bujurTerakhir = "";
$db = \Config\Database::connect();
$query = $db->query('SELECT infogempa FROM gempabali ORDER BY id DESC LIMIT 20');
$results   = $query->getResultArray();
$no = 1;
$warna = "";
foreach ($results as $row):
    list($waktu,$lintang,$bujur,$magnitude,$kedalaman,$lokasi) = prosesHTML($row['infogempa'],"no");
    if ($no==1) {
        $lintangTerakhir = $lintang;
        $bujurTerakhir = $bujur;
    }
    if ($kedalaman<50) {
        $warna = 'red';
    } elseif ($kedalaman >= 60 and $kedalaman <=300) {
        $warna = 'yellow';
    } else {
        $warna = 'green';
    }

    if ($magnitude<=4 and $magnitude >= 3.7 ) {
        $radius = 1000 ;
    } elseif ($magnitude<5 and $magnitude >= 3.7 ) {
        $radius = 4000;
    } else {
        $radius = 3000;
    }


    ?>
    <script>
    var circleMarker2 = L.circle([<?=$lintang?>,<?=$bujur?> ], {
    color: '<?=$warna?>',
    fillColor: '<?=$warna?>',
    fillOpacity: 1,
    radius: <?=$radius?>,
    }).addTo(map);
    </script>

<?php $no++; endforeach;?>


<!-- MEMBERIKAN ANIMASI PADA GEMPA TERBARU -->
<script>
var circleMarker = L.circle([<?=$lintangTerakhir?>,<?=$bujurTerakhir?>], {
color: 'red',
fillColor: '#f03',
fillOpacity: 0,
radius: 3000,
}).addTo(map);

// Variabel untuk menyimpan interval animasi
var animationInterval;

// Fungsi untuk mengubah ukuran marker
function toggleMarkerSize() {
  var scaleFactor = 2;
  var originalRadius = 3000;
  var enlargedRadius = originalRadius * scaleFactor;
  var terbesar = 30000;

  var currentRadius = circleMarker.getRadius();

  if (currentRadius < terbesar) {
    circleMarker.setRadius(currentRadius + 2000);
   
  } else {
    circleMarker.setRadius(originalRadius);
  }
}

// Atur interval animasi
animationInterval = setInterval(toggleMarkerSize, 100); // Animasi setiap 1 detik
</script>


<!-- FUNGSI BACA DAN PROSESN DATA HTML -->
<?php 
function bacaHTML($url){
    // inisialisasi CURL
    $data = curl_init();
    // setting CURL
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    curl_setopt($data, CURLOPT_SSL_VERIFYPEER,false);
    // menjalankan CURL untuk membaca isi file
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}
function prosesHTML($event, $cekDB){
    $pecah= explode(",",$event);
    //echo $pecah[0];
    
    $pecah2 = explode(" ",$pecah[0]);
    //echo '</br>'. $pecah2[2];
    $mag = explode(":",$pecah2[2]);
    //echo '</br>'. $mag[1];
    $mag = $mag[1];
    //echo '</br>'. $mag;
    
    $pecah1 = $pecah[1];
    $tanggaljam = explode(" ",$pecah1);
    $tanggal = explode ("-",$tanggaljam[1]);
    //echo $tanggal[0];
    $tgl=$tanggal[0];
    //echo '</br>'. $tgl;
    
    $bulan = $tanggal[1];
    if ($bulan == 'Nov'){
    $bulan = 11;
    } else if ($bulan == 'Dec'){
    $bulan = 12;
    } else if ($bulan == 'Des'){
    $bulan = 12;
    } else if ($bulan == 'Jan'){
    $bulan = '01';
    } else if ($bulan == 'Feb'){
    $bulan = '02';
    } else if ($bulan == 'Mar'){
    $bulan = '03';
    } else if ($bulan == 'Apr'){
    $bulan = '04';
    } else if ($bulan == 'May'){
    $bulan = '05';
    } else if ($bulan == 'Mei'){
    $bulan = '05';
    } else if ($bulan == 'Jun'){
    $bulan = '06';
    } else if ($bulan == 'Jul'){
    $bulan = '07';
    } else if ($bulan == 'Aug'){
    $bulan = '08';
    } else if ($bulan == 'Agu'){
    $bulan = '08';
    } else if ($bulan == 'Sep'){
    $bulan = '09';
    } else if ($bulan == 'Oct'){
    $bulan = 10;
    } else if ($bulan == 'Okt'){
    $bulan = 10;
    }
    //echo '</br>'.$bulan;
    
    $tahun = $tanggal[2];
    $tahun = '20'.$tanggal[2];
    //echo '</br>'. $tahun;
    
    $jam = explode (":", $tanggaljam[2]);
    $detik = $jam[2];
    $menit = $jam[1];
    $jam = $jam[0];
    //$idnew=$tahun.$bulan.$tanggal.$jam.$menit.$detik;
    
    //echo $pecah[2];
    $latitude = explode (" ",$pecah[2]);
    //echo '</br>'.$latitude[1];
    $lat1 = explode (":",$latitude[1]);
    //print_r($latitude[2]);
    if ($latitude[2]=="LU"){
      $lat = $lat1[1];
    }else{
      $lat = -$lat1[1];
    }
    //echo '</br>'.$lat;
    
    $longitude = explode (" ",$pecah[3]);
    $long = $longitude[0];
    //print_r($longitude);
    //echo '</br>'.$long;
    
    $keterangan = explode ("(",$pecah[3]);
    //echo $keterangan[1];
    $ktrgn = explode (")", $keterangan[1]);
    //echo $ktrgn[0];
    $ktrgn=$ktrgn[0];
    //echo '</br>'.$ktrgn;
    
    //echo $pecah[4];
    $kedalaman = explode (" ",$pecah[4]);
    //echo $kedalaman[1];
    $kdlmn = explode (":", $kedalaman[1]);
    //echo $kdlmn[1];
    $kdlmn = $kdlmn[1];
    //echo '</br>'.$kdlmn;
    
    
    
    //$latitude = $_POST['latitude'];
    //$longitude = $_POST['longitude'];
    //$waktu = $_POST['waktu'];
    //$magnitudo = $_POST['magnitudo'];
    //$kedalaman = $_POST['kedalaman'];
    //$keterangan = $_POST['keterangan'];
    
    //$waktu = explode("-", $waktu);
    //echo '<br>';
    //$tahun = $waktu[0];
    //$bulan = $waktu[1];
    //$tanggal = $waktu[2];
    //$waktu2 = explode("T", $waktu[2]);
    //$tanggal = $waktu2[0];
    //$waktu3 = explode(":", $waktu2[1]);
    ///$jam = $waktu3[0];
    //$menit = $waktu3[1];
    //$detik = $waktu3[2];
    
    $id = $tahun.$bulan.$tgl.$jam.$menit.$detik;
    $created = $id;
    $jmlcreated=strlen($created);
    //echo $jmlcreated;
    $data_waktu = $tgl . " " . $tanggal[1] . " " . $tahun . " " . $jam . ":" . $menit . ":" . $detik;
    $data_lintang = $lat;
    $data_bujur = $long;
    $data_magnitude = $mag;
    $data_kedalaman = $kdlmn;
    $data_lokasi = $ktrgn;

    
    // echo $data_waktu , "<br>";
    // echo $data_lintang , "<br>";
    // echo $data_bujur , "<br>";
    // echo $data_magnitude , "<br>";
    // echo $data_kedalaman , "<br>";
    // echo $data_lokasi , "<br>";
    $idTerakhir = "";
    if ($cekDB == "yes") {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT infogempa FROM gempabali WHERE id='$id'");
        $row   = $query->getRow();
        if ($row != NULL) {
            
        } else {
            $query2 = $db->query("INSERT INTO gempabali (id,infogempa) VALUES ('$id','$event')");
        }
    }
   
    return array($data_waktu,$data_lintang,$data_bujur,$data_magnitude,$data_kedalaman,$data_lokasi);


}

// $eventbaru = bacaHTML('https://pgt.bmkg.go.id/login/shakemap_sanglah');
// list($waktuBaru,$lintangBaru,$bujurBaru,$magnitudeBaru,$kedalamanBaru,$lokasiBaru) = prosesHTML($eventbaru, "yes");


?>


<?= $this->endSection() ?>