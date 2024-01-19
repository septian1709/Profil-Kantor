<?php

namespace App\Controllers;

class Web extends BaseController
{
    // public function beranda()
    // {
    //     //return view('header');
    //     return view('home');
    // }

    public function sejarah()
    {
        return view('profil/sejarah');
    }

    public function visiMisi()
    {
        return view('profil/visi');
    }

    public function struktur()
    {
        return view('profil/struktur.php');
    }

    public function layanan(){
        return view('layanan/standar.php');
    }
    
    public function tugas(){
        return view('profil/tugas.php');
    }
    public function beranda(){
        return view('profil/beranda.php');
    }

    public function coba(){
        return view('profil/beranda_coba.php');
    }



    // ARTIKEL / PRESS RELEASE
    public function artikel($code){
        return view('artikel/artikel_'.$code);
    }

    // KEGIATAN
    public function kegiatan($code){
        return view('kegiatan/kegiatan_'.$code);
    }
    

    //INFO GEMPA TERKINI
    public function infogempaterkini(){
        return view('informasiGempaBumi/gempaBumiTerkini.php');
    }

    //MENERIMA DATA GEMPA
    public function simpan(){
        $request = \Config\Services::request();
        // $nilai= $this->input->post('gempa');
        $nilai = $request->getPost('gempa');
        $nilai = explode("==",$nilai);
        $data = array(

            'id'  => $nilai[0],
            'infogempa'   => $nilai[1],
            

            // 'hostname'  => $this->input->get(''),
            // 'ipv4'   => $this->input->get('ipv4'),
            // 'ip_public'   => $this->input->get('ip_public'),
            // 'waktu_local'   => $this->input->get('waktu_local'),
            // 'sistem'   => $this->input->get('sistem'),
            // 'processor'   => $this->input->get('processor'),
            // 'boot_time'   => $this->input->get('boot_time'),
            // 'cpu_usage'   => $this->input->get('cpu_usage'),
            // 'memory_total'   => $this->input->get('memory_total'),
            // 'memory_usage'   => $this->input->get('memory_usage'),
            // 'memory_usage_persen'   => $this->input->get('memory_usage_persen'),
            // 'disk_size'   => $this->input->get('disk_size'),
            // 'disk_partisi'   => $this->input->get('disk_partisi'),
            // 'disk_usage_persen'   => $this->input->get('disk_usage_persen'), 
        );

        $id = $nilai[0];
        $event = $nilai[1];
        $tabel = $nilai[2];
        $db = \Config\Database::connect();
        $query = $db->query("SELECT infogempa FROM $tabel WHERE id='$id'");
        $row   = $query->getRow();
        if ($row != NULL) {
            
        } else {
            $query2 = $db->query("INSERT INTO $tabel (id,infogempa) VALUES ('$id','$event')");
        }
        // $hostname = array('hostname'=> $nilai[0]);
        // $cek_data = $this->m_komputer->ambil_data($hostname, 'profile_komputer')->result();
        // if ($cek_data == NULL) {
        //     $this->m_komputer->input_data($data,'profile_komputer');
        // } else {
        //     $this->m_komputer->update_data($data,'profile_komputer');
        // } 
        
        // $this->m_komputer->input_data($data,'real_time_2');

        // redirect('ip_web/index'); 
        return "hay";
    }


}
