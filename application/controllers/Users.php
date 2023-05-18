<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Users extends CI_Controller {
        var $user_info;
        function __construct(){
                parent::__construct(); // needed when adding a constructor to a controller
                new DateTime();
        
              
                $this->user_info = array(
                    'sitename' => 'PluginTracker',
                    'robots' => 'noindex,nofollow',
                    'user_info' => $this->users_model->get_user_session($this->session->userdata('signed_in')['username']),
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
                $data['title'] = 'Users';

                $data['users'] = $this->users_model->get_user();

                // print_r($data['users']);

                // exit;

                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('users/index', $data);
                $this->load->view('includes/footer');
        }

        public function create(){
                $data = $this->user_info;
                $user_id = $data['user_info']['id'];
                $this->session_users();
                $data['title'] = 'Create User';

                $data['positions'] = $this->users_model->get_user_position();

                $this->form_validation->set_rules('first_name','First Name','required');
                $this->form_validation->set_rules('last_name','Last Name','required');
                $this->form_validation->set_rules('username','Username','required');
                $this->form_validation->set_rules('password','Password','required');
                // $this->form_validation->set_rules('confirm_password','Password','required');
                $this->form_validation->set_rules('role','Role','required');
  
                // print_r($this->form_validation->run());

        // exit;

                if($this->form_validation->run() === FALSE){ 
                        $this->load->view('includes/head');
                        $this->load->view('includes/siderbar');
                        $this->load->view('includes/header', $data);
                        $this->load->view('users/create', $data);
                        $this->load->view('includes/footer');
                }else{
          
                        $post_data = array(
                                'first_name' => $this->input->post('first_name'),
                                'last_name' => $this->input->post('last_name'),
                                'username' => $this->input->post('username'),
                                'password' => md5($this->input->post('password')),
                                'role' => $this->input->post('role')
                        );

                        $this->users_model->create_user($post_data);
                        $this->session->set_flashdata('msg', 'Created Successfully!');

                        redirect('users/create');
                        
                }
        }

        public function view($id = NULL){
                $data = $this->user_info;
                $this->session_users();
                $data['object'] = $this->load->helper("datetime_helper");

                $data['user'] = $this->users_model->get_user($id);

                $data['title'] = $data['user']['first_name'];

                // $data['users'] = $this->users_model->get_user($id);

                // print_r($data['users']);

                // exit;

                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('users/view', $data);
                $this->load->view('includes/footer');
        }

        public function update($id = NULL){
                $data = $this->user_info;
                $this->session_users();
                $data['object'] = $this->load->helper("datetime_helper");

                $data['user'] = $this->users_model->get_user($id);

                $data['title'] = $data['user']['first_name'];

                $data['positions'] = $this->users_model->get_user_position();

                $this->form_validation->set_rules('first_name','First Name','required');
                $this->form_validation->set_rules('last_name','Last Name','required');
                $this->form_validation->set_rules('role','Role','required');


                $this->form_validation->set_rules('username','Username');
                $this->form_validation->set_rules('password','Password');

                if($this->form_validation->run() === FALSE){ 
                        $this->load->view('includes/head');
                        $this->load->view('includes/siderbar');
                        $this->load->view('includes/header', $data);
                        $this->load->view('users/update', $data);
                        $this->load->view('includes/footer');
                }else{
                        
                        $post_data = array(
                                'first_name' => $this->input->post('first_name'),
                                'last_name' => $this->input->post('last_name'),
                                'username' => $this->input->post('username'),
                                'password' => md5($this->input->post('password')),
                                'role' => $this->input->post('role')
                        );

                if(empty($this->input->post('password'))){
                        $post_data = array(
                                'first_name' => $this->input->post('first_name'),
                                'last_name' => $this->input->post('last_name'),
                                'username' => $this->input->post('username'),
                                'role' => $this->input->post('role')
                        );
                
                }else{
                        $post_data = array(
                                'first_name' => $this->input->post('first_name'),
                                'last_name' => $this->input->post('last_name'),
                                'username' => $this->input->post('username'),
                                'password' => md5($this->input->post('password')),
                                'role' => $this->input->post('role')
                        );
                }
                

                        $this->users_model->update_user_info($id, $post_data);
                        $this->session->set_flashdata('msg', 'Updated Successfully!');
                        redirect('user/update/'.$id);


                }
          
        }

}