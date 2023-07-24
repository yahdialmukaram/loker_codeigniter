<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class C_perusahaan extends CI_Controller {

public function __construct()
{
	parent::__construct();
	// $this->load->Model('Model_user','model_user');
	$this->load->Model('Model_pelamar','model_pelamar');
	$this->load->Model('Model_perusahaan','model_perusahaan');
	date_default_timezone_set('Asia/Jakarta');
	
	// 	if ($this->session->userdata('level') !== 'admin' or 
	// 	$this->session->userdata('logged_in') !== true
	// 	) {
	// $this->session->set_flashdata('error', 'Anda tidak punya akses untuk menu admin');

	// redirect('c_login');
	// }

	//Do your magic here
}

	public function index()
	{
		$data['title'] ='home hrd';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/home_perusahaan');
		$this->load->view('admin/footer');	
	}
	
	// public function dataPelamar()
	// {
	// 	$data['title'] ='data user';
	// 	// $data['dataUser'] = $this->model_user->getUser();
	// 	$data['getDataPelamar'] = $this->model_perusahaan->getDataPelamar();
	// 	// echo json_encode($data);
	// 	$this->load->view('admin/header', $data);
	// 	$this->load->view('admin/v_data_pelamar', $data);
	// 	$this->load->view('admin/footer');	
	// }
	public function deleteUser()
	{
		$id =$this->input->post('id_user');
		$this->model_admin->deleteUser($id);
		redirect('c_admin/dataUser');
	}

	public function dataPelamar()
	{
		$data['title'] ='data pelamar';
		$data['getDataPelamar'] = $this->model_perusahaan->dataPelamar();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/v_data_pelamar',$data);
		$this->load->view('admin/footer');

	}
	public function updateStatus($jenis_status)
	{
		$id = $this->input->post('id');
		if ($jenis_status=='verifikasi') {
			$this->model_perusahaan->updateStatus($id, ['status'=> 1 ]);
			$this->sessnion->set_flashdata('success','anda berhasil mendaftar di lowongan tersebut');
		}elseif ($jenis_status=='cancel') {
			$this->model_perusahaan->updateStatus($id, ['status'=> 0 ]);
			$this->sessnion->set_flashdata('error','anda gagal mendaftar di lowongan tersebut');
		}
		
		redirect('c_perusahaan/dataLowongan');
	
	}


	// public function addAdmin()
	// {
	// 	$username = $this->input->post('username');
	// 	$this->form_validation->set_rules('username', 'username', 'trim|required',['required'=>'username wajib di isi']);
	// 	$email = $this->input->post('email');
	// 	$this->form_validation->set_rules('email', 'email', 'trim|required',['required'=>'email wajib di isi']);
	// 	$password = md5($this->input->post('password'));
	// 	$this->form_validation->set_rules('password', 'password', 'trim|required',['required'=>'password wajib di isi']);
	// 	$level = $this->input->post('level');
	// 	$this->form_validation->set_rules('level', 'level', 'trim|required',['required'=>'level wajib di isi']);
	// 	$waktu = date(('d-m-Y h:i:s'));

	// 	if ($this->form_validation->run() == FALSE) {
	// 		$respon =[
	// 			'status'=>'validation_error',
	// 			'errors'=>$this->form_validation->error_array(),

	// 		];
	// 	} else {
	// 			$data =[
	// 				'username'=>$username,
	// 				'email'=>$email,
	// 				'password'=>md5($password),
	// 				'waktu'=>$waktu,
	// 				'level'=>$level,
	// 			];
	// 			$this->model_admin->addAdmin('tb_user',$data);
	// 			$respon=[
	// 				'status'=>'success',
	// 				'message'=>'berhasil'
	// 			];
	// 	}
	// 	echo json_encode($respon);
		
		
		
	// }

}

/* End of file Controllername.php */


?>
