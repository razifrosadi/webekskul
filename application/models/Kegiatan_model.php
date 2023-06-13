<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{
    public function getKegiatanData()
    {
        $query = $this->db->get_where('kegiatan');
        return $query->result_array();
    }
    public function getKegiatanDataById($id)
    {
        $queryKegiatan = "SELECT * FROM kegiatan  WHERE id_kegiatan = $id AND is_active = 1";
        return $this->db->query($queryKegiatan)->result_array();
    }
    public function getKegiatanDataAll()
    {
        return $this->db->get_where('kegiatan', ['id_kegiatan !=' => 1])->result_array();
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

    function getKegiatanRow($id)
    {
        $this->db->select('*');
        $this->db->from('kegiatan');
        $this->db->where('id_kegiatan', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
