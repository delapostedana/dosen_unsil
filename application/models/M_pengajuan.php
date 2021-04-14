<?php

class M_pengajuan extends CI_Model
{

    function cek($id_dosen)
	{
        // $param = array('id_dosen'  =>$id_dosen);
        // $id=$id_dosen;
		$this->db->select('*, (SELECT COUNT(*) FROM pengajuan WHERE id_dosen = '.$id_dosen.') as count_dosen');
        $this->db->from('pengajuan');
        $query = $this->db->get()->result();
        return $query;
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