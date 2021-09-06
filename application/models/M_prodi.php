<?php

class M_prodi extends CI_Model
{

    function tampil_data()
	{
		return 
		$this->db->get('prodi')->result(); 
    }
    
    function post()
    {
        $data=array
        (
            'nama_prodi'=> $this->input->post('prodi')
        );
        $this->db->insert('prodi', $data);
    }

    function edit()
    {
        $data=array('nama_prodi'=> $this->input->post('prodi'));
        $this->db->where('id_prodi', $this->input->post('id'));
        $this->db->update('prodi',$data);
    }

    function get_one($id)
    {
        $param = array('id_prodi'=>$id);
        return $this->db->get_where('prodi',$param);
    }

    function hapus($id)
    {
        $this->db->where('id_prodi', $id);
        $this->db->delete('prodi');
    }

}
