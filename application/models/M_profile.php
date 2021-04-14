<?php

class M_profile extends CI_Model
{

    function edit($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user',$data);
    }

    function get_one($id)
    {
        $param = array('id_user'  => $id);
        return $this->db->get_where('user',$param);
    }


}