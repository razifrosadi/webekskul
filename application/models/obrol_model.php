<?php
defined('BASEPATH') or exit('No direct script access allowed');

class obrol_model extends CI_Model
{
    public function SelectBy($penerima_id)
    {
        return $this->db->where('penerima_id', $penerima_id)->or_where('pengirim_id', $penerima_id)->get('obrol')->result_array();
    }
    public function SendMessage($data)
    {
        // die(print_r($data));
        return $this->db->insert('obrol', $data);
    }
    public function MarkAllAsRead($user_id, $pengirim_id)
    {
        $data = array('dibaca' => true);
        $this->db->where('penerima_id', $user_id);
        $this->db->where('pengirim_id', $pengirim_id);
        $this->db->update('obrol', $data);
    }
}
