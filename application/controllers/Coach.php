<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coach extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Coach_model', 'coach');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = 'Tambahkan Gambar';
        $data['coach'] = $this->coach->getCoachData();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('coach/index', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Ekskul';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('coach/tambah', $data);
            $this->load->view('templates/footer', $data);
        }

        
    }

    public function tambah_aksi()
    {
        $judul_coach = $this->input->post('judul_coach');
        $isi_coach = $this->input->post('isi_coach');
        $deskripsi_coach = $this->input->post('deskripsi_coach');
        $upload_img = $_FILES['image_coach']['name'];

        // var_dump($upload_img); die;

        if ($upload_img) {
            $config['upload_path']      = './assets/img/ekskul';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image_coach')) {
                echo "Upload gagal";
                die();
            } else {
                $upload_img = $this->upload->data('file_name');
                $this->db->set('image_coach', $upload_img);
            }
        }
        $this->db->set('judul_coach', $judul_coach);
        $this->db->set('isi_coach', $isi_coach);
        $this->db->set('deskripsi_coach', $deskripsi_coach);
        $this->db->set('is_active', 1);
        $this->db->insert('coach');

        redirect('coach');
    }

    function edit($id)
    {
        $where = array('id' => $id);
        $data['title'] = 'Coach';
        $data['coach'] = $this->coach->edit_data($where, 'coach')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('coach/edit', $data);
        $this->load->view('templates/footer', $data);
    }

    function update()
    {
        $id = $this->input->post('id');

        $data['coach_row'] = $this->coach->getCoachRow($id);

        $judul_coach = $this->input->post('judul_coach');
        $isi_coach = $this->input->post('isi_coach');
        $deskripsi_coach = $this->input->post('deskripsi_coach');
        $upload_img = $_FILES['image_coach']['name'];

        if ($upload_img) {
            $config['upload_path']      = './assets/img/ekskul';
            $config['allowed_types']    = 'jpg|png|jpeg';
            $config['max_size']         = '2048';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image_coach')) {
                $old_img = $data['image_coach'];
                if ($old_img != 'default.jpg') {
                    unlink(FCPATH . './assets/img/ekskul' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('image_coach', $new_img);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('judul_coach', $judul_coach);
        $this->db->set('isi_coach', $isi_coach);
        $this->db->set('deskripsi_coach', $deskripsi_coach);
        $this->db->set('is_active', 1);
        $this->db->where('id', $id);
        $this->db->update('coach');

        redirect('coach');
    }

    function delete($id)
    {
        $where = array('id_coah' => $id);
        $this->coach->delete_data($where, 'coach');
        redirect('coach');
    }
}
