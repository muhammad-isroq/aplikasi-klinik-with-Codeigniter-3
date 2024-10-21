<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}

		$this->load->model('m_dokter');
	}

	public function index() //function index adalah function yg pertama kali diakses
	{
		$data['title'] = 'Manajemen Data dokter';

		$data['dokter'] = $this->m_dokter->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('dokter/v_dokter', $data);
		$this->load->view('v_footer');
		}

	public function tambah()
	{
		$data['title'] = 'Tambah dokter';

		$this->load->view('v_header', $data);
		$this->load->view('dokter/v_dokter_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert()
	{
		$u = $this->input->POST('nama_dokter');

		$data = array(
				'nama_dokter' => $u
			);

		$this->m_dokter->insert_data($data);

		redirect('Dokter');
	}
	public function edit($id)
	{
		$data['title'] = 'ubah Data dokter';

		$where = array('id_dokter' => $id);
		$data['r'] = $this->m_dokter->edit_data($where)->row_array();

		$this->load->view('v_header', $data);
		$this->load->view('dokter/v_dokter_ubah', $data);
		$this->load->view('v_footer');	
	}

	public function update()
	{
		$id = $this->input->POST('id_dokter');
		$u = $this->input->POST('nama_dokter');

		$data = array(
				'nama_dokter' => $u
			);


		$where = array('id_dokter' => $id);
		$this->m_dokter->update_data($data, $where);

		redirect('Dokter');	
	}

	public function hapus($id)
	{
		$where = array('id_dokter' => $id);
		$this->m_dokter->hapus_data($where);

		redirect('Dokter');
	}

	public function search(){
		$keyword = $this->input->POST('keyword');
		$data['dokter'] = $this->m_dokter->get_keyword($keyword);
		$this->load->view('v_header', $data);
		$this->load->view('dokter/v_dokter', $data);
		$this->load->view('v_footer');
	}


}
