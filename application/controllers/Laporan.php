<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 
{
        public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_laporan'); 
	}

        public function status_pengajuan()
        {
                $id = $this->session->userdata['id_user'];
                $data['record'] = $this->m_laporan->get_one($id)->result();
                $this->template->load('template/template', 'laporan/status_pengajuan', $data);
        }

        public function daftar_dosen()
	{
                $this->template->load('template/template', 'laporan/daftar_dosen');
	}
}
