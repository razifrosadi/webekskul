<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subprofil_model extends CI_Model
{
    public function getSubProfil()
    {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->join('kegiatan', 'kegiatan.profil_id = profil.id');
        return $this->db->get('');
    }


    // public function showProfil($id_profil)
    // {
    //     $queryProfil = "SELECT profil.id, judul_informasi FROM profil JOIN kegiatan ON profil.id = sub_profil.id_kegiatan WHERE sub_profil.id_profil =  $id_profil ORDER BY sub_profil.id_kegiatan ASC";
    //     return $this->db->query($queryProfil)->result_array();
    // }

    // public function showSubProfil($id_kegiatan)
    // {
    //     $querySubProfil = "SELECT * FROM profil  WHERE id_kegiatan = $id_kegiatan AND is_active = 1";
    //     return $this->db->query($querySubProfil)->result_array();
    // }
    // // User Menu
    // public function getProfilAll()
    // {
    //     return $this->db->get_where('profil', ['id !=' => 1])->result_array();
    // }
}
