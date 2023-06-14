<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_pelamar extends CI_Model
{

	public function check_data_diri()
	{
		$this->db->from('tb_pelamar');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		return $this->db->get()->num_rows();
		
	}
	public function saveDataPelamar($table, $data)
	{
		$this->db->insert($table, $data);
	}
	public function getDataPelamar()
	{
		$this->db->from('tb_pelamar');
		$this->db->order_by('id_pelamar', 'desc');
		return $this->db->get()->result_array();
	}

    // public function getUser()
    // {
    //     $this->db->from('tb_user');
    //     $this->db->order_by('id_user', 'desc');
    //     return $this->db->get()->result_array();
    // }

    // public function addAdmin($table,$data)
    // {
    //     $this->db->insert($table, $data);
    // }
    // public function deleteUser($id)
    // {
    //     $this->db->where('id_user', $id);
    //     $this->db->delete('tb_user');
    // }


}

/* End of file Model.php */
