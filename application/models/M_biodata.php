<?php

class M_biodata extends CI_Model
{
    function tampil_data_user($id_dosen)
	{
        $param = array('id_user'  =>$id_dosen);
		return $this->db->get_where('user',$param)->row_array();
    }
}