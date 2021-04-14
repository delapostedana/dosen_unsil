<?php

class M_pengabdian extends CI_Model
{

    function tampil_data($id_dosen)
	{
        $param = array('id_dosen'  =>$id_dosen);
		return 
		$this->db->get_where('v_matkul_pengabdian',$param)->result(); 
    }
    
    function post($id_dosen)
    {
        $data=array
        (
            'perguruan_tinggi'  => $this->input->post('perguruan_tinggi'),
            'smester'           => $this->input->post('smester'),
            'id_matkul'         => $this->input->post('matkul'),
            'kelas'             => $this->input->post('kelas'),
            'id_dosen'          => $id_dosen
        );
        $this->db->insert('pengabdian', $data);
    }

    function edit($data, $id)
    {
        $this->db->where('id_pengab', $id);
        $this->db->update('pengabdian',$data);
    }

    function get_one($id)
    {
        $param = array('id_pengab'  =>$id);
        return $this->db->get_where('pengabdian',$param);
    }

    function hapus($id)
    {
        $this->db->where('id_pengab', $id);
        $this->db->delete('pengabdian');
    }

}