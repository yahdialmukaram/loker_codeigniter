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
	public function find_data_user()
	{
		$data_user = $this->db->get('tb_user');
		if ($data_user->num_rows() > 0 ) {
			return $data_user->num_rows();
		}else {
			return 0;
		}
	}
	public function find_data($table, $id_table, $object)
	{
		$this->db->where('level', $object);
		return $this->db->get($table)->num_rows();
	}
	public function findDataPassword($table,$reference,$id)
	{
		$this->db->from($table);
		$this->db->where($reference, $id);
		return $this->db->get()->row_array();
		
	}
	public function updatePassword($id,$data)
	{
		$this->db->where('id_user', $id);
		$this->db->update('tb_user', $data);
		
		
	}


}

/* End of file Model.php */
