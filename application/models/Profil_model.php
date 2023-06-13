<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{
    public function getProfilData()
    {
        $query = "SELECT kegiatan.*, profil.* FROM kegiatan JOIN profil ON kegiatan.id_kegiatan = profil.id_profil";
        return $this->db->query($query)->result_array();
    }

    // public function showKategori()
    // {
    //     $queryKategori = "SELECT kategori.*, profil.* FROM kategori JOIN profil ON kategori.id_kategori = profil.kategori_id";
    //     return $this->db->query($queryKategori)->result_array();
    // }
    // public function getProfilDataByIdkategori($idK)
    // {
    //     $queryKategori = "SELECT * FROM profil  WHERE id_kategori = $idK AND is_active = 1";
    //     return $this->db->query($queryKategori)->result_array();
    // }
    
    // public function getProfilDataByIdk($idk)
    // {
    //     $queryProfil = "SELECT * FROM profil  WHERE id_kategori = $idk AND is_active = 1";
    //     return $this->db->query($queryProfil)->result_array();
    // }
    public function getProfilDataById($id)
    {
        $queryProfil = "SELECT * FROM profil  WHERE id_kegiatan = $id AND is_active = 1";
        return $this->db->query($queryProfil)->result_array();
    }
    public function getProfilDataAll()
    {
        return $this->db->get_where('profil', ['id_profil !=' => 1])->result_array();
    }
//     function getProfilku($idk)
// {
//     $this->db->from('kategori');
//     $this->db->where('kategori_id', $idk);
//     $this->db->join('profil', 'profil.id_profil=kategori.kategori_id');
//     $query = $this->db->get();
//     return $query->result_array();
// }

    function getProfil($id)
    {
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->where('profil_id', $id);
        $this->db->join('profil', 'profil.id_profil=kegiatan.profil_id');
        
        $query = $this->db->get();
        return $query->result_array();
    }

    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function getProfilRow($id)
    {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->where('id_profil', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    // public function getSubProfil()
    // {
    //     $query = "SELECT profil.id, kegiatan.judul FROM profil JOIN kegiatan ON profil.id_kegiatan = kegiatan.id";
    //     return $this->db->query($query)->result_array();
    // }
    // public function showProfil($id_kegiatan)
    // {
    //     $queryProfil = "SELECT profil.id, * FROM profil JOIN sub_profil ON profil.id = sub_profil.id WHERE sub_profil.id_kegiatan =  $id_kegiatan ORDER BY sub_profil.id_kegiatan ASC";
    //     return $this->db->query($queryProfil)->result_array();
    // }
}
