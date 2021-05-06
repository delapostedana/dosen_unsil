<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_pendidikan');
    }

	public function index()
	{
		$role = $this->fungsi->user_login()->id_role;
		if($role==3){	
			$id_dosen=$this->fungsi->user_login()->id_user;
			$data['record'] = $this->m_pendidikan->tampil_data($id_dosen);
			$this->template->load('template/template', 'riwayat_pendidikan/index', $data);
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
				$id_dosen=$this->fungsi->user_login()->id_user;
				$this->m_pendidikan->post($id_dosen);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('notif', 'success');
					echo "<script>window.location='" . base_url('pendidikan') . "';</script>";
				}
				else{
					$this->session->set_flashdata('notif', 'error');
					echo "<script>window.location='" . base_url('pendidikan') . "';</script>";
				}
			} else {
				$this->template->load('template/template', 'riwayat_pendidikan/form_input');
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
				//proses matkul
				$id         	=   $this->input->post('id');
				$data           =   array(
				'perguruan_tinggi'	=> $this->input->post('perguruan_tinggi'),
				'gelar_akademik'	=> $this->input->post('gelar_akademik'),
				'tahun_ijazah'		=> $this->input->post('tahun_ijazah'),
				'jenjang'        	=> $this->input->post('jenjang'),
				);
			$this->m_pendidikan->edit($data, $id);
			$this->session->set_flashdata('notif', 'updated');
			redirect('pendidikan');
			} 
			else {
				$id = $this->uri->segment(3);
				$data['record'] = $this->m_pendidikan->get_one($id)->row_array();
				$this->template->load('template/template','riwayat_pendidikan/form_edit', $data);
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
			$this->m_pendidikan->hapus($td);
			$this->session->set_flashdata('notif', 'deleted');
			redirect('pendidikan');
		}
		else{
			redirect('errors');
		}
	}
}
