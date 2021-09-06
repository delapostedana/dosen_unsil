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
            'email'         => $this->input->post('email'),
            'password'      => md5($password),
            'foto'          => 'default.png',
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

    function regist()
    {
        $password = md5($this->input->post('password'));
        $data=array
        (
            'nama_user'     => $this->input->post('nama'),
            'username'      => $this->input->post('username'),
            'password'      => $password,
            'email'         => $this->input->post('email'),
            'foto'          => 'default.png',
            'id_role'       => 3
        );
        $this->db->insert('user', $data);
    }

    // forgot password

    public function getUserInfo($id)
    {
        $q = $this->db->get_where('users', array('id_user' => $id), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        } else {
            error_log('no user found getUserInfo(' . $id . ')');
            return false;
        }
    }

    public function getUserInfoByEmail($username)
    {
        $q = $this->db->get_where('user', array('username' => $username), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        }
    }

    public function updatePassword($password, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', array('password' => md5($password)));
        return true;
    }

}
