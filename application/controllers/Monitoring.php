<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {
    public function __construct(){    
		parent::__construct();
		//untuk layout tampilan
		$this->load->library('template');
    }
    
	public function index()
	{
        $data = array(
            "title_page" => "Monitoring"
        );
		$this->template->isi('monitoring/monitoring',$data);  
	}
}
