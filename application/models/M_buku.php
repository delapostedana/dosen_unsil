<?php

class M_buku extends CI_Model
{

    function tampil_data($id_dosen)
	{
		$param = array('id_dosen'  =>$id_dosen);
		return $this->db->get_where('buku',$param)->result();
    }
    
    function post($id_dosen)
    {
        $data=array
        (
            'judul_buku'    => $this->input->post('judul_buku'),
            'isbn'          => $this->input->post('isbn'),
            'penerbit'      => $this->input->post('penerbit'),
            'tahun_terbit'  => $this->input->post('tahun_terbit'),
            'id_dosen'      => $id_dosen
        );
        $this->db->insert('buku', $data);
    }

    function edit($data, $id)
    {
        $this->db->where('id_buku', $id);
        $this->db->update('buku',$data);
    }

    function get_one($id)
    {
        $param = array('id_buku'  =>$id);
        return $this->db->get_where('buku',$param);
    }

    function hapus($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
    }

}