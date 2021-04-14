<?php

class M_user extends CI_Model
{

    function tampil_data()
	{
		return 
		$this->db->get('user')->result(); 
    }
    
    function post()
    {
        $password = $this->input->post('password');
        $data=array
        (
            'nama_user'     => $this->input->post('nama_user'),
            'username'      => $this->input->post('username'),
            'password'      => $password,
            'id_role'       => $this->input->post('role'),
        );
        $this->db->insert('user', $data);
    }

    function edit($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user',$data);
    }

    function get_one($id)
    {
        $param = array('id_user'  =>$id);
        return $this->db->get_where('user',$param);
    }

    function hapus($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

}