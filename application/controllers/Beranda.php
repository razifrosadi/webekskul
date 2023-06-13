<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Profil_model', 'profil');
        $this->load->model('Jadwal_model', 'jadwal');
        $this->load->model('Kegiatan_model', 'kegiatan');
        $this->load->model('Coach_model', 'coach');
        $this->load->model('Berita_model', 'berita');
        $this->load->model('Prestasi_model', 'prestasi');
        $this->load->model('Kategori_model', 'kategori');
    }

    public function index()
    {
        $data['title1'] = 'BERITA HARI INI';
        $data['berita'] = $this->berita->getBeritaData();
        $data['profil'] = $this->profil->getProfilData();
        $data['coach'] = $this->coach->getCoachData();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/index', $data);
            $this->load->view('Beranda/vberita', $data);
            $this->load->view('Beranda/editekskul', $data);
            $this->load->view('Beranda/coachku', $data);
            $this->load->view('templates/br_footer', $data);
        } 
    }

    public function vberita2($id)
    {
        $data['title'] = 'Berita';
        $data['berita'] = $this->berita->getBeritaDataById($id);

        // var_dump($data['berita']);
        // die;

        if ($this->form_validation->run() == false){
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/vberita2', $data);
            $this->load->view('templates/br_footer', $data);
        }
    }
    public function vprestasi()
    {
        $data['title'] = 'PRESTASI';
        $data['prestasi'] = $this->prestasi->getPrestasiData();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/vprestasi', $data);
            $this->load->view('templates/br_footer', $data);
        }else {
            $judul_prestasi = $this->input->post('judul_prestasi');
        $deskripsi_prestasi = $this->input->post('deskripsi_prestasi');

            $this->db->set('judul_prestasi', $judul_prestasi);
            $this->db->set('deskripsi_prestasi', $deskripsi_prestasi);
            $this->db->set('created_at', date('Y:m:d'));
        $this->db->set('is_active', 1);
        $this->db->insert('prestasi');

        redirect('prestasi');
    }
}
public function vprestasi2($id)
    {
        $data['title'] = 'PRESTASI';
        $data['prestasi'] = $this->prestasi->getPrestasiDataById($id);

        // var_dump($data['berita']);
        // die;

        if ($this->form_validation->run() == false){
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/vprestasi2', $data);
            $this->load->view('templates/br_footer', $data);
        }
    }

    public function coachku()
    {
        $data['title'] = 'PELATIH';
        $data['coach'] = $this->coach->getCoachData();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/coachku', $data);
            $this->load->view('templates/br_footer', $data);
        }else {
            

        $this->db->set('judul', $judul);
        $this->db->set('isi', $isi);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->set('is_active', 1);
        $this->db->insert('coach');

        redirect('coach');
    }
}


    public function vkegiatan()
    {
        $data['title'] = 'KEGIATAN EKSKUL';
        $data['profil'] = $this->profil->getProfilData();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/vkegiatan', $data);
            $this->load->view('templates/br_footer', $data);
        } else {
            
            $this->db->set('judul', $judul);
            $this->db->set('isi', $isi);
            
            $this->db->insert('profil');

            redirect('profil');
        }
    }
    
    public function editekskul()
    {
        $data['title'] = 'PROFIL EKSKUL';
        $data['profil'] = $this->profil->getProfilData();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/editekskul', $data);
            $this->load->view('templates/br_footer', $data);
        } else {
            

            $this->db->set('judul_informasi', $judul_informasi);
            $this->db->set('isi_informasi', $isi_informasi);
            
            $this->db->insert('profil');

            redirect('profil');
        }
    }

    public function vkategori()
    {
        
        $data['kategori'] = $this->kategori-> getKategoriData();
        // $data['profil'] = $this->profil->getProfilku($idk);
        // var_dump($data['profil']);
        // die;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/vkategori', $data);
            $this->load->view('templates/br_footer', $data);
        } else {
            

            $this->db->insert('kategori');
            redirect('kategori');
        }
    }

    public function kegiatan($id)
    {
        $data['title'] = 'Detail Kegiatan';
        $data['profil'] = $this->profil->getProfil($id);

        // var_dump($data['profil']);
        // die;

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/vkegiatan', $data);
            $this->load->view('templates/br_footer', $data);
        } else {
            

            $this->db->set('judul_informasi', $judul_informasi);
            $this->db->set('isi_informasi', $isi_informasi);
            
            $this->db->insert('profil');

            redirect('profil');
        }
    }
    public function jadwal()
    {
        $data['title'] = 'JADWAL LATIHAN';
        $data['jadwal'] = $this->jadwal->getJadwalData();
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/br_topbar', $data);
            $this->load->view('templates/br_header', $data);
            $this->load->view('templates/br_sidebar', $data);
            $this->load->view('Beranda/jadwal', $data);
            $this->load->view('templates/br_footer', $data);
        } else {
           

            $this->db->set('nama_ekskul', $nama_ekskul);
            $this->db->set('jadwal_latihan', $jadwal_latihan);
            
            $this->db->insert('jadwal');

            redirect('jadwal');
        }
    }
}
