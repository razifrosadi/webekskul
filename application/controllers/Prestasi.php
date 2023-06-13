<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Prestasi_model', 'prestasi');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = 'Tambahkan Gambar';
        $data['prestasi'] = $this->prestasi->getPrestasiData();        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('prestasi/index', $data);
            $this->load->view('templates/footer', $data);
        }
}

public function tambah()
    {
        $data['title'] = 'Tambah Ekskul';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('prestasi/tambah', $data);
            $this->load->view('templates/footer', $data);
        }

        
    }

    public function tambah_aksi()
    {
        $judul_prestasi = $this->input->post('judul_prestasi');
        $deskripsi_prestasi = $this->input->post('deskripsi_prestasi');
        $upload_img = $_FILES['image_prestasi']['name'];

        // var_dump($upload_img); die;

        if ($upload_img) {
            $config['upload_path']      = './assets/img/ekskul';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image_prestasi')) {
                echo "Upload gagal";
                die();
            } else {
                $upload_img = $this->upload->data('file_name');
                $this->db->set('image_prestasi', $upload_img);
            }
        }
        $this->db->set('judul_prestasi', $judul_prestasi);
        $this->db->set('deskripsi_prestasi', $deskripsi_prestasi);
        $this->db->set('created_at', date('Y:m:d'));
        $this->db->set('is_active', 1);
        $this->db->insert('prestasi');
        

        redirect('prestasi');
    }

    

    function edit($id)
    {
        $where = array('id' => $id);
        $data['title'] = 'Prestasi';
        $data['prestasi'] = $this->prestasi->edit_data($where, 'prestasi')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('prestasi/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    function update()
    {
        $id = $this->input->post('id');

        $data['prestasi_row'] = $this->prestasi->getPrestasiRow($id);

        $judul = $this->input->post('judul_prestasi');
        $deskripsi = $this->input->post('deskripsi_prestasi');

        $upload_img = $_FILES['image']['name'];

        // var_dump($upload_img); die;

        if ($upload_img) {
            $config['upload_path']      = './assets/img/ekskul';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "Upload gagal";
                die();
            } else {
                $upload_img = $this->upload->data('file_name');
                $this->db->set('image', $upload_img);
            }
        }

        $this->db->set('judul_prestasi', $judul_prestasi);
        $this->db->set('deskripsi_prestasi', $deskripsi_prestasi);
        $this->db->set('created_at', date('Y:m:d'));
        $this->db->set('is_active', 1);
        $this->db->where('id', $id);
        

        redirect('prestasi');
    }

    function delete($id)
    {
        $where = array('id' => $id);
        $this->prestasi->delete_data($where, 'prestasi');
        redirect('prestasi');
    }

    


    
}
