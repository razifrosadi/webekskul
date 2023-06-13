<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lihat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Nilai_model', 'nilai');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
        $this->load->model('Pengajuan_model', 'pengajuan');
    }

    public function v_nilai()
    {
        $data['title'] = 'Data Penilaian';
        $data['title2'] = 'Data Pengajuan';
        $data['nilai'] = $this->nilai->getNilaiData();        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('lihat/v_nilai', $data);
            
            $this->load->view('templates/footer', $data);
        } 
    }
    public function v_pengajuan()
    {
        $data['title'] = 'Data Pengajuan';       
        $data['pengajuan'] = $this->pengajuan->getPengajuanData();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('lihat/v_pengajuan', $data);
            $this->load->view('templates/footer', $data);
        } 
    }

}

