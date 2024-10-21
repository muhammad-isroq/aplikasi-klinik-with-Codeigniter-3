<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_obat extends CI_Model {

	function tampil_data(){
		return $this->db->get('obat');
	}

	function insert_data($data){
		return $this->db->insert('obat', $data);
	}

	function edit_data($where){
		return $this->db->get_where('obat', $where);	
	}

	function update_data($data, $where){
		$this->db->where($where);
		$this->db->update('obat', $data);
	}

	function hapus_data($where){
		$this->db->where($where);
		$this->db->delete('obat');
	}

	function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('obat');
		$this->db->like('nama_obat', $keyword);
		return $this->db->get()->result_array();
	}

}
