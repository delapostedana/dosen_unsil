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
			$this->db->select('
			pengajuan.id_user,
			pengajuan.id_dosen, 
			pengajuan.id AS id_pengajuan,
			nidn,
			nama_user,
			program_studi,
			pendidikan_tertinggi'
		);
		$this->db->from('pengajuan');
		$this->db->join('user', 'pengajuan.id_dosen = user.id_user');
		$this->db->where('status_pengajuan','Approved');
		$this->db->group_by('id_dosen');
		$this->db->order_by('tgl_respon', 'DESC');

            return $this->db->get();
        }
    }

}
