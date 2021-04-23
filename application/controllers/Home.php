<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('m_pengajuan');
		$this->load->model('m_approval');
		$this->load->model('m_biodata');
        $this->load->model('m_pendidikan');
        $this->load->model('m_pengabdian');
        $this->load->model('m_penelitian');
        $this->load->model('m_publikasi');
        $this->load->model('m_buku');
        $this->load->model('m_user');
    }

	public function index()
	{
		$data['record'] = $this->m_pengajuan->get_active()->result();
		$this->load->view('home/index.php', $data);
	}

	public function v_biodata()
	{
		$id 			= $this->uri->segment(3);
		$id_dosen 		= $id;

			$data['pendidikan'] = $this->m_pendidikan->tampil_data($id_dosen);
			$data['pengabdian'] = $this->m_pengabdian->tampil_data($id_dosen);
			$data['penelitian'] = $this->m_penelitian->tampil_data($id_dosen);
			$data['publikasi'] 	= $this->m_publikasi->tampil_data($id_dosen);
			$data['buku'] 		= $this->m_buku->tampil_data($id_dosen);
			$data['user'] 		= $this->m_biodata->tampil_data_user($id_dosen);

		$this->load->view('home/v_biodata.php', $data);
	}
}
