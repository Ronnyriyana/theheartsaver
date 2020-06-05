<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receiver_m extends CI_Model {
	function insertLog($data){
		$res = $this->db->insert("log_aktivitas",$data);
		return $res;
	}

	function check_waktu($id_pasien,$waktu) {
        $this->db->where('id_pasien', $id_pasien);
        $this->db->where('waktu', $waktu);
        $query =  $this->db->get('log_aktivitas');
        return $query->num_rows();
    }

}