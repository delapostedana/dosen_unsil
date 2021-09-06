<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('m_prodi');
	}

	public function index()
	{
		$role = $this->fungsi->user_login()->id_role;
		if ($role == 1) {
			$data['record'] = $this->m_prodi->tampil_data();
			$this->template->load('template/template', 'prodi/index', $data);
			$this->load->view('template/datatables');
		}
		else{
			redirect('errors');
		}
	}

	function post()
	{
		$role = $this->fungsi->user_login()->id_role;
		if ($role == 1) {
			if (isset($_POST['submit'])) {
				//proses prodi
				$this->m_prodi->post();
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('notif', 'success');
					echo "<script>window.location='" . base_url('prodi') . "';</script>";
				} else {
					$this->session->set_flashdata('notif', 'error');
					echo "<script>window.location='" . base_url('prodi') . "';</script>";
				}
			} else {
				$this->template->load('template/template', 'prodi/form_input');
			}
		}
		else{
			redirect('errors');
		}
	}

	function edit()
	{
		$role = $this->fungsi->user_login()->id_role;
		if ($role == 1) {
			if (isset($_POST['submit'])) {
				//proses prodi
				$id         	=   $this->input->post('id');
				$prodi		    =   $this->input->post('prodi');
				$data           =   array(
					'prodi'        => $prodi,
				);
				$this->m_prodi->edit($data, $id);
				$this->session->set_flashdata('notif', 'updated');
				redirect('prodi');
			} else {
				$id = $this->uri->segment(3);
				$data['record'] = $this->m_prodi->get_one($id)->row_array();
				$this->template->load('template/template', 'prodi/form_edit', $data);
			}
		}
		else{
			redirect('errors');
		}
	}

	function hapus()
	{
		$role = $this->fungsi->user_login()->id_role;
		if ($role == 1) {
			$td = $this->uri->segment(3);
			$this->m_prodi->hapus($td);
			$this->session->set_flashdata('notif', 'deleted');
			redirect('prodi');
		}
		else{
			redirect('errors');
		}
	}
}
