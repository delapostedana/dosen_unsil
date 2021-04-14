<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function status_pengajuan()
	{
        $this->template->load('template/template', 'laporan/status_pengajuan');
    }

    public function daftar_dosen()
	{
        $this->template->load('template/template', 'laporan/daftar_dosen');
	}
}
