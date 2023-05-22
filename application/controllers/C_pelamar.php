<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_pelamar extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		// $this->load->Model('Model_user','model_user');
		// $this->load->Model('Model_admin','model_admin');
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

		$data['title'] ='isi data diri';
		// $this->load->view('admin/header', $data);
		$check = $this->model_pelamar->check_data_diri();
		// print_r($check);
		if ($check > 0) {
			redirect('c_pelamar/beranda');
		}else {
			$this->load->view('admin/v_isi_data_diri', $data);
		}
	}
	
	public function saveDataPelamar()
	{
			
		// 	$no_ktp = $this->input->post('no_ktp');
		// 	$check_no_ktp = $this->model_pelamar->check_no_ktp($no_ktp);
	
		// 	if ($no_ktp > 0) {
		// 	$respon=[
		// 		'status'=>'no nik sudah terdaftar',
		// 		'pesan'=>'error',
		// 	];
		// 	echo json_encode($respon);
		// }

		$no_ktp = $this->input->post('no_ktp');
		$this->form_validation->set_rules('no_ktp', 'no_ktp', 'trim|numeric|required|min_length[16]|max_length[16]', ['required'=>'inputan harus berupa angka','numeric'=>'no ktp harus berupa angka']);
		$nama = $this->input->post('nama');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|max_length[50]', ['required'=>'inputan harus berupa angka']);
		$alamat_domisili = $this->input->post('alamat_domisili');
		$this->form_validation->set_rules('alamat_domisili', 'alamat_domisili', 'trim|required|max_length[50]', ['required'=>'alamat wajin di isi']);
		$email = $this->input->post('email');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|max_length[50]', ['required'=>'email wajib di isi','valid_email'=>'email wajib di isi']);
		$tgl_lahir = $this->input->post('tgl_lahir');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'trim|required|max_length[50]', ['required'=>'tgl lahir wajib di isi']);
		$tempat_lahir = $this->input->post('tempat_lahir');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required|max_length[50]', ['required'=>'tempat lahir wajib di isi']);
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required|max_length[50]', ['required'=>'jenis kelamin wajib di isi']);
		$provinsi = $this->input->post('provinsi');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required|max_length[50]', ['required'=>'provinsi wajib di isi']);
		$kabupaten = $this->input->post('kabupaten');
		$this->form_validation->set_rules('kabupaten', 'provinsi', 'trim|required|max_length[50]', ['required'=>'kabupaten wajib di isi']);
		$kecamatan = $this->input->post('kecamatan');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required|max_length[50]', ['required'=>'kecamatan wajib di isi']);
		$kode_pos = $this->input->post('kode_pos');
		$this->form_validation->set_rules('kode_pos', 'kode_pos', 'trim|required|numeric', [
			'required' => 'kode pos harus disi',
            'numeric' => 'kode pos harus berupa angka',
        ]);
		$sd = $this->input->post('sd');
		$this->form_validation->set_rules('sd', 'sd', 'trim|required', ['required'=>'asal sekolah sd wajib di isi']);
		$smp = $this->input->post('smp');
		$this->form_validation->set_rules('smp', 'smp', 'trim|required', ['required'=>'asal sekolah smp wajib di isi']);
		$sma = $this->input->post('sma');
		$this->form_validation->set_rules('sma', 'sma', 'trim|required', ['required'=>'asal sekolah sma wajib di isi']);
		$universitas = $this->input->post('universitas');
		$this->form_validation->set_rules('universitas', 'universitas', 'trim|required', ['required'=>'asal sekolah universitas wajib di isi']);
		$pengalaman = $this->input->post('pengalaman');
		$this->form_validation->set_rules('pengalaman', 'pengalaman', 'trim|required', ['required'=>'pengalaman kerja wajib di isi']);
				
		
		if ($this->form_validation->run() == FALSE) {
			$respon = [
				'status'=>'validation_error',
				'errors'=>$this->form_validation->error_array(),
			];
		} else {
			$insert = [
				'no_ktp'=>$no_ktp,
				'id_user'=>	$this->session->userdata('id_user'),
				'nama'=>$nama,
				'alamat_domisili'=>$alamat_domisili,
				'email'=>$email,
				'tgl_lahir'=>$tgl_lahir,
				'tempat_lahir'=>$tempat_lahir,
				'jenis_kelamin'=>$jenis_kelamin,
				'provinsi'=>$provinsi,
				'kabupaten'=>$kabupaten,
				'kecamatan'=>$kecamatan,
				'kode_pos'=>$kode_pos,
				'sd'=>$sd,
				'smp'=>$smp,
				'sma'=>$sma,
				'universitas'=>$universitas,
				'pengalaman'=>$pengalaman,
			];
			$this->model_pelamar->saveDataPelamar('tb_pelamar', $insert);
			$respon =[
				'status'=>'success',
				'pesan'=>'berhasil'
			];
		}
		echo json_encode($respon);

		
	}

	public function beranda()
	{
		$data['title'] ='home pelamar';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/home_pelamar');
		$this->load->view('admin/footer');	
	}
	
	// public function getDataPelamar()
	// {
	// 	$data['title'] ='home pelamar';
	// 	$this->load->view('admin/header', $data);
	// 	$this->load->view('admin/home');
	// 	$this->load->view('admin/footer');	

	// }
	
	public function vDataRiwayat()
	{
		$data['title'] ='Data riwayat hidup';		
		$data ['getDataPelamar'] = $this->model_pelamar->getDataPelamar();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/v_data_riwayat', $data);
		$this->load->view('admin/footer');	

	}
	public function vLowonganKerja()
	{
		$data['title'] = 'Data lowongan';
		$data['dataLowongan']=$this->model_perusahaan->getLowongan();
		// $data['dataLowongan'] = $this->model_perusahaan->getLowongan();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/v_lowongan_kerja', $data);
		$this->load->view('admin/footer');
		
	}
	
	public function filterData()
	{
		
		$jenjang_pendidikan= $this->input->post('jenjang_pendidikan');
		$dataFilter['filterJenjangPendidikan']= $this->model_perusahaan->getJenjangPendidikan($jenjang_pendidikan);
		$data['dataLowongan']=$this->model_perusahaan->getLowongan();
		// print_r($dataFilter['filterJenjangPendidikan']);
		$data['title'] = 'Filter';
			$this->load->view('admin/header', $data);
			$this->load->view('admin/v_lowongan_kerja', $dataFilter);
			$this->load->view('admin/footer');
		
	}
}

/* End of file Controllername.php */

?>
