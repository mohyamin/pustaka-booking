<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelBuku','ModelUser','ModelBooking');
	}

	public function index()
	{
		$data = array (
			'judul'		=> "Katalog Buku",
			'buku'		=> $this->ModelBuku->getbuku()->result());
		//jika sudah login dan jika belum login
		if ($this->session->userdata('email')) {
 		$user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = $user['nama'];
		$this->load->view('templates/templates-user/header', $data);
	 	$this->load->view('daftarbuku', $data);
	 	$this->load->view('templates/templates-user/modal');
	 	$this->load->view('templates/templates-user/footer', $data);
	 	} else {
		$data['user'] = 'Pengunjung';
		$this->load->view('templates/templates-user/header', $data);
		$this->load->view('daftarbuku', $data);
		$this->load->view('templates/templates-user/modal');
		$this->load->view('templates/templates-user/footer', $data);
	}
}
	public function detailBuku($id)
 	{
		 $data['buku']  = $this->ModelBuku->joinKategoriBuku($id);
		 $data['user']  = "Pengunjung";
		 $data['judul'] = "Detail Buku";
		 $this->load->view('templates/templates-user/header', $data);
		 $this->load->view('buku/detail-buku', $data);
		 $this->load->view('templates/templates-user/footer');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */