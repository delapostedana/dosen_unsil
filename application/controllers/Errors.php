<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		check_not_login();
        // $this->load->model('m_buku');
    }
	public function index()
	{
		$this->template->load('template/template','errors/index');
		$this->load->view('template/datatables');
	}

}
