<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}

		$this->load->model('m_user');
	}

	public function index() //function index adalah function yg pertama kali diakses
	{
		$data['title'] = 'Manajemen Data User';

		$data['user'] = $this->m_user->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('user/v_data', $data);
		$this->load->view('v_footer');
		}

	public function tambah()
	{
		$data['title'] = 'Tambah Data User';

		$this->load->view('v_header', $data);
		$this->load->view('user/v_data_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert()
	{
		$u = $this->input->POST('username');
		$p = md5($this->input->POST('password')); //md5 untuk password
		$n = $this->input->POST('nama_lengkap');

		$data = array(
				'username' => $u,
				'password' => $p,
				'nama_lengkap' => $n
			);

		$this->m_user->insert_data($data);

		redirect('User');
	}
	public function edit($id)
	{
		$data['title'] = 'ubah Data User';

		$where = array('id' => $id);
		$data['r'] = $this->m_user->edit_data($where)->row_array();

		$this->load->view('v_header', $data);
		$this->load->view('user/v_data_ubah', $data);
		$this->load->view('v_footer');	
	}

	public function update()
	{
		$id = $this->input->POST('id');
		$u = $this->input->POST('username');
		$p = md5($this->input->POST('password'));
		$n = $this->input->POST('nama_lengkap');

		$data = array(
				'username' => $u,
				'password' => $p,
				'nama_lengkap' => $n
			);


		$where = array('id' => $id);
		$this->m_user->update_data($data, $where);

		redirect('User');	
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_user->hapus_data($where);

		redirect('User');
	}

	public function search(){
		$keyword = $this->input->POST('keyword');
		$data['user'] = $this->m_user->get_keyword($keyword);
		$this->load->view('v_header', $data);
		$this->load->view('user/v_data', $data);
		$this->load->view('v_footer');
	}

}

//jika ingin meload data array dari database, harus sama. Jika tidak akan error