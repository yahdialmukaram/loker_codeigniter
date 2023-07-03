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
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->order_by('id_pelamar', 'desc');
		return $this->db->get()->result_array();
	}

	public function no_registrasi()
	{
		$this->db->select('RIGHT(tb_pelamar.no_registrasi,2) as no_registrasi', FALSE);
     $this->db->order_by('no_registrasi','DESC');    
     $this->db->limit(1);    
     $query = $this->db->get('tb_pelamar');  //cek dulu apakah ada sudah ada kode di tabel.    
     if($query->num_rows() > 0){      
          //cek kode jika telah tersedia    
          $data = $query->row();      
          $kode = intval($data->no_registrasi) + 1; 
     }
     else{      
          $kode = 1;  //cek jika kode belum terdapat pada table
     }
         $tgl=date('dmY'); 
         $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
         $kodetampil = ""."5".$tgl.$batas;  //format kode
         return $kodetampil;  
    
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
