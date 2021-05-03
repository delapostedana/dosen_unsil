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

    function count_pengajuan()
	{
		return $this->db->get('v_pengajuan')->num_rows();
    }

    function pengajuan_approved()
	{
        return $this->db->get_where('v_pengajuan',array('status_pengajuan'=>'Approved'));
    }

    function pengajuan_reject()
	{
        return $this->db->get_where('v_pengajuan',array('status_pengajuan'=>'Reject'));
    }

    function count_pendidikan($id)
	{
        return $this->db->get_where('riwayat_pendidikan',array('id_dosen'=>$id));
    }

    function count_pengabdian($id)
	{
        return $this->db->get_where('pengabdian',array('id_dosen'=>$id));
    }

    function count_penelitian($id)
	{
        return $this->db->get_where('penelitian',array('id_dosen'=>$id));
    }

    function count_publikasi($id)
	{
        return $this->db->get_where('publikasi',array('id_dosen'=>$id));
    }

    function count_buku($id)
	{
        return $this->db->get_where('buku',array('id_dosen'=>$id));
    }

    function count_pengajuan_me($id)
	{
        return $this->db->get_where('pengajuan',array('id_dosen'=>$id));
    }

    function pengajuanku($id)
	{
        return $this->db->get_where('v_pengajuan',array('id_dosen'=>$id));
    }
}