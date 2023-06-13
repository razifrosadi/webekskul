<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getBeritaData()
    {
        $query = $this->db->get_where('berita');
        return $query->result_array();
    }
    public function getBeritaDataById($id)
    {
        $queryBerita = "SELECT * FROM berita  WHERE id = $id AND is_active = 1";
        return $this->db->query($queryBerita)->result_array();
    }
    public function getBeritaDataAll()
    {
        return $this->db->get_where('berita', ['id !=' => 1])->result_array();
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

    function getBeritaRow($id)
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
