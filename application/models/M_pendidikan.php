<?php

class M_pendidikan extends CI_Model
{

    function tampil_data($id_dosen)
	{
        $param = array('id_dosen'  =>$id_dosen);
		return $this->db->get_where('riwayat_pendidikan',$param)->result();
    }
    
    function post($id_dosen)
    {
        $data=array
        (
            'perguruan_tinggi'  => $this->input->post('perguruan_tinggi'),
            'gelar_akademik'    => $this->input->post('gelar_akademik'),
            'tahun_ijazah'      => $this->input->post('tahun_ijazah'),
            'jenjang'           => $this->input->post('jenjang'),
            'id_dosen'          => $id_dosen
        );
        $this->db->insert('riwayat_pendidikan', $data);
    }

    function edit($data, $id)
    {
        $this->db->where('id_riw_pendidikan', $id);
        $this->db->update('riwayat_pendidikan',$data);
    }

    function get_one($id)
    {
        $param = array('id_riw_pendidikan'  =>$id);
        return $this->db->get_where('riwayat_pendidikan',$param);
    }

    function hapus($id)
    {
        $this->db->where('id_riw_pendidikan', $id);
        $this->db->delete('riwayat_pendidikan');
    }

}