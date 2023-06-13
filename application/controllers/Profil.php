<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Profil_model', 'profil');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = 'Data Semua Ekskul';
        $data['profil'] = $this->profil->getProfilData();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('profil/index', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Ekskul';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('profil/tambah', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function tambah_aksi()
    {
        $judul_informasi = $this->input->post('judul_informasi');
        $isi_informasi = $this->input->post('isi_informasi');
        $upload_img = $_FILES['imagep']['name'];

        // var_dump($upload_img); die;

        if ($upload_img) {
            $config['upload_path']      = './assets/img/ekskul';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('imagep')) {
                echo "Upload gagal";
                die();
            } else {
                $upload_img = $this->upload->data('file_name');
                $this->db->set('imagep', $upload_img);
            }
        }

        $this->db->set('judul_informasi', $judul_informasi);
        $this->db->set('isi_informasi', $isi_informasi);
        $this->db->set('is_active', 1);
        $this->db->insert('profil');

        redirect('profil');
    }

    function edit($id)
    {
        $where = array('id_profil' => $id);
        $data['title'] = 'Edit Ekskul';
        $data['profil'] = $this->profil->edit_data($where, 'profil')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    function update()
    {
        $id = $this->input->post('id_profil');

        $data['profil_row'] = $this->profil->getProfilRow($id);

        $judul_informasi = $this->input->post('judul_informasi');
        $isi_informasi = $this->input->post('isi_informasi');

        $upload_img = $_FILES['imagep']['name'];

        if ($upload_img) {
            $config['upload_path']      = './assets/img/ekskul';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('imagep')) {
                $old_img = $data['imagep'];
                if ($old_img != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/ekskul' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('imagep', $new_img);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('judul_informasi', $judul_informasi);
        $this->db->set('isi_informasi', $isi_informasi);
        $this->db->set('is_active', 1);
        $this->db->where('id_profil', $id);
        $this->db->update('profil');

        redirect('profil');
    }

    function delete($id)
    {
        $where = array('id' => $id);
        $this->profil->delete_data($where, 'profil');
        redirect('profil');
    }
}
