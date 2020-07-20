<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring_m extends CI_Model {
    public function getPasien($idPasien)
	{
        $this->db->select('a.*, b.*,YEAR(CURDATE())-YEAR(a.usia) as usia');
        $this->db->from('pasien a');
        $this->db->join('log_aktivitas b', 'a.id_pasien = b.id_pasien');
        $this->db->where('a.id_pasien',$idPasien);
        $this->db->order_by('waktu', 'desc');
        $this->db->limit(1);
		$data = $this->db->get();
        return $data->result_array();
	}
}
