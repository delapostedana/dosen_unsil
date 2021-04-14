<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengabdian extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_pengabdian');
        $this->load->model('m_matkul');
    }

	public function index()
	{
		$id_dosen=$this->fungsi->user_login()->id_user;
		$data['record'] = $this->m_pengabdian->tampil_data($id_dosen);
		$this->template->load('template/template', 'pengabdian/index', $data);
		$this->load->view('template/datatables');
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			//proses pengabdian
			$id_dosen=$this->fungsi->user_login()->id_user;
			$this->m_pengabdian->post($id_dosen);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notif', 'success');
				echo "<script>window.location='" . base_url('pengabdian') . "';</script>";
			}
			else{
				$this->session->set_flashdata('notif', 'error');
				echo "<script>window.location='" . base_url('pengabdian') . "';</script>";
			}
		} else {
			$data['record'] = $this->m_matkul->tampil_data();
			$this->template->load('template/template', 'pengabdian/form_input',$data);
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			//proses matkul
			$id         	=   $this->input->post('id');
            $data           =   array(
				'perguruan_tinggi'  => $this->input->post('perguruan_tinggi'),
				'smester'           => $this->input->post('smester'),
				'id_matkul'         => $this->input->post('matkul'),
				'kelas'             => $this->input->post('kelas'),
				'id_dosen'          => 0
        	);
        $this->m_pengabdian->edit($data, $id);
        $this->session->set_flashdata('notif', 'updated');
        redirect('pengabdian');
		} 
		else {
			$id = $this->uri->segment(3);
			$data['record'] = $this->m_pengabdian->get_one($id)->row_array();
			$data['matkul'] = $this->m_matkul->tampil_data();
			$this->template->load('template/template','pengabdian/form_edit', $data);
		}
	}

	function hapus()
	{
		$td = $this->uri->segment(3);
		$this->m_pengabdian->hapus($td);
		$this->session->set_flashdata('notif', 'deleted');
		redirect('pengabdian');
	}
}
