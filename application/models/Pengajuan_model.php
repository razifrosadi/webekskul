<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_model extends CI_Model
{
    public function getPengajuanData()
    {
        $query = $this->db->get_where('pengajuan');
        return $query->result_array();
    }
    public function getPengajuanDataById($id)
    {
        $queryPengajuan = "SELECT * FROM pengajuan  WHERE id = $id AND is_active = 1";
        return $this->db->query($queryPengajuan)->result_array();
    }
    public function getPengajuanDataAll()
    {
        return $this->db->get_where('pengajuan', ['id !=' => 1])->result_array();
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

    function getPengajuanRow($id)
    {
        $this->db->select('*');
        $this->db->from('pengajuan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
