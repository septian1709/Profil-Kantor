<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return view('profil/beranda.php');
    }

    public function coba()
    {
        echo "halo putu $this->nama";
    }
}
