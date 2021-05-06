<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		check_not_login();
        $this->load->model('m_publikasi');
    }

	public function index()
	{
		$role = $this->fungsi->user_login()->id_role;
		if($role==3){	
			$id_dosen=$this->fungsi->user_login()->id_user;
			$data['record'] = $this->m_publikasi->tampil_data($id_dosen);
			$this->template->load('template/template', 'publikasi/index', $data);
			$this->load->view('template/datatables');
		}
		else{
			redirect('errors');
		}
	}

	function post()
	{
		$role = $this->fungsi->user_login()->id_role;
		if($role==3){	
			if (isset($_POST['submit'])) {
				//proses publikasi
				$id_dosen=$this->fungsi->user_login()->id_user;
				$this->m_publikasi->post($id_dosen);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('notif', 'success');
					echo "<script>window.location='" . base_url('publikasi') . "';</script>";
				}
				else{
					$this->session->set_flashdata('notif', 'error');
					echo "<script>window.location='" . base_url('publikasi') . "';</script>";
				}
			} else {
				$this->template->load('template/template', 'publikasi/form_input');
			}
		}
		else{
			redirect('errors');
		}
	}

	function edit()
	{
		$role = $this->fungsi->user_login()->id_role;
		if($role==3){	
			if (isset($_POST['submit'])) {
				$id         	=   $this->input->post('id');
				$data           =   array(
					'judul_pub'  		=> $this->input->post('judul_pub'),
					'jurnal'           	=> $this->input->post('jurnal'),
					'no_artikel'        => $this->input->post('no_artikel'),
					'volume'            => $this->input->post('volume'),
					'tahun'             => $this->input->post('tahun'),
				);
			$this->m_publikasi->edit($data, $id);
			$this->session->set_flashdata('notif', 'updated');
			redirect('publikasi');
			} 
			else {
				$id = $this->uri->segment(3);
				$data['record'] = $this->m_publikasi->get_one($id)->row_array();
				$this->template->load('template/template','publikasi/form_edit', $data);
			}
		}
		else{
			redirect('errors');
		}
	}

	function hapus()
	{
		$role = $this->fungsi->user_login()->id_role;
		if($role==3){	
			$td = $this->uri->segment(3);
			$this->m_publikasi->hapus($td);
			$this->session->set_flashdata('notif', 'deleted');
			redirect('publikasi');
		}
		else{
			redirect('errors');
		}
	}
}
