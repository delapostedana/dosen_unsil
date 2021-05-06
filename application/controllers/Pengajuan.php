<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('m_pengajuan');
	}

	function post()
	{
		$role = $this->fungsi->user_login()->id_role;
		if ($role == 3) {
			if (isset($_POST['submit'])) {
				$id_dosen = $this->input->post('id');
				$nomor = $this->m_pengajuan->cek_nomor();
				$no_urut = substr($nomor, 3, 4);
				$no_sekarang = $no_urut + 1;
				$this->m_pengajuan->post($id_dosen, $no_sekarang);

				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('notif', 'success');
					echo "<script>window.location='" . base_url('laporan/status_pengajuan') . "';</script>";
				} else {
					$this->session->set_flashdata('notif', 'error');
					echo "<script>window.location='" . base_url('laporan/status_pengajuan') . "';</script>";
				}
			}
		} else {
			redirect('errors');
		}
	}
}
