<?php
class Template{
    protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }

    function isi($content, $data = NULL){
        $data['header'] = $this->_ci->load->view('layout_tampilan/header', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
		$data['footer'] = $this->_ci->load->view('layout_tampilan/footer', $data, TRUE);

        $this->_ci->load->view('layout_tampilan/index', $data);
    }
}

