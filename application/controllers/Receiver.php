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
				if($data['denyut_nadi']<50){
					send_mail("Danger","Pasien bernama tatang dalam kondisi berbahaya");
				}elseif(($data['denyut_nadi']>100)){
					send_mail("Need Attention","Pasien bernama tatang perlu perawatan");
				}
			}
			else{
				echo "Gagal";
			}
		}else{
			echo "Data dengan waktu tersebut sudah terkirim !";
		}
	  }
	  
	  public function send_mail($subject,$pesan) { 

		$from_email = "support@theheartsaver.in"; 
		$to_email = "riyanaronny@gmail.com";

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
		$this->email->message($pesan); 

		//Send mail 
		if($this->email->send()){
			   Echo "</br> Email terkirim";
		}else {
			   Echo "</br> Email tidak terkirim";
		} 
	 }
      
	
}
