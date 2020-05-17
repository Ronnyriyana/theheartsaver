<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receiver extends CI_Controller {
	public function __construct(){    
		parent::__construct();
		
		//$this->load->helper('url');
		$this->load->model('receiver_m');
	}  
	
	public function index(){
		echo "Not Found.";
	}
	
	public function store() {
		if($this->input->post(null, true)==!null){
			$data = $this->input->post(null, true);
		}else{
			$data = $this->input->get(null, true);
		}
		
		if($cek = $this->receiver_m->check_waktu($data['id_pasien'],$data['waktu']) <1){
			$res = $this->receiver_m->insertLog($data);
			if($res>=1){
				echo "Berhasil";
			}
			else{
				echo "Gagal";
			}
		}else{
			echo "Data dengan waktu tersebut sudah terkirim !";
		}
      }
      
	
}
