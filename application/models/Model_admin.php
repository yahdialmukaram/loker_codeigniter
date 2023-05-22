<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_admin extends CI_Model
{

    public function getUser()
    {
        $this->db->from('tb_user');
        $this->db->order_by('id_user', 'desc');
        return $this->db->get()->result_array();
    }

    public function addAdmin($table,$data)
    {
        $this->db->insert($table, $data);
    }
    public function deleteUser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');
    }


}

/* End of file Model.php */
