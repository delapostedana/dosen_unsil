<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_buku');
    }

	public function index()
	{
        $this->template->load('template/template', 'dashboard/index');
	}
}
