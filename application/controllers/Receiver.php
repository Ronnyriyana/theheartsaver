<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receiver extends CI_Controller {
	public function __construct(){    
		parent::__construct();
		
		//$this->load->helper('url');
		$this->load->model('receiver_m','m');
	}  
	
	public function index(){
		//tampilkan tulisan not found
		echo "Not Found.";
	}
	
	public function store() {//untuk terima data kemudian input
		//untuk mengambil data apakah pake get atau post
		if($this->input->post(null, true)==!null){
			$data = $this->input->post(null, true);
		}else{
			$data = $this->input->get(null, true);
		}
		
		//untuk cek data waktu apakah ada yang sama (sudah ada) 
		if($cek = $this->m->check_waktu($data['id_pasien'],$data['waktu']) <1){//jika data waktu belum ada
			$res = $this->m->insertLog($data);//untuk insert ke database tabel log_aktivitas lewat model insertLog
			if($res>=1){//jika insert berhasil
				if($data['denyut_nadi']<50){//jika bpm kurang dari 50 maka masuk ke function kirim email
					$this->kirim_email("Danger",$data['id_pasien'],$data['waktu'],$data['denyut_nadi'],$data['posisi']);
				}elseif(($data['denyut_nadi']>100)){//jika bpm lebih dari 100 maka masuk ke function kirim email
					$this->kirim_email("Need Attention",$data['id_pasien'],$data['waktu'],$data['denyut_nadi'],$data['posisi']);
				}else{
					//jika bpm normal
					echo "Data masuk";
				}
			}
			else{
				//jika insert gagal
				echo "Gagal";
			}
		}else{//jika data waktu sudah ada
			echo "Data dengan waktu tersebut sudah terkirim !";
		}
	  }
	  
	  public function kirim_email($subject,$id_pasien,$waktu,$denyut_nadi,$posisi) { //function kirim email
		$pasien = $this->m->check_pasien($id_pasien);//untuk  ambil data pasien, masukan ke array
		foreach($pasien as $data){
			$nama = $data['nama_pasien'];
			$to_email = $data['email'];
		}

		$from_email = "support@theheartsaver.in"; //email server

		$config = Array(//konfigurasi email
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

		$this->email->from($from_email, 'The Heart Saver'); //from(email server,nama pengirim)
		$this->email->to($to_email);//email tujuan
		$this->email->subject($subject);//subject email
			if($subject == "Danger"){//pemilihan isi pesan berdasarkan bpm/subject
				$pesan = "
				Nama : ".$nama."
				BPM : ".$denyut_nadi." ( Danger )
				Posisi : ".$posisi."
				Waktu : ".$waktu."
				";
			}elseif($subject == "Need Attention"){
				$pesan = "
				Nama : ".$nama."
				BPM : ".$denyut_nadi." ( Need Attetion )
				Posisi : ".$posisi."
				Waktu : ".$waktu."
				";
			}
		$this->email->message($pesan);//isi pesan

		//Send mail 
		if($this->email->send()){//kirim pesan
			   Echo "</br> Email terkirim ".$to_email;
		}else {
			   Echo "</br> Email tidak terkirim ".$to_email;
		} 
	 }
      
	
}
