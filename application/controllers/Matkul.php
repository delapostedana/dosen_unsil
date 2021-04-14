<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_matkul');
    }

	public function index()
	{
		$data['record'] = $this->m_matkul->tampil_data();
		$this->template->load('template/template', 'matkul/index', $data);
		$this->load->view('template/datatables');
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			//proses matkul
			$this->m_matkul->post();
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notif', 'success');
				echo "<script>window.location='" . base_url('matkul') . "';</script>";
			}
			else{
				$this->session->set_flashdata('notif', 'error');
				echo "<script>window.location='" . base_url('matkul') . "';</script>";
			}
		} else {
			$this->template->load('template/template', 'matkul/form_input');
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			//proses matkul
			$id         	=   $this->input->post('id');
            $matkul		    =   $this->input->post('matkul');
            $data           =   array(
            'matkul'        => $matkul,
        	);
        $this->m_matkul->edit($data, $id);
        $this->session->set_flashdata('notif', 'updated');
        redirect('matkul');
		} 
		else {
			$id = $this->uri->segment(3);
			$data['record'] = $this->m_matkul->get_one($id)->row_array();
			$this->template->load('template/template','matkul/form_edit', $data);
		}
	}

	function hapus()
	{
		$td = $this->uri->segment(3);
		$this->m_matkul->hapus($td);
		$this->session->set_flashdata('notif', 'deleted');
		redirect('matkul');
	}

}
