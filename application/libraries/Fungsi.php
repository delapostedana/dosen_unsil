<?php
class fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('m_user');
        $id = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->m_user->get_one($id)->row();
        return $user_data;
    }
}
