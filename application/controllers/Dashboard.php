<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_user');
        $this->load->model('m_dashboard');
    }

	public function index()
	{
        $id=$this->fungsi->user_login()->id_user; 
        $data['record']                 = $this->m_user->get_one($id)->row_array();
        $data['dosen']                  = $this->m_dashboard->count_dosen();
        $data['fakul']                  = $this->m_dashboard->count_fakul();
        $data['matkul']                 = $this->m_dashboard->count_matkul();
        $data['user']                   = $this->m_dashboard->count_user();
        $data['approval']               = $this->m_dashboard->approval()->result_array();
        $data['pengajuan_proses']       = $this->m_dashboard->approval()->num_rows();
        $data['pengajuan_approved']     = $this->m_dashboard->pengajuan_approved()->num_rows();
        $data['pengajuan_reject']       = $this->m_dashboard->pengajuan_reject()->num_rows();
        $data['pengajuan']              = $this->m_dashboard->count_pengajuan();

        $data['pendidikan']             = $this->m_dashboard->count_pendidikan($id)->num_rows();
        $data['pengabdian']             = $this->m_dashboard->count_pengabdian($id)->num_rows();
        $data['penelitian']             = $this->m_dashboard->count_penelitian($id)->num_rows();
        $data['publikasi']              = $this->m_dashboard->count_publikasi($id)->num_rows();
        $data['buku']                   = $this->m_dashboard->count_buku($id)->num_rows();
        $data['pengajuan_me']           = $this->m_dashboard->count_pengajuan_me($id)->num_rows();
        $data['pengajuanku']            = $this->m_dashboard->pengajuanku($id)->result_array();

        $this->template->load('template/template', 'dashboard/index', $data);
	}
}
