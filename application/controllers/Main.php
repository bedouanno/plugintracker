<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Main extends CI_Controller {


        var $user_info;
        function __construct(){
                parent::__construct(); // needed when adding a constructor to a controller
                new DateTime();
        
              
                $this->user_info = array(
                    'sitename' => 'PluginTracker',
                    'robots' => 'noindex,nofollow',
                    'user_info' => $this->users_model->get_user_session($this->session->userdata('logged_in')['username']),
                //     'task_status' => array("Pending","Break","Inprogress","For QA", "Completed", "Checking"),
                    'current_datetime' => date('y-m-d H:i:s')
                );
            } 


        public function session_users(){
                if(!isset($this->session->userdata['logged_in']) && !isset($_SESSION["logged_in"])){ 
                    redirect('/logout');
                }
        }



	
        public function index(){
                $data = $this->user_info;
                $this->session_users();


                $data['title'] = 'Home';
                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('index', $data);
                $this->load->view('includes/footer');
        }



        public function error_page(){
                $this->load->view('404');
        }

}