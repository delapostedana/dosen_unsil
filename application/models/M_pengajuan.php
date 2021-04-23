<?php

class M_pengajuan extends CI_Model
{

    function cek($id_dosen)
	{
		$this->db->select('*, (SELECT COUNT(*) FROM pengajuan WHERE id_dosen = '.$id_dosen.') as count_dosen');
        $this->db->from('pengajuan');
        $query = $this->db->get()->result();
        return $query;
    }

    function cek_nomor()
	{
        $query = $this->db->query("SELECT MAX(no_pengajuan) as nomor from pengajuan");
        $hasil = $query->row();
        return $hasil->nomor;
    }
    
    function post($id_dosen, $no_sekarang)
    {
        $kode = "PBD";
        $no_pengajuan = $kode .= sprintf("%04s", $no_sekarang);
        $data=array
        (
            'no_pengajuan'          => $no_pengajuan,
            'id_dosen'              => $id_dosen,
            'status_pengajuan'      => "Proses",
            'tgl_pengajuan'         => date("Y-m-d h:i:s"),
           
        );
        $this->db->insert('pengajuan', $data);
    }

    public function get_active() {
        {
            $this->db->order_by('nama_user', 'ASC');
            return $this->db->get_where('v_pengajuan',array('status_pengajuan'=>'Approved'));
        }
    }

}