<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function cek_login($email, $password)
	{
		$this->db->from('tb_user');
		// $this->db->where('email', $email);
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get();
		
	}
	public function check_email($email)
    {
        $this->db->select('email');
        $this->db->from('tb_user');
        $this->db->where('email', $email);
        return $this->db->get()->num_rows();    
    }

	public function registrasi_user($data)
	{
		$this->db->insert('tb_user', $data);
		
	}

}

/* End of file Model_login.php */


?>
