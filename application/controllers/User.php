<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('m_user');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$role = $this->fungsi->user_login()->id_role;
		if ($role == 1) {
			$data['record'] = $this->m_user->tampil_data();
			$this->template->load('template/template', 'user/index', $data);
			$this->load->view('template/datatables');
		} else {
			redirect('errors');
		}
	}

	function post()
	{
		$role = $this->fungsi->user_login()->id_role;
		if ($role == 1) {
			if (isset($_POST['submit'])) {
				//proses user
				$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
				$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
				$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]');


				$this->form_validation->set_message('required', '{field} wajib diisi');
				$this->form_validation->set_message('matches', '{field} tidak sama');
				$this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti');
				$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');

				if ($this->form_validation->run() == FALSE) {
					$this->template->load('template/template', 'user/form_input');
				} else {
					$this->m_user->post();
					if ($this->db->affected_rows() > 0) {
						$this->session->set_flashdata('notif', 'success');
						echo "<script>window.location='" . base_url('user') . "';</script>";
					} else {
						$this->session->set_flashdata('notif', 'error');
						echo "<script>window.location='" . base_url('user') . "';</script>";
					}
				}
			} else {
				$data['record'] = $this->m_user->tampil_data();
				$this->template->load('template/template', 'user/form_input', $data);
			}
		}
		else{
			redirect('errors');
		}
	}

	function username_check()
	{
		$role = $this->fungsi->user_login()->id_role;
		if ($role == 1) {	
			$post = $this->input->post(null, TRUE);
			$query = $this->db->query("SELECT * FROM user WHERE username ='$post[username]' AND id_user != $post[id_user]");
			if ($query->num_rows() > 0) {
				$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti yang lain');
				return FALSE;
			} else {
				return TRUE;
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
				$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
				$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
				if ($this->input->post('password')) {
					$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
					$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]');
					$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
					$this->form_validation->set_message('matches', '{field} tidak sama');
				}

				if ($this->input->post('passconf')) {
					$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]');
					$this->form_validation->set_message('matches', '{field} tidak sama');
				}

				if ($this->form_validation->run() == FALSE) {
					$id = $this->input->post('id_user');
					$data['record'] = $this->m_user->get_one($id)->row_array();
					$this->template->load('template/template', 'user/form_edit', $data);
				} else {
					if ($this->input->post('password') == null) {

						$id         	=   $this->input->post('id_user');
						$data           =   array(
							'nama_user'  		=> $this->input->post('nama_user'),
							'username'          => $this->input->post('username'),
							'email'	          	=> $this->input->post('email'),
							'id_role'           => $this->input->post('role'),
						);
						$this->m_user->edit($data, $id);
					} else {
						$id         	=   $this->input->post('id_user');
						$password 		= md5($this->input->post('password'));
						$data           =   array(
							'nama_user'  		=> $this->input->post('nama_user'),
							'username'          => $this->input->post('username'),
							'email'	          	=> $this->input->post('email'),
							'password'    	    => $password,
							'id_role'           => $this->input->post('role'),
						);
						$this->m_user->edit($data, $id);
					}
					$this->session->set_flashdata('notif', 'updated');
					redirect('user');
				}
			} else {
				$id = $this->uri->segment(3);
				$data['record'] = $this->m_user->get_one($id)->row_array();
				$this->template->load('template/template', 'user/form_edit', $data);
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
			$this->m_user->hapus($td);
			$this->session->set_flashdata('notif', 'deleted');
			redirect('user');
		}
		else{
			redirect('errors');
		}
	}
}
