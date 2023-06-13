<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Nilai_model', 'nilai');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = 'Data Semua Ekskul';
        $data['nilai'] = $this->nilai->getNilaiData();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('nilai/index', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Ekskul';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('nilai/tambah', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $ekskul = $this->input->post('ekskul');
        $kelas = $this->input->post('kelas');
        $aktif = $this->input->post('aktif');
        $tanggung_jawab = $this->input->post('tanggung_jawab');
        $skill = $this->input->post('skill');
        $nilai_akhir=($aktif+$tanggung_jawab+$skill)/3;
        if ($nilai_akhir>85)
$grade="A";
else if ($nilai_akhir<=80 AND $nilai_akhir>70)
$grade="B";
else if ($nilai_akhir<=70 AND $nilai_akhir>60)
$grade="C";
else if ($nilai_akhir<=60 AND $nilai_akhir>40)
$grade="D";
else 
$grade="E";


       

        $this->db->set('nama', $nama);
        $this->db->set('ekskul', $ekskul);
        $this->db->set('kelas', $kelas);
        $this->db->set('aktif', $aktif);
        $this->db->set('tanggung_jawab', $tanggung_jawab);
        $this->db->set('skill', $skill);
        $this->db->set('nilai_akhir', $nilai_akhir);
        $this->db->set('grade', $grade);
        $this->db->set('is_active', 1);
        $this->db->insert('nilai');

        redirect('nilai');
    }
    

    function edit($id)
    {
        $where = array('id' => $id);
        $data['title'] = 'Edit Ekskul';
        $data['nilai'] = $this->nilai->edit_data($where, 'nilai')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('nilai/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    function update()
    {
        $id = $this->input->post('id');

        $data['nilai_row'] = $this->nilai->getNilaiRow($id);

        $nama = $this->input->post('nama');
        $ekskul = $this->input->post('ekskul');
        $kelas = $this->input->post('kelas');
        $aktif = $this->input->post('aktif');
        $tanggung_jawab = $this->input->post('tanggung_jawab');
        $skill = $this->input->post('skill');
        $nilai_akhir=($aktif+$tanggung_jawab+$skill)/3;
        if ($nilai_akhir>85)
$grade="A";
else if ($nilai_akhir<=80 AND $nilai_akhir>70)
$grade="B";
else if ($nilai_akhir<=70 AND $nilai_akhir>60)
$grade="C";
else if ($nilai_akhir<=60 AND $nilai_akhir>40)
$grade="D";
else 
$grade="E";



       

        $this->db->set('nama', $nama);
        $this->db->set('ekskul', $ekskul);
        $this->db->set('kelas', $kelas);
        $this->db->set('aktif', $aktif);
        $this->db->set('tanggung_jawab', $tanggung_jawab);
        $this->db->set('skill', $skill);
        $this->db->set('nilai_akhir', $nilai_akhir);
        $this->db->set('grade', $grade);
        $this->db->set('is_active', 1);
        $this->db->where('id', $id);
        $this->db->update('nilai');

        redirect('nilai');
    }

    function delete($id)
    {
        $where = array('id' => $id);
        $this->nilai->delete_data($where, 'nilai');
        redirect('nilai');
    }
}
