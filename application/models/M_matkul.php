<?php

class M_matkul extends CI_Model
{

    function tampil_data()
	{
		return 
		$this->db->get('matkul')->result(); 
    }
    
    function post()
    {
        $data=array
        (
            'nama_matkul'=> $this->input->post('matkul')
        );
        $this->db->insert('matkul', $data);
    }

    function edit()
    {
        $data=array('nama_matkul'=> $this->input->post('matkul'));
        $this->db->where('id_matkul', $this->input->post('id'));
        $this->db->update('matkul',$data);
    }

    function get_one($id)
    {
        $param = array('id_matkul'=>$id);
        return $this->db->get_where('matkul',$param);
    }

    function hapus($id)
    {
        $this->db->where('id_matkul', $id);
        $this->db->delete('matkul');
    }

}