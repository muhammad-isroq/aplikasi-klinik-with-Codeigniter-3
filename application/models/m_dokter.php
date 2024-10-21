<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_dokter extends CI_Model {

	function tampil_data(){
		return $this->db->get('dokter');
	}

	function insert_data($data){
		return $this->db->insert('dokter', $data);
	}

	function edit_data($where){
		return $this->db->get_where('dokter', $where);	
	}

	function update_data($data, $where){
		$this->db->where($where);
		$this->db->update('dokter', $data);
	}

	function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('dokter');
	}

	function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('dokter');
		$this->db->like('nama_dokter', $keyword);
		return $this->db->get()->result_array();
	}

}
