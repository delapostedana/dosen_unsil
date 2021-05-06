<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
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

	public function regist()
	{
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('re-password', 'Konfirmasi Password', 'required|matches[password]');
			
			
			$this->form_validation->set_message('required', '{field} wajib diisi');
			$this->form_validation->set_message('matches', '{field} tidak sama');
			$this->form_validation->set_message('is_unique', '{field} sudah dipakai, silahkan ganti');
			$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('auth/register.php');
				}
			else {
				$this->m_user->regist();
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('notif', 'success');
					echo "<script>window.location='" . base_url('auth/login') . "';</script>";
				}
				else{
					$this->session->set_flashdata('notif', 'error');
					echo "<script>window.location='" . base_url('auth/register') . "';</script>";
				}
			} 
		
	}

	private function _sendEmail($link, $email){
		$config = [
			'protocol' 			=> 'smtp',
			'smtp_host' 		=> 'ssl://smtp.googlemail.com',
			'smtp_user'			=> 'dosensiliwangi@gmail.com',
			'smtp_pass'			=> 'Adi12345',
			'smtp_port'			=> 465,
			'mailtype'			=> 'html',
			'charset'			=> 'utf-8',
			'newline'			=> "\r\n",
		];

		$this->load->library('email', $config);
		$this->email->from('dosensiliwangi@gmail.com', 'Dosen Siliwangi');
		$this->email->to($email);
		$this->email->subject('Reset Password');
		$this->email->message('Hallo, anda menerima email ini karena ada permintaan untuk mereset  
		password anda.<br><br> <strong>Jika benar itu adalah anda, silahkan klik link berikut : </strong> '. $link);

		if($this->email->send()){
			$this->session->set_flashdata('notif', 'send');
			echo "<script>window.location='" . base_url('auth/login') . "';</script>";
		}else{
			echo $this->email->print_debugger();
		}

	}

	public function forgot_password()
	{
		$this->load->view('auth/forgot_pass.php');
	}

	public function forgot(){

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/forgot_pass.php');
			}
		else{
			$username = $this->input->post('username');
			$userInfo = $this->m_user->getUserInfoByEmail($username);

			if(!$userInfo){
				$this->session->set_flashdata('notif', 'error');
				echo "<script>window.location='" . base_url('auth/forgot_password') . "';</script>";
				die;
			}
			else{
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'id_user'	=> $userInfo->id_user,
					'token'		=> $token,
					'created'	=> date('Y-m-d'),
				];
				$this->db->insert('tokens', $user_token);

				$email		= $userInfo->email;
				$url 		= site_url() . 'auth/reset_password?id_user='.$userInfo->id_user.'&token=' . urlencode($token);
				$link 		= '<a href="' . $url . '">' . $url . '</a>';

			$this->_sendEmail($link,$email);
			}

		}

	}

	public function reset_password()
    {
		$id_user 	= $this->input->get('id_user');
		$token 		= $this->input->get('token');
		// echo $token; die;
		$user		= $this->db->get_where('tokens', ['id_user'=>$id_user])->row_array();

		if ($user){
			$usertoken		= $this->db->get_where('tokens', ['token'=>$token, ])->row_array();

			if ($usertoken){
				$date = date('Y-m-d');
				
				if($usertoken['created'] != $date){
					echo 'Token expired!!';
				}
				else{
					$this->session->set_userdata('reset_username', $user);
					$this->changePassword();
				}
			}
			else{
				echo 'Token tidak valid';
				// redirect('auth/login');
			}
		}
		else{
			echo 'User tidak meminta reset password!!';
			// redirect('auth/login');
		}

    }

	
	public function changePassword()
    {
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('re-password', 'Konfirmasi Password', 'required|matches[password]');
			
			$this->form_validation->set_message('matches', '{field} tidak sama');
			$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('auth/reset_password');
				}
			else {
				$password 	= md5($this->input->post('password'));
				$id 		= $this->session->userdata('reset_username')['id_user'];

				$this->m_user->updatePassword($password, $id);
				// bersihkan session
				$this->session->unset_userdata('reset_username');

				$this->session->set_flashdata('notif', 'reset');
				redirect('auth/login');
			}
    }

}
