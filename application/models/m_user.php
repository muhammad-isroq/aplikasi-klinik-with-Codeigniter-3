<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	function tampil_data(){
		return $this->db->get('users');
	}

	function insert_data($data){
		return $this->db->insert('users', $data);
	}

	function edit_data($where){
		return $this->db->get_where('users', $where);	
	}

	function update_data($data, $where){
		$this->db->where($where);
		$this->db->update('users', $data);
	}

	function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('users');
	}

	function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->like('username', $keyword);
		$this->db->or_like('nama_lengkap', $keyword);
		return $this->db->get()->result_array();
	}
}
