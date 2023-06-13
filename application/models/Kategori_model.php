<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function getKategoriData()
    {
        $query = $this->db->get_where('kategori');
        return $query->result_array();
    }
    public function getKategoriDataById($id)
    {
        $queryKategori = "SELECT * FROM kategori  WHERE id = $id AND is_active = 1";
        return $this->db->query($queryKategori)->result_array();
    }
    public function getKategoriDataAll()
    {
        return $this->db->get_where('kategori', ['id !=' => 1])->result_array();
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

    function getKategoriRow($id)
    {
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
