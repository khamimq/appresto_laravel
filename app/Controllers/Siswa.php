<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Siswa extends Controller{

    public function index(){
        return view('tampil_siswa');
    }

    public function tampil(){
        return view('tampil_data');
    }

    public function menu(){
        return view('menu_utama');
    }

    public function bio(){
        return view('form_biodata');
    }

    public function proses(){
        $data['nama_siswa'] = $this->request->getPost('nama');
        $data['alamat'] = $this->request->getPost('alamat');

        return view('form_biodata',$data);
    }
}