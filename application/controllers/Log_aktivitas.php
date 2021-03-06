<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_aktivitas extends CI_Controller {
    public function __construct(){    
		parent::__construct();
		//untuk layout tampilan
        $this->load->library("template");
        
        //untuk load mmodel
        $this->load->model("log_aktivitas_m");
    }
    
	public function index()
	{
        //ambil database, masukan ke array
        $data = array(
            "title_page" => "Log Aktivitas",
            "konten" => $this->log_aktivitas_m->getLog("1")
        );
        //untuk masuk ke halaman log aktivitas sambil bawa array data
		$this->template->isi("log_aktivitas/log_aktivitas",$data);  
	}
}
