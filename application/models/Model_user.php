<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

   public function getUser()
   {
       $this->db->from('tb_user');
       $this->db->order_by('id_user', 'desc');
	   return $this->db->get()->result_array();
    //    $this->db->limit(6);
   }


}

/* End of file ModelName.php */


?>
