<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        check_not_login();
		$this->load->model('m_profile');
		$this->load->model('m_fakultas');
		$this->load->model('m_user');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

	function index()
	{
		if (isset($_POST['submit'])) {
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]');
			$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
			if ($this->input->post('password')){
				$this->form_validation->set_rules('password', 'Password', 'min_length[5]');
				$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]');
				$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
				$this->form_validation->set_message('matches', '{field} tidak sama');
				}
	
			if ($this->input->post('passconf')){
				$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]');
				$this->form_validation->set_message('matches', '{field} tidak sama');
				}

			if ($this->form_validation->run() == FALSE) {
				$id = $this->input->post('id');
				$data['record'] = $this->m_profile->get_one($id)->row_array();
				$data['fakultas'] = $this->m_fakultas->tampil_data_sort();
				$this->template->load('template/template','profile/index', $data);
				// redirect('profile');
			}
			else{

				$this->load->library('upload');
				$new_name='';
				if($_FILES['foto']['name']!=""){

					$config['upload_path'] = realpath(APPPATH . '../assets/dist/img'); 
					$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
					$config['max_size'] = 1000;
					$config['remove_space'] = TRUE;
					$new_name = time().'-'.$_FILES['foto']['name'];
					$config['file_name'] = $new_name;

					$this->load->library('upload', $config);
    
					$this->upload->initialize($config);
				
					if ( !$this->upload->do_upload('foto')) {
						print_r(array('error' => $this->upload->display_errors()));die;
					}
					$this->upload->data();
				}

				if($this->input->post('password')==null){
					// echo $new_name; die;
					if ($new_name != null){

						$id         	=   $this->input->post('id');
						$data           =   array(
							'nama_user'  			=> $this->input->post('nama_user'),
							'username'          	=> $this->input->post('username'),
							'nip'          			=> $this->input->post('nip'),
							'nidn'          		=> $this->input->post('nidn'),
							'id_scopus'		        => $this->input->post('id_scopus'),
							'program_studi'         => $this->input->post('program_studi'),
							'jk'          			=> $this->input->post('jk'),
							'jabatan'          		=> $this->input->post('jabatan'),
							'pendidikan_tertinggi'	=> $this->input->post('pendidikan_tertinggi'),
							'status_ikatan_kerja' 	=> $this->input->post('status_ikatan_kerja'),
							'status_aktivitas'    	=> $this->input->post('status_aktivitas'),
							'foto'    				=> str_replace(' ', '_', $new_name)
						);
						$this->m_profile->edit($data, $id);
					}
					else{
						$id         	=   $this->input->post('id');
						$data           =   array(
							'nama_user'  			=> $this->input->post('nama_user'),
							'username'          	=> $this->input->post('username'),
							'nip'          			=> $this->input->post('nip'),
							'nidn'          		=> $this->input->post('nidn'),
							'id_scopus'		        => $this->input->post('id_scopus'),
							'program_studi'         => $this->input->post('program_studi'),
							'jk'          			=> $this->input->post('jk'),
							'jabatan'          		=> $this->input->post('jabatan'),
							'pendidikan_tertinggi'	=> $this->input->post('pendidikan_tertinggi'),
							'status_ikatan_kerja' 	=> $this->input->post('status_ikatan_kerja'),
							'status_aktivitas'    	=> $this->input->post('status_aktivitas'),
						);
						$this->m_profile->edit($data, $id);
					}
				}
				else{
					if($new_name != null){
						$id         	=   $this->input->post('id');
						$password 		= $this->input->post('password');
						$data           =   array(
							'nama_user'  			=> $this->input->post('nama_user'),
							'username'          	=> $this->input->post('username'),
							'password'    	    	=> $password,
							'nip'          			=> $this->input->post('nip'),
							'nidn'          		=> $this->input->post('nidn'),
							'id_scopus'		        => $this->input->post('id_scopus'),
							'program_studi'         => $this->input->post('program_studi'),
							'jk'          			=> $this->input->post('jk'),
							'jabatan'          		=> $this->input->post('jabatan'),
							'pendidikan_tertinggi'	=> $this->input->post('pendidikan_tertinggi'),
							'status_ikatan_kerja' 	=> $this->input->post('status_ikatan_kerja'),
							'status_aktivitas'    	=> $this->input->post('status_aktivitas'),
							'foto'  	  			=> str_replace(' ', '_', $new_name)
						);
						$this->m_profile->edit($data, $id);
					}
					else{
						$id         	=   $this->input->post('id');
						$password 		= $this->input->post('password');
						$data           =   array(
							'nama_user'  			=> $this->input->post('nama_user'),
							'username'          	=> $this->input->post('username'),
							'password'    	    	=> $password,
							'nip'          			=> $this->input->post('nip'),
							'nidn'          		=> $this->input->post('nidn'),
							'id_scopus'		        => $this->input->post('id_scopus'),
							'program_studi'         => $this->input->post('program_studi'),
							'jk'          			=> $this->input->post('jk'),
							'jabatan'          		=> $this->input->post('jabatan'),
							'pendidikan_tertinggi'	=> $this->input->post('pendidikan_tertinggi'),
							'status_ikatan_kerja' 	=> $this->input->post('status_ikatan_kerja'),
							'status_aktivitas'    	=> $this->input->post('status_aktivitas'),
						);
						$this->m_profile->edit($data, $id);
					}
				}
			$this->session->set_flashdata('notif', 'updated');
			redirect('profile');
			}
		} 
		else {
			$id = $this->fungsi->user_login()->id_user;
			$data['fakultas'] = $this->m_fakultas->tampil_data_sort();
			$data['record'] = $this->m_user->get_one($id)->row_array();
			$this->template->load('template/template','profile/index', $data);
		}
	}
}
