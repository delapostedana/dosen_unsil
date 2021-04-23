<?php

class M_laporan extends CI_Model
{

    function get_one($id)
    {
        $param = array('id_dosen'  =>$id);
        $this->db->order_by('tgl_pengajuan', 'DESC');
        return $this->db->get_where('v_pengajuan',$param);
    }


}