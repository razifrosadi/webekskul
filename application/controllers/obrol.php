<?php
defined('BASEPATH') or exit('No direct script access allowed');

class obrol extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('obrol_model', 'obrol');
        $this->load->model('User_model', 'user');
        $this->load->model('Menu_model', 'menu');
    }

    public function index()
    {
        $data['title'] = 'Obrolanku';
        $data['user'] = $this->user->getUserData();
        if ($this->session->userdata('role_id') == '1') {
            $data['all_user'] = $this->user->getUserNotAdmin();
        } else {
            $data['all_user'] = $this->user->getUserAdmin();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('obrol/list_nama_plgn', $data);
        $this->load->view('templates/footer');
    }

    public function japri()
    {
        $data['title'] = 'Obrolanku';
        $data['user'] = $this->user->getUserData();
        $data['penerima'] = $this->user->getUserDataById($_GET['user_id']);
        $data['list_pesan'] = $this->obrol->SelectBy($this->session->userdata('id'));
        if (!isset($data['penerima']['username'])) {
            $this->session->set_flashdata('message', 'User Tidak Ditemukan');
            redirect('obrol/index');
        }
        $this->obrol->MarkAllAsRead($this->session->userdata('id'), $_GET['user_id']);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('obrol/japri', $data);
        $this->load->view('templates/footer');
    }

    public function SendMessage()
    {

        // $this->form_validation->set_rules('pesan', 'message', 'required');
        $penerima_id = $this->input->post('penerima_id');

        // if ($this->form_validation->run() == false) {
        //         $this->session->set_flashdata('message', '<div class="alert alert-danger">'. validation_errors().'</div>');
        //         redirect('obrol/japri?user_id='.$penerima_id, 'refresh');
        // } else {
        $pesan = $this->input->post('pesan');
        $nama_penerima = $this->input->post('nama_penerima');
        $nama_pengirim = $this->session->userdata('name');
        $pengirim_id = $this->session->userdata('id');
        $tanggal_kirim = date("Y-m-d H:i:s");
        $file = '';
        $file_name = $penerima_id . '-gambar';
        $config['upload_path']          = FCPATH . '/pictures/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $file_name;
        $config['overwrite']            = true;
        $config['encrypt_name']         = TRUE;
        $config['max_size']             = 5120; // 5MB
        $config['max_width']            = 1080;
        $config['max_height']           = 1080;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            if ($this->input->post('file') != '') {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">' . $this->upload->display_errors() . '</div>');
                redirect('obrol/japri?user_id=' . $penerima_id, 'refresh');
            }
        } else {
            $uploaded_data = $this->upload->data();
            $file = $uploaded_data['file_name'];
        }
        $data = [
            'pesan' => $pesan,
            'nama_penerima' => $nama_penerima,
            'nama_pengirim' => $nama_pengirim,
            'tanggal_kirim' => $tanggal_kirim,
            'penerima_id' => $penerima_id,
            'pengirim_id' => $pengirim_id,
            'file' => $file,
        ];
        $simpan = $this->obrol->SendMessage($data);
        if ($simpan) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesan Terkirim</div>');
            redirect('obrol/japri?user_id=' . $penerima_id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pesan Tidak Terkirim!</div>');
            redirect('obrol/japri?user_id=' . $penerima_id);
        }
        // }
    }
}
