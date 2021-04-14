<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approval extends CI_Controller {

	public function index()
	{
        $this->template->load('template/template', 'approval/index');
	}
}
