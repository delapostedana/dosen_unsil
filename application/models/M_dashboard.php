<?php

class M_dashboard extends CI_Model
{
    function count_dosen()
	{
        $sql = "SELECT * FROM `v_pengajuan` WHERE status_pengajuan = 'Approved'"; 
		return $this->db->query($sql)->num_rows();
    }

    function count_fakul()
	{
		return $this->db->get('fakultas')->num_rows();
    }

    function count_matkul()
	{
		return $this->db->get('matkul')->num_rows();
    }

    function count_user()
	{
		return $this->db->get('user')->num_rows();
    }

    function approval()
	{
        return $this->db->get_where('v_pengajuan',array('status_pengajuan'=>'Proses'));
    }

}