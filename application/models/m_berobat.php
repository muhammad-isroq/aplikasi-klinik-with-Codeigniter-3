<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_berobat extends CI_Model {

	function tampil_data(){
		//return $this->db->get('berobat');

        $query = $this->db->query("SELECT berobat.*,
                            pasien.nama_pasien,
                            pasien.umur,
                            pasien.jenis_kelamin,
                            dokter.nama_dokter
                        FROM berobat
                        INNER JOIN pasien ON pasien.id_pasien = berobat.id_pasien
                        INNER JOIN dokter ON dokter.id_dokter = berobat.id_dokter
                        ");

            return $query;
	}

    function Insert_data($data){
        return $this->db->insert('Berobat',$data);
    }

    function Edit_data($where){
        return $this->db->get_where('Berobat',$where);
    }

    function Update_data($data, $where){
        $this->db->where($where);
        $this->db->update('Berobat',$data);
    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('Berobat');
    }

    function tampil_rm($id){
      $query = $this->db->query("SELECT berobat.*,
                            pasien.nama_pasien,
                            pasien.umur,
                            pasien.jenis_kelamin,
                            dokter.nama_dokter
                        FROM berobat
                        INNER JOIN pasien ON pasien.id_pasien = berobat.id_pasien
                        INNER JOIN dokter ON dokter.id_dokter = berobat.id_dokter
                        WHERE berobat.id_berobat = '$id'
                        ");

            return $query;  
    }

    function tampil_riwayat($id){
        $query = $this->db->query("SELECT berobat.*,
                            pasien.nama_pasien,
                            pasien.umur,
                            pasien.jenis_kelamin,
                            dokter.nama_dokter
                        FROM berobat
                        INNER JOIN pasien ON pasien.id_pasien = berobat.id_pasien
                        INNER JOIN dokter ON dokter.id_dokter = berobat.id_dokter
                        WHERE berobat.id_pasien = '$id'
                        ");

            return $query;  
    }
}
