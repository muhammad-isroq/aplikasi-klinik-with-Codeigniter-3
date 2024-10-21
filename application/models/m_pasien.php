<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pasien extends CI_Model {

	function tampil_data(){
		return $this->db->get('pasien');
	}

	function insert_data($data){
		return $this->db->insert('pasien', $data);
	}

	function edit_data($where){
		return $this->db->get_where('pasien', $where);	
	}

	function update_data($data, $where){
		$this->db->where($where);
		$this->db->update('pasien', $data);
	}

	function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('pasien');
	}

	function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('pasien');
		$this->db->like('nama_pasien', $keyword);
		$this->db->or_like('jenis_kelamin', $keyword);
		$this->db->or_like('umur', $keyword);
		return $this->db->get()->result_array();
	}
}
