<?php

class M_publikasi extends CI_Model
{

    function tampil_data($id_dosen)
	{
        $param = array('id_dosen'  =>$id_dosen);
		return 
		$this->db->get_where('publikasi',$param)->result(); 
    }
    
    function post($id_dosen)
    {
        $data=array
        (
            'judul_pub'     => $this->input->post('judul_pub'),
            'jurnal'        => $this->input->post('jurnal'),
            'no_artikel'    => $this->input->post('no_artikel'),
            'volume'        => $this->input->post('volume'),
            'tahun'         => $this->input->post('tahun'),
            'id_dosen'      => $id_dosen
        );
        $this->db->insert('publikasi', $data);
    }

    function edit($data, $id)
    {
        $this->db->where('id_publikasi', $id);
        $this->db->update('publikasi',$data);
    }

    function get_one($id)
    {
        $param = array('id_publikasi'  =>$id);
        return $this->db->get_where('publikasi',$param);
    }

    function hapus($id)
    {
        $this->db->where('id_publikasi', $id);
        $this->db->delete('publikasi');
    }

}