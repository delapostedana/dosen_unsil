<?php

class M_approval extends CI_Model
{

    function tampil_data()
	{
		// $param = array('status_pengajuan'  = );
		// return $this->db->get_where('pengajuan',array('status_pengajuan'=>'Proses'))->result();
		return $this->db->get('v_pengajuan')->result();
    }
    
    function select_data($id_pengajuan)
	{
		return $this->db->get_where('pengajuan',array('id'=>$id_pengajuan))->row_array();
    }

    function approve($data, $id_pengajuan)
    {
        $this->db->where('id', $id_pengajuan);
        $this->db->update('pengajuan',$data);
    }

}