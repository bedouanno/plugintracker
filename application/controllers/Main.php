<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index(){

        $data['title'] = 'Home';

	
        $this->load->view('includes/head');
        $this->load->view('includes/siderbar');
        $this->load->view('includes/header');
        $this->load->view('index', $data);
        $this->load->view('includes/footer');

	}



    public function error_page(){
        $this->load->view('404');
	}

}