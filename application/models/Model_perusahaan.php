<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_perusahaan extends CI_Model
{

    public function getUser()
    {
        $this->db->from('tb_user');
        $this->db->order_by('id_user', 'desc');
        return $this->db->get()->result_array();
    }

    // public function addAdmin($table,$data)
    // {
    //     $this->db->insert($table, $data);
    // }
    public function save_loker($table,$data)
    {
        $this->db->insert($table, $data);
    }
    public function deleteUser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('tb_user');
    }
	public function dataPelamar()
	{
		$this->db->from('tb_pelamar');
		// $this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->order_by('id_pelamar', 'desc');
		return $this->db->get()->result_array();
	}

	public function getDataLowongan()
	{
		$this->db->from('tb_perusahaan');
		$this->db->order_by('id_perusahaan', 'desc');
		return $this->db->get()->result_array();
	}
	function updateStatus($id, $data)
	{
		$this->db->where('id_pelamar', $id);
		$this->db->update('tb_pelamar', $data);
	}
	public function showDitails($id)
	{
		$this->db->from('tb_pelamar');
		$this->db->where('id_pelamar', $id);
		return $this->db->get()->row_array();
		
		
		
	}



}

/* End of file Model.php */
