<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kegiatan_model', 'kegiatan');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = 'Tambahkan Gambar';
        $data['kegiatan'] = $this->kegiatan->getKegiatanData();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kegiatan/index', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Ekskul';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('kegiatan/tambah', $data);
            $this->load->view('templates/footer', $data);
        }

        
    }

    public function tambah_aksi()
    {
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
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
        $this->db->set('isi', $isi);
        $this->db->set('is_active', 1);
        $this->db->insert('kegiatan');

        redirect('kegiatan');
    }

    function edit($id)
    {
        $where = array('id_kegiatan' => $id);
        $data['title'] = 'Kegiatan';
        $data['kegiatan'] = $this->kegiatan->edit_data($where, 'kegiatan')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kegiatan/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    function update()
    {
        $id = $this->input->post('id_kegiatan');

        $data['kegiatan_row'] = $this->kegiatan->getKegiatanRow($id);

        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $upload_img = $_FILES['image']['name'];

        if ($upload_img) {
            $config['upload_path']      = './assets/img/ekskul';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $old_img = $data['image'];
                if ($old_img != 'default.jpg') {
                    unlink(FCPATH . './assets/img/ekskul' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('image', $new_img);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('judul', $judul);
        $this->db->set('isi', $isi);
        $this->db->set('is_active', 1);
        $this->db->where('id_kegiatan', $id);
        $this->db->update('kegiatan');

        redirect('kegiatan');
    }

    function delete($id)
    {
        $where = array('id_kegiatan' => $id);
        $this->kegiatan->delete_data($where, 'kegiatan');
        redirect('kegiatan');
    }
}
