<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis halaman login ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}

		$this->load->model('m_user');
		$this->load->model('m_obat');
		$this->load->model('m_pasien');
		$this->load->model('m_dokter');

	}

	public function index()	{

		redirect('Dashboard');
	}

	public function data_user() {
		$data['title'] = 'Laporan Data User';

		$data['user'] = $this->m_user->tampil_data()->result_array();

		$this->load->view('Laporan/v_lap_user', $data);
	}

	public function data_obat() {
		$data['title'] = 'Laporan Data Obat';

		$data['obat'] = $this->m_obat->tampil_data()->result_array();

		$this->load->view('Laporan/v_lap_obat', $data);
	}

	public function data_pasien() {
		$data['title'] = 'Laporan Data Pasien';

		$data['pasien'] = $this->m_pasien->tampil_data()->result_array();

		$this->load->view('Laporan/v_lap_pasien', $data);
	}

	public function data_dokter() {
		$data['title'] = 'Laporan Data dokter';

		$data['dokter'] = $this->m_dokter->tampil_data()->result_array();

		$this->load->view('Laporan/v_lap_dokter', $data);
	}
}
