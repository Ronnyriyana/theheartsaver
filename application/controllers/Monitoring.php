<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {
    public function __construct(){    
		parent::__construct();
		//untuk layout tampilan
        $this->load->library("template");
        
        //untuk load mmodel
        $this->load->model("monitoring_m");
    }
    
	public function index()
	{
        //ambil database, masukan ke array
        $data = array(
            "title_page" => "Monitoring",
            "konten" => $this->monitoring_m->getPasien("1")
        );
        //untuk masuk ke halaman log aktivitas sambil bawa array data
		$this->template->isi("monitoring/monitoring",$data);  
	}
}
