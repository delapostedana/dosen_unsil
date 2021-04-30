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
        $data['record']     = $this->m_user->get_one($id)->row_array();
        $data['dosen']      = $this->m_dashboard->count_dosen();
        $data['fakul']      = $this->m_dashboard->count_fakul();
        $data['matkul']     = $this->m_dashboard->count_matkul();
        $data['user']       = $this->m_dashboard->count_user();
        $data['approval']   = $this->m_dashboard->approval()->result_array();

        $this->template->load('template/template', 'dashboard/index', $data);
	}
}
