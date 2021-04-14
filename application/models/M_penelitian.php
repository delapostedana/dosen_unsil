<?php

class M_penelitian extends CI_Model
{

    function tampil_data($id_dosen)
	{
        $param = array('id_dosen'  =>$id_dosen);
		return $this->db->get_where('penelitian',$param)->result();
    }
    
    function post($id_dosen)
    {
        $data=array
        (
            'judul'         => $this->input->post('judul'),
            'bidang_ilmu'   => $this->input->post('bidang_ilmu'),
            'lembaga'       => $this->input->post('lembaga'),
            'tahun'         => $this->input->post('tahun'),
            'id_dosen'      => $id_dosen
        );
        $this->db->insert('penelitian', $data);
    }

    function edit($data, $id)
    {
        $this->db->where('id_penelitian', $id);
        $this->db->update('penelitian',$data);
    }

    function get_one($id)
    {
        $param = array('id_penelitian'  =>$id);
        return $this->db->get_where('penelitian',$param);
    }

    function hapus($id)
    {
        $this->db->where('id_penelitian', $id);
        $this->db->delete('penelitian');
    }

}