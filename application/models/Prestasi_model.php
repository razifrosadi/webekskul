<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi_model extends CI_Model
{
    public function getPrestasiData()
    {
        $query = $this->db->get_where('prestasi');
        return $query->result_array();
    }
    public function getPrestasiDataById($id)
    {
        $queryPrestasi = "SELECT * FROM prestasi  WHERE id = $id AND is_active = 1";
        return $this->db->query($queryPrestasi)->result_array();
    }
    public function getPrestasiDataAll()
    {
        return $this->db->get_where('prestasi', ['id !=' => 1])->result_array();
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

    function getPrestasiRow($id)
    {
        $this->db->select('*');
        $this->db->from('prestasi');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
