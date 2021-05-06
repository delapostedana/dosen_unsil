<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fakultas extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('m_fakultas');
	}

	public function index()
	{
		$role = $this->fungsi->user_login()->id_role;
		if ($role == 1) {
			$data['record'] = $this->m_fakultas->tampil_data();
			$this->template->load('template/template', 'fakultas/index', $data);
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
				//proses fakultas
				$this->m_fakultas->post();
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('notif', 'success');
					echo "<script>window.location='" . base_url('fakultas') . "';</script>";
				} else {
					$this->session->set_flashdata('notif', 'error');
					echo "<script>window.location='" . base_url('fakultas') . "';</script>";
				}
			} else {
				$this->template->load('template/template', 'fakultas/form_input');
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
				//proses fakultas
				$id             =   $this->input->post('id');
				$fakultas       =   $this->input->post('fakultas');
				$data           =   array(
					'fakultas'        => $fakultas,
				);
				$this->m_fakultas->edit($data, $id);
				$this->session->set_flashdata('notif', 'updated');
				redirect('fakultas');
			} else {
				$id = $this->uri->segment(3);
				$data['record'] = $this->m_fakultas->get_one($id)->row_array();
				$this->template->load('template/template', 'fakultas/form_edit', $data);
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
			$this->m_fakultas->hapus($td);
			$this->session->set_flashdata('notif', 'deleted');
			redirect('fakultas');
		}
		else{
			redirect('errors');
		}
	}
}
