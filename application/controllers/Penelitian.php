<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		check_not_login();
        $this->load->model('m_penelitian');
    }

	public function index()
	{
		$id_dosen=$this->fungsi->user_login()->id_user;
		$data['record'] = $this->m_penelitian->tampil_data($id_dosen);
		$this->template->load('template/template', 'penelitian/index', $data);
		$this->load->view('template/datatables');
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			//proses riwayat_penelitian
			$id_dosen=$this->fungsi->user_login()->id_user;
			$this->m_penelitian->post($id_dosen);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notif', 'success');
				echo "<script>window.location='" . base_url('penelitian') . "';</script>";
			}
			else{
				$this->session->set_flashdata('notif', 'error');
				echo "<script>window.location='" . base_url('penelitian') . "';</script>";
			}
		} else {
			$this->template->load('template/template', 'penelitian/form_input');
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			//proses matkul
			$id         	=   $this->input->post('id');
            $data           =   array(
            'judul'			=> $this->input->post('judul'),
            'bidang_ilmu'	=> $this->input->post('bidang_ilmu'),
            'lembaga'		=> $this->input->post('lembaga'),
            'tahun'        	=> $this->input->post('tahun'),
        	);
        $this->m_penelitian->edit($data, $id);
        $this->session->set_flashdata('notif', 'updated');
        redirect('penelitian');
		} 
		else {
			$id = $this->uri->segment(3);
			$data['record'] = $this->m_penelitian->get_one($id)->row_array();
			$this->template->load('template/template','penelitian/form_edit', $data);
		}
	}

	function hapus()
	{
		$td = $this->uri->segment(3);
		$this->m_penelitian->hapus($td);
		$this->session->set_flashdata('notif', 'deleted');
		redirect('penelitian');
	}
}
