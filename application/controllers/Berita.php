<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Berita_model', 'berita');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = 'Tambahkan Gambar';
        $data['berita'] = $this->berita->getBeritaData();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('berita/index', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Ekskul';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('berita/tambah', $data);
            $this->load->view('templates/footer', $data);
        }

        
    }

    public function tambah_aksi()
    {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
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
        $this->db->set('judul', $judul);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->set('created_at', date('Y:m:d'));
        $this->db->set('is_active', 1);
        $this->db->insert('berita');
        

        redirect('berita');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['title'] = 'Berita';
        $data['berita'] = $this->berita->edit_data($where, 'berita')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('berita/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    function update()
    {
        $id = $this->input->post('id');

        $data['berita_row'] = $this->berita->getBeritaRow($id);

        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');

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

        $this->db->set('judul', $judul);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->set('created_at', date('Y:m:d'));
        $this->db->set('is_active', 1);
        $this->db->where('id', $id);
        

        redirect('berita');
    }

    function delete($id)
    {
        $where = array('id' => $id);
        $this->berita->delete_data($where, 'berita');
        redirect('berita');
    }

    


    
}
