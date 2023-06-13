<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    public function getNilaiData()
    {
        $query = $this->db->get_where('nilai');
        return $query->result_array();
    }
    public function getNilaiDataById($id)
    {
        $queryNilai = "SELECT * FROM nilai  WHERE id = $id AND is_active = 1";
        return $this->db->query($queryNilai)->result_array();
    }
    public function getNilaiDataAll()
    {
        return $this->db->get_where('nilai', ['id !=' => 1])->result_array();
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

    function getNilaiRow($id)
    {
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
