<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Jadwal_model', 'jadwal');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = 'Jadwal Latihan';
        $data['jadwal'] = $this->jadwal->getJadwalData();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('jadwal/index', $data);
            $this->load->view('templates/footer', $data);
        }
    }
    public function tambah()
    {
        $data['title'] = 'Tambah Ekskul';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('jadwal/tambah', $data);
            $this->load->view('templates/footer', $data);
        }
    }
    public function tambah_aksi()
    {
        $nama_ekskul = $this->input->post('nama_ekskul');
        $jadwal_latihan = $this->input->post('jadwal_latihan');
        $this->db->set('nama_ekskul', $nama_ekskul);
        $this->db->set('jadwal_latihan', $jadwal_latihan);
        $this->db->set('is_active', 1);
        $this->db->insert('jadwal');

        redirect('jadwal');
    }
    function edit($id)
    {
        $where = array('id' => $id);
        $data['title'] = 'Edit Ekskul';
        $data['jadwal'] = $this->jadwal->edit_data($where, 'jadwal')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('jadwal/edit', $data);
        $this->load->view('templates/footer', $data);
    }
    function update()
    {
        $id = $this->input->post('id');

        $data['jadwal_row'] = $this->jadwal->getJadwalRow($id);

        $nama_ekskul = $this->input->post('nama_ekskul');
        $jadwal_latihan = $this->input->post('jadwal_latihan');
        $this->db->set('nama_ekskul', $nama_ekskul);
        $this->db->set('jadwal_latihan', $jadwal_latihan);
        $this->db->set('is_active', 1);
        $this->db->where('id', $id);
        $this->db->update('jadwal');

        redirect('jadwal');
    }
    function delete($id)
    {
        $where = array('id' => $id);
        $this->jadwal->delete_data($where, 'jadwal');
        redirect('jadwal');
    }

}