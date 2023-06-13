<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Pengajuan_model', 'pengajuan');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = 'Data Semua Ekskul';
        $data['pengajuan'] = $this->pengajuan->getPengajuanData();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pengajuan/index', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Ekskul';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pengajuan/tambah', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function tambah_aksi()
    {
        $namap = $this->input->post('namap');
        $ekskul = $this->input->post('ekskul');
        $barang = $this->input->post('barang');
        $harga = $this->input->post('harga');
        $qty = $this->input->post('qty');
        $total_harga = ($harga*$qty);
        


       

        $this->db->set('namap', $namap);
        $this->db->set('ekskul', $ekskul);
        $this->db->set('barang', $barang);
        $this->db->set('harga', $harga);
        $this->db->set('qty', $qty);
        $this->db->set('total_harga', $total_harga);
        $this->db->set('is_active', 1);
        $this->db->insert('pengajuan');

        redirect('pengajuan');
    }
    

    function edit($id)
    {
        $where = array('id' => $id);
        $data['title'] = 'Edit Ekskul';
        $data['pengajuan'] = $this->pengajuan->edit_data($where, 'pengajuan')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pengajuan/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    function update()
    {
        $id = $this->input->post('id');

        $data['pengajuan_row'] = $this->pengajuan->getNilaiRow($id);

        $namap = $this->input->post('namap');
        $ekskul = $this->input->post('ekskul');
        $barang = $this->input->post('barang');
        $harga = $this->input->post('harga');
        $qty = $this->input->post('qty');
        $total_harga = ($harga*$qty);
        

       

        $this->db->set('namap', $namap);
        $this->db->set('ekskul', $ekskul);
        $this->db->set('barang', $barang);
        $this->db->set('harga', $harga);
        $this->db->set('qty', $qty);
        $this->db->set('total_harga', $total_harga);
        $this->db->set('is_active', 1);
        $this->db->where('id', $id);
        $this->db->update('pengajuan');

        redirect('pengajuan');
    }

    function delete($id)
    {
        $where = array('id' => $id);
        $this->pengajuan->delete_data($where, 'pengajuan');
        redirect('pengajuan');
    }
}
