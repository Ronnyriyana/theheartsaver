<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_aktivitas_m extends CI_Model {
    public function getLog($idPasien)
	{
        $this->db->where('id_pasien',$idPasien);
        $this->db->order_by('waktu', 'desc');
		$data = $this->db->get('log_aktivitas');
        return $data->result_array();
	}
}
