<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coach_model extends CI_Model
{
    public function getCoachData()
    {
        $query = $this->db->get_where('coach');
        return $query->result_array();
    }
    public function getCoachDataById($id)
    {
        $queryCoach = "SELECT * FROM coach  WHERE id = $id AND is_active = 1";
        return $this->db->query($queryCoach)->result_array();
    }
    public function getCoachDataAll()
    {
        return $this->db->get_where('coach', ['id !=' => 1])->result_array();
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

    function getCoachRow($id)
    {
        $this->db->select('*');
        $this->db->from('coach');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
