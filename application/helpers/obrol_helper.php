<?php
function messagenotread($pengirim_id, $penerima_id)
{
    $CI = get_instance();
    $CI->db->where('pengirim_id', $pengirim_id);
    $CI->db->where('penerima_id', $penerima_id);
    $CI->db->where('dibaca', '0');
    $result = $CI->db->get('obrol');
    return $result->num_rows();
}
