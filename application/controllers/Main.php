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

        public function error_page(){
                $this->load->view('404');
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

        public function view($page = 'Home'){

		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
                        // Whoops, we don't have a page for that!
                        show_404();
		}

		$data['title'] = $page;
                $data['posts'] = $this->research_model->get_plugins();

                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('pages/'.$page);
                $this->load->view('includes/footer');
	}

        public function research($page = 'research'){
		$data['title'] = $page;
		$data['posts'] = $this->research_model->get_plugins();

		$this->form_validation->set_rules('plugin_name','Plugin Name','required');
		$this->form_validation->set_rules('plugin_notes','Security Notes');
		$this->form_validation->set_rules('plugin_conclusion','Conclusion');
		$this->form_validation->set_rules('plugin_dateadded','Date Added');

                if($this->form_validation->run() === FALSE){ 
                        $this->load->view('includes/head');
                        $this->load->view('includes/siderbar');
                        $this->load->view('includes/header', $data);
                        $this->load->view('pages/'.$page, $data);
                        $this->load->view('includes/footer');
               
                } else { 

                        $post_data = array(
                        'plugin_name' => $this->input->post('plugin_name'),
                        'plugin_author' => $this->input->post('plugin_author'),
                        'plugin_version' => $this->input->post('plugin_version'),
                        'plugin_wptest' => $this->input->post('plugin_wptest'),
                        'plugin_compatwp' => $this->input->post('plugin_compatwp'),
                        'plugin_lastupdate' => $this->input->post('plugin_lastupdate'),
                        'plugin_notes' => $this->input->post('plugin_notes'),
                        'plugin_conclusion' => $this->input->post('plugin_conclusion'),
                        'plugin_requestedby' => $this->input->post('plugin_requestedby'),
                        'plugin_dateadded' => $this->input->post('plugin_dateadded')
                        );

                        $this->research_model->insert_plugin($post_data);
                        redirect('research');
                }
	}

        public function delete_plugin($id){
		$this->research_model->delete_plugin($id);
		redirect('list');

	}


        

}