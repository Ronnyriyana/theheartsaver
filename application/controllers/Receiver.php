<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receiver extends CI_Controller {
	public function __construct(){    
		parent::__construct();
		
		//$this->load->helper('url');
		$this->load->model('receiver_m','m');
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
		
		if($cek = $this->m->check_waktu($data['id_pasien'],$data['waktu']) <1){
			$res = $this->m->insertLog($data);
			if($res>=1){
				if($data['denyut_nadi']<50){
					$this->kirim_email("Danger",$data['id_pasien'],$data['waktu']);
				}elseif(($data['denyut_nadi']>100)){
					$this->kirim_email("Need Attention",$data['id_pasien'],$data['waktu']);
				}
			}
			else{
				echo "Gagal";
			}
		}else{
			echo "Data dengan waktu tersebut sudah terkirim !";
		}
	  }
	  
	  public function kirim_email($subject,$id_pasien,$waktu) { 
		$pasien = $this->m->check_pasien($id_pasien);
		foreach($pasien as $data){
			$to_email = $data['email'];
		}

		$from_email = "support@theheartsaver.in";

		$config = Array(
			   'protocol' => 'smtp',
			   'smtp_host' => 'ssl://mail.theheartsaver.in ',
			   'smtp_port' => 465,
			   'smtp_user' => $from_email,
			   'smtp_pass' => 'SOL.~0A}?ldU',
			   'mailtype'  => 'html', 
			   'charset'   => 'iso-8859-1'
	   );

		   $this->load->library('email', $config);
		   $this->email->set_newline("\r\n");   

		$this->email->from($from_email, 'The Heart Saver'); 
		$this->email->to($to_email);
		$this->email->subject($subject);
		if($subject == "Danger"){
			$this->email->message("Pasien bernama Joni membutuhkan perawatan !!");
		}elseif($subject == "Need Attention"){
			$this->email->message("Kondisi pasien bernama Joni perlu diperhatikan !");
		}

		//Send mail 
		if($this->email->send()){
			   Echo "</br> Email terkirim";
		}else {
			   Echo "</br> Email tidak terkirim";
		} 
	 }
      
	
}
