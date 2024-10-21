<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berobat extends CI_Controller {

	function __construct(){  //function construct akan meload otomatis ketika aplikasi dibuka
		parent::__construct();

		if(empty($this->session->userdata('login'))){
		redirect('Auth');
		}

		$this->load->model('m_user');
        $this->load->model('m_obat');
        $this->load->model('m_dokter');
        $this->load->model('m_pasien');
        $this->load->model('m_berobat');
	}

	public function index() //function index adalah function yg pertama kali diakses
	{
		$data['title'] = 'Manajemen Data Berobat';

		$data['berobat'] = $this->m_berobat->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('berobat/v_data', $data);
		$this->load->view('v_footer');
		}

        public function tambah()
        {
            $data['title'] = 'Tambah Data Berobat';

            $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
            $data['dokter'] = $this->m_dokter->tampil_data()->result_array();
    
            $this->load->view('v_header', $data);
            $this->load->view('berobat/v_data_tambah', $data);
            $this->load->view('v_footer');
        }

		public function insert()
        {
            $t = $this->input->post('tgl_berobat');
			$p = $this->input->post('pasien');
			$d = $this->input->post('dokter');

				$data = array(
					'tgl_berobat' => $t,
					'id_pasien' => $p,
					'id_dokter' => $d
				);

				$this->m_berobat->insert_data($data);
				redirect('Berobat');
        }

		public function Edit($id)
        {
            $data['title'] = 'Edit Data Berobat';

			$where = array('id_berobat' => $id);
			$data['edit'] = $this->m_berobat->edit_data($where)->row_array();

            $data['pasien'] = $this->m_pasien->tampil_data()->result_array();
            $data['dokter'] = $this->m_dokter->tampil_data()->result_array();
    
            $this->load->view('v_header', $data);
            $this->load->view('berobat/v_data_edit', $data);
            $this->load->view('v_footer');
        }

		public function Update()
        {
			$id = $this->input->post('id_berobat');
            $t = $this->input->post('tgl_berobat');
			$p = $this->input->post('pasien');
			$d = $this->input->post('dokter');

				$data = array(
					'tgl_berobat' => $t,
					'id_pasien' => $p,
					'id_dokter' => $d
				);

				$where = array('id_berobat' => $id);
				$this->m_berobat->update_data($data, $where);
				redirect('Berobat');
        }


     public function hapus($id)
	{
		$where = array('id_berobat' => $id);
		$this->m_berobat->hapus_data($where);

		redirect('Berobat');
	}

	public function rekam($id){
		$data['title'] = "Rekam Medis";

		//tampilkan detail rekam medis
		$data['d'] = $this->m_berobat->tampil_rm($id)->row_array();

//		untuk menampilkan riwayat kunjungan
		$q = $this->db->query("SELECT id_pasien FROM berobat 
								WHERE id_berobat='$id'")->row_array();

		$id_pasien = $q['id_pasien'];
		$data['riwayat'] = $this->m_berobat->tampil_riwayat($id_pasien)->result_array();

		$this->load->view('v_header', $data);
        $this->load->view('berobat/v_rekam_medis', $data);
        $this->load->view('v_footer');
	}

}