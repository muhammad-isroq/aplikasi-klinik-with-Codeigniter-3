<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}

		$this->load->model('m_obat');
	}

	public function index() //function index adalah function yg pertama kali diakses
	{
		$data['title'] = 'Manajemen Data Obat';

		$data['obat'] = $this->m_obat->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('obat/v_obat', $data);
		$this->load->view('v_footer');
		}

	public function tambah()
	{
		$data['title'] = 'Tambah Obat';

		$this->load->view('v_header', $data);
		$this->load->view('obat/v_obat_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert()
	{
		$u = $this->input->POST('nama_obat');

		$data = array(
				'nama_obat' => $u
			);

		$this->m_obat->insert_data($data);

		redirect('Obat');
	}
	public function edit($id)
	{
		$data['title'] = 'ubah Data Obat';

		$where = array('id_obat' => $id);
		$data['r'] = $this->m_obat->edit_data($where)->row_array();

		$this->load->view('v_header', $data);
		$this->load->view('obat/v_obat_ubah', $data);
		$this->load->view('v_footer');	
	}

	public function update()
	{
		$id = $this->input->POST('id_obat');
		$u = $this->input->POST('nama_obat');

		$data = array(
				'nama_obat' => $u
			);


		$where = array('id_obat' => $id);
		$this->m_obat->update_data($data, $where);

		redirect('Obat');	
	}

	public function hapus($id)
	{
		$where = array('id_obat' => $id);
		$this->m_obat->hapus_data($where);

		redirect('Obat');
	}

	public function search(){
		$keyword = $this->input->POST('keyword');
		$data['obat'] = $this->m_obat->get_keyword($keyword);
		$this->load->view('v_header', $data);
		$this->load->view('obat/v_obat', $data);
		$this->load->view('v_footer');
	}

}
