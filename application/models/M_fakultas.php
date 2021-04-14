<?php

class M_fakultas extends CI_Model
{

    function tampil_data()
	{
		return 
		$this->db->get('fakultas')->result(); 
    }

    function tampil_data_sort()
	{
		$this->db->order_by('nama_fakul', 'ASC');
        $query = $this->db->get('fakultas');
        return $query->result();
    }
    
    function post()
    {
        $data=array
        (
            'nama_fakul'=> $this->input->post('fakultas')
        );
        $this->db->insert('fakultas', $data);
    }

    function edit()
    {
        $data=array('nama_fakul'=> $this->input->post('fakultas'));
        $this->db->where('id_fakul', $this->input->post('id'));
        $this->db->update('fakultas',$data);
    }

    function get_one($id)
    {
        $param = array('id_fakul'=>$id);
        return $this->db->get_where('fakultas',$param);
    }

    function hapus($id)
    {
        $this->db->where('id_fakul', $id);
        $this->db->delete('fakultas');
    }

}