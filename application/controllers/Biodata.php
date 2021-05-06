<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		check_not_login();
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
		$role = $this->fungsi->user_login()->id_role;
		if($role==3){
				
			$id_dosen=$this->fungsi->user_login()->id_user;
			$id=$this->fungsi->user_login()->id_user;

			$data['pendidikan'] = $this->m_pendidikan->tampil_data($id_dosen);
			$data['pengabdian'] = $this->m_pengabdian->tampil_data($id_dosen);
			$data['penelitian'] = $this->m_penelitian->tampil_data($id_dosen);
			$data['publikasi'] = $this->m_publikasi->tampil_data($id_dosen);
			$data['buku'] = $this->m_buku->tampil_data($id_dosen);
			$data['user'] = $this->m_biodata->tampil_data_user($id_dosen);
			$data['cek'] =$this->m_user->get_one($id)->row_array();
			
			$this->template->load('template/template', 'biodata/index', $data);
			$this->load->view('template/datatables');
		}
		else {
			redirect('errors');
		}
	}
}
