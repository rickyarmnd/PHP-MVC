<?php

class About extends Controller {

    public function index($nama = 'Cikay' , $pekerjaan = 'Gabut'){
        // echo "Halo Nama Saya $nama saya adalah $pekerjaan";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Index';
        $this->view('template/header' ,$data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
    public function page()
    {
        // echo 'About/index';
        $data['judul'] = 'Page';
        $this->view('template/header' ,$data);
        $this->view('about/page');
    }
}