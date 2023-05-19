<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Main extends CI_Controller {


        var $user_info;
        function __construct(){
                parent::__construct(); // needed when adding a constructor to a controller
                new DateTime();


                if(empty($this->session->userdata('signed_in'))){
                        $username_session = "";
                }else{
                        $username_session = $this->users_model->get_user_session($this->session->userdata('signed_in')['username']);
                }
        
              
                $this->user_info = array(
                        'sitename' => 'PluginTracker',
                        'robots' => 'noindex,nofollow',
                        'user_info' => $username_session,
                        'request_by' => array("N/A", "Standard Protocol", "Client Request"),
                        'current_datetime' => date('y-m-d H:i:s')
                );
            } 


        public function session_users(){
                if(!isset($this->session->userdata['signed_in']) && !isset($_SESSION["signed_in"])){ 
                    redirect('/logout');
                }
        }



	
        public function index(){
                $data = $this->user_info;
                $this->session_users();


                $data['title'] = 'Dashboard';
                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('index', $data);
                $this->load->view('includes/footer');
        }

        public function home(){
                $data = $this->user_info;

                $data['title'] = 'Home';
                // $this->load->view('includes/head');
                // $this->load->view('includes/siderbar');
                // $this->load->view('includes/header', $data);
                $this->load->view('public/index', $data);
                // $this->load->view('includes/footer');

        }

        public function approved_list(){
                $data = $this->user_info;
                $data['plugins'] = $this->plugins_model->get_review_plugins(1);
                $data['title'] = 'Approved List';
                $this->load->view('includes/head');
                // $this->load->view('includes/siderbar');
                // $this->load->view('includes/header', $data);
                $this->load->view('public/approved-list', $data);
                $this->load->view('includes/footer');

        }


        public function not_safe_list(){
                $data = $this->user_info;
                $data['plugins'] = $this->plugins_model->get_review_plugins(2);
                $data['title'] = 'Not Safe List';
                $this->load->view('includes/head');
                // $this->load->view('includes/siderbar');
                // $this->load->view('includes/header', $data);
                $this->load->view('public/not-safe-list', $data);
                $this->load->view('includes/footer');

        }

        public function view($id = NULL){
                $data = $this->user_info;
                // $this->session_users();
                $data['title'] = 'View Plugin';
                $data['object'] = $this->load->helper("datetime_helper");

                $data['plugin'] = $this->plugins_model->get_plugin($id);

                $data['status'] = $this->plugins_model->get_review_plugin($id);


                $this->load->view('includes/head');
                // $this->load->view('includes/siderbar');
                // $this->load->view('includes/header', $data);
                $this->load->view('public/view-plugin', $data);
                $this->load->view('includes/footer');
        }

        public function error_page(){
                $this->load->view('404');
        }

}