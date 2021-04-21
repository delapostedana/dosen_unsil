<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approval extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		check_not_login();
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
		// $id_dosen=$this->fungsi->user_login()->id_user;
		$data['record'] = $this->m_approval->tampil_data();
		$this->template->load('template/template', 'approval/index', $data);
		$this->load->view('template/datatables');
	}

	public function detail(){
		$id_pengajuan 	= $this->uri->segment(3);
		$select 		= $this->m_approval->select_data($id_pengajuan);
		$id_dosen 		= $select['id_dosen'];

			$data['pendidikan'] = $this->m_pendidikan->tampil_data($id_dosen);
			$data['pengabdian'] = $this->m_pengabdian->tampil_data($id_dosen);
			$data['penelitian'] = $this->m_penelitian->tampil_data($id_dosen);
			$data['publikasi'] 	= $this->m_publikasi->tampil_data($id_dosen);
			$data['buku'] 		= $this->m_buku->tampil_data($id_dosen);
			$data['user'] 		= $this->m_biodata->tampil_data_user($id_dosen);
			$data['pengajuan'] 	= $select;

			$this->template->load('template/template','approval/detail', $data);
	}

	public function approve(){
		$id_pengajuan 	= $this->input->post('id_pengajuan');
		$data           =   array(
			'id_user'  			=> $this->fungsi->user_login()->id_user,
			'tgl_respon'     	=> date("Y-m-d h:i:s"),
			'status_pengajuan'	=> "Approved",
			'alasan'			=> "",
		);
		$this->m_approval->approve($data, $id_pengajuan);
        $this->session->set_flashdata('notif', 'approved');
        redirect('approval');
	}

	public function approved($id){
		$id_pengajuan 	= $id;
		$data           =   array(
			'id_user'  			=> $this->fungsi->user_login()->id_user,
			'tgl_respon'     	=> date("Y-m-d h:i:s"),
			'status_pengajuan'	=> "Approved",
			'alasan'			=> "",
		);
		$this->m_approval->approve($data, $id_pengajuan);
        $this->session->set_flashdata('notif', 'approved');
        redirect('approval');
	}

	public function reject(){
		$id_pengajuan 	= $this->input->post('id_pengajuan');
		$data           =   array(
			'id_user'  			=> $this->fungsi->user_login()->id_user,
			'tgl_respon'     	=> date("Y-m-d h:i:s"),
			'status_pengajuan'	=> "Reject",
			'alasan'			=> $this->input->post('alasan')
		);
		$this->m_approval->approve($data, $id_pengajuan);
        $this->session->set_flashdata('notif', 'reject');
        redirect('approval');
	}
	
	public function rejects(){
		$id_pengajuan 	= $this->input->post('id_pengajuan');
		// echo $id_pengajuan; die;
		$data           =   array(
			'id_user'  			=> $this->fungsi->user_login()->id_user,
			'tgl_respon'     	=> date("Y-m-d h:i:s"),
			'status_pengajuan'	=> "Reject",
			'alasan'			=> $this->input->post('alasan')
		);
		$this->m_approval->approve($data, $id_pengajuan);
        $this->session->set_flashdata('notif', 'reject');
        redirect('approval');
	}
}
