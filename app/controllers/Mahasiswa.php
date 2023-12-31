<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiwa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}
