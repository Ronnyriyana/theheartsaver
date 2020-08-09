<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//untuk masuk ke halaman awal/slide
		$this->load->view('awal/awal');
	}
}
