<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Circle Marker</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    #map {
      height: 400px;
    }
  </style>
</head>
<body>
  <div id="map"></div>

  




  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
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
center: [-1.05568670665649, 116.4108625784261],
zoom: 4,
layers: [googleSat]
}); 

const baseLayers = {
'Default': googleSat,
'Satelite': googleSat,
};

const layerControl = L.control.layers(baseLayers).addTo(map);
var circleMarker = L.circle([-1.05568670665649, 116.4108625784261], {
color: 'red',
fillColor: '#f03',
fillOpacity: 0,
radius: 10000,
// className: 'blinking'
}).addTo(map);

// Variabel untuk menyimpan interval animasi
var animationInterval;

// Fungsi untuk mengubah ukuran marker
function toggleMarkerSize() {
  var scaleFactor = 2;
  var originalRadius = 10000;
  var enlargedRadius = originalRadius * scaleFactor;
  var terbesar = 120000;

  var currentRadius = circleMarker.getRadius();

  if (currentRadius < terbesar) {
    circleMarker.setRadius(currentRadius + 5000);
   
  } else {
    circleMarker.setRadius(originalRadius);
  }
}

// Atur interval animasi
animationInterval = setInterval(toggleMarkerSize, 100); // Animasi setiap 1 detik
</script>


<?php
$data = simplexml_load_file("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml") or die ("Gagal ambil!");
echo "<h2>Daftar 15 Gempabumi M 5.0+</h2>";
$i = 1;
foreach($data->gempa as $gempaM5): 
    ?>
    <script>
    var circleMarker2 = L.circle([<?=$gempaM5->point->coordinates?>], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0,
    radius: 10000,
    // className: 'blinking'
    }).addTo(map);
    </script>

<?php endforeach;?>

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
function prosesHTML($event){
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


    // $idTerakhir = "";
    // if ($cekDB == "yes") {
    //     $db = \Config\Database::connect();
    //     $query = $db->query("SELECT infogempa FROM gempabumi WHERE id='$id'");
    //     $row   = $query->getRow();
    //     if ($row != NULL) {
            
    //     } else {
    //         $query2 = $db->query("INSERT INTO gempabumi (id,infogempa) VALUES ('$id','$event')");
    //     }
    // }

    $batasAtasLintang = -7;
    $batasBawahLintang = -12;
    $batasKiriBujur = 113.21;
    $batasKananBujur = 117.31;
    $data_lintang2 = -8;
    if ($batasBawahLintang<= floatval($data_lintang) and $batasAtasLintang >= floatval($data_lintang) and floatval($data_bujur)>=$batasKiriBujur and floatval($data_bujur) <=$batasKananBujur) {
        echo "BERHASIL", "<br>";
        $db = \Config\Database::connect();
        // $query2 = $db->query("INSERT INTO gempabumiwilayahbali (id,infogempa) VALUES ('$id','$event')");

    } else {
        // echo "GAGAL", "<br>";
        echo floatval($data_lintang) , " " , floatval($data_bujur) , "<br>";
    }
    
    return array($data_waktu,$data_lintang,$data_bujur,$data_magnitude,$data_kedalaman,$data_lokasi);


}


// list($waktu,$lintang,$bujur,$magnitude,$kedalaman,$lokasi) = prosesHTML($event);
$event = bacaHTML('https://pgt.bmkg.go.id/login/shakemap_sanglah');
echo $event , "<br>";
list($waktu,$lintang,$bujur,$magnitude,$kedalaman,$lokasi) = prosesHTML($event);
echo $waktu , "<br>";




$db = \Config\Database::connect();
$query = $db->query('SELECT infogempa FROM gempapgr3 ORDER BY id DESC');
$results   = $query->getResultArray();
$nomor = 1;
foreach ($results as $row):
    echo $nomor , "<br>";
    echo $row['infogempa'] , "<br>";
    list($waktu,$lintang,$bujur,$magnitude,$kedalaman,$lokasi) = prosesHTML($row['infogempa']);
    $nomor++;
endforeach;



?>

</body>
</html>
