<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_user'); 
	}
	public function login()
	{
		check_already_login();
		$this->load->view('auth/login');
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$query = $this->m_user->login($post); //ambil data input dan cek di database
			if ($query->num_rows() > 0)  //jika ada akunnya, maka ambil data user untuk membuat session
			{ 
				$row = $query->row();
				$params = array(
					'id_user' => $row->id_user,
				);
				$id = $row->id_user;
				$data['data'] = $this->m_user->get_one($id)->row_array();
				$this->load->view('template/template', $data);
				
				$this->session->set_userdata($params); //buat session
				
				$this->session->set_flashdata('notif', 'signin');
				echo "<script>
					window.location='" . base_url('dashboard') . "' 
				</script>"; //jika sesuai username dan password nya maka akan di direct ke halaman sistem
			} 
			else {
				$this->session->set_flashdata('notif', 'error');
				echo "<script>window.location='" . base_url('auth/login') . "';</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('id_user');
		$this->session->unset_userdata($params); //Hapus session
		// var_dump($this->session->unset_userdata($params)); die;
		redirect('auth/login');
	}


    public function register()
	{
		$this->load->view('auth/register.php');
	}
}
