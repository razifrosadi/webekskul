<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    public function getJadwalData()
    {
        $query = $this->db->get_where('jadwal');
        return $query->result_array();
    }
    public function getJadwalDataById($id)
    {
        $queryJadwal = "SELECT * FROM jadwal  WHERE id = $id AND is_active = 1";
        return $this->db->query($queryJadwal)->result_array();
    }
    public function getJadwalDataAll()
    {
        return $this->db->get_where('jadwal', ['id !=' => 1])->result_array();
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

    function getJadwalRow($id)
    {
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
