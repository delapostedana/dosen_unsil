<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		check_not_login();
        $this->load->model('m_buku');
    }

	public function index()
	{
		$id_dosen=$this->fungsi->user_login()->id_user;
		$data['record'] = $this->m_buku->tampil_data($id_dosen);
		$this->template->load('template/template', 'buku/index', $data);
		$this->load->view('template/datatables');
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			//proses buku
			$id_dosen=$this->fungsi->user_login()->id_user;
			$this->m_buku->post($id_dosen);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('notif', 'success');
				echo "<script>window.location='" . base_url('buku') . "';</script>";
			}
			else{
				$this->session->set_flashdata('notif', 'error');
				echo "<script>window.location='" . base_url('buku') . "';</script>";
			}
		} else {
			
			$this->template->load('template/template', 'buku/form_input');
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$id         	=   $this->input->post('id');
            $data           =   array(
				'judul_buku'  		=> $this->input->post('judul_buku'),
				'isbn'           	=> $this->input->post('isbn'),
				'penerbit'        	=> $this->input->post('penerbit'),
				'tahun_terbit'    	=> $this->input->post('tahun_terbit'),
        	);
        $this->m_buku->edit($data, $id);
        $this->session->set_flashdata('notif', 'updated');
        redirect('buku');
		} 
		else {
			$id = $this->uri->segment(3);
			$data['record'] = $this->m_buku->get_one($id)->row_array();
			$this->template->load('template/template','buku/form_edit', $data);
		}
	}

	function hapus()
	{
		$td = $this->uri->segment(3);
		$this->m_buku->hapus($td);
		$this->session->set_flashdata('notif', 'deleted');
		redirect('buku');
	}
}
