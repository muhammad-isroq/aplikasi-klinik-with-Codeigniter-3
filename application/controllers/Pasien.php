<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}

		$this->load->model('m_pasien');
	}

	public function index() //function index adalah function yg pertama kali diakses
	{
		$data['title'] = 'Manajemen Data Pasien';

		$data['pasien'] = $this->m_pasien->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('pasien/v_pasien', $data);
		$this->load->view('v_footer');
		}

	public function tambah()
	{
		$data['title'] = 'Tambah Data Pasien';

		$this->load->view('v_header', $data);
		$this->load->view('pasien/v_pasien_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert()
	{
		$u = $this->input->POST('nama_pasien');
		$p = $this->input->POST('jenis_kelamin');
		$n = $this->input->POST('umur');

		$data = array(
				'nama_pasien' => $u,
				'jenis_kelamin' => $p,
				'umur' => $n
			);

		$this->m_pasien->insert_data($data);

		redirect('Pasien');
	}
	public function edit($id)
	{
		$data['title'] = 'Ubah Data Pasien';

		$where = array('id_pasien' => $id);
		$data['r'] = $this->m_pasien->edit_data($where)->row_array();

		$this->load->view('v_header', $data);
		$this->load->view('pasien/v_pasien_ubah', $data);
		$this->load->view('v_footer');	
	}

	public function update()
	{
		$id = $this->input->POST('id_pasien');
		$u = $this->input->POST('nama_pasien');
		$p = $this->input->POST('jenis_kelamin');
		$n = $this->input->POST('umur');

		$data = array(
				'nama_pasien' => $u,
				'jenis_kelamin' => $p,
				'umur' => $n
			);


		$where = array('id_pasien' => $id);
		$this->m_pasien->update_data($data, $where);

		redirect('Pasien');	
	}

	public function hapus($id)
	{
		$where = array('id_pasien' => $id);
		$this->m_pasien->hapus_data($where);

		redirect('Pasien');
	}

	public function search(){
		$keyword = $this->input->POST('keyword');
		$data['pasien'] = $this->m_pasien->get_keyword($keyword);
		$this->load->view('v_header', $data);
		$this->load->view('pasien/v_pasien', $data);
		$this->load->view('v_footer');
	}

}

//jika ingin meload data array dari database, harus sama. Jika tidak akan error