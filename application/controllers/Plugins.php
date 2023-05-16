<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Plugins extends CI_Controller {
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
                $data['title'] = 'List of Plugins';

                $data['plugins'] = $this->plugins_model->get_plugins();

                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('plugins/index', $data);
                $this->load->view('includes/footer');
        }
        
        public function create(){
                $data = $this->user_info;
                $this->session_users();
                $data['title'] = 'Add Plugin';
                // print_r($this->input->post('plugin_name'));


                $this->form_validation->set_rules('plugin_name','Plugin Name','required');
                $this->form_validation->set_rules('plugin_link','Plugin Link','required');
                $this->form_validation->set_rules('plugin_author','Plugin Author');
                $this->form_validation->set_rules('plugin_version','Plugin Version');
                $this->form_validation->set_rules('tested_up_wp_version','Tested Version to WP');
                $this->form_validation->set_rules('compatible_wp_version','Compatible WP Version');
                $this->form_validation->set_rules('last_update','Last Update');
                $this->form_validation->set_rules('security_notes','Security Notes');
                $this->form_validation->set_rules('conclusion','Conclusion');
                $this->form_validation->set_rules('request_type','Request Type');




                if($this->form_validation->run() === FALSE){ 
                        $this->load->view('includes/head');
                        $this->load->view('includes/siderbar');
                        $this->load->view('includes/header', $data);
                        $this->load->view('plugins/create', $data);
                        $this->load->view('includes/footer');
                }else{
                        $post_data = array(
                        'plugin_name' => $this->input->post('plugin_name'),
                        'plugin_link' => $this->input->post('plugin_link'),
                        'plugin_image_link' => $this->input->post('plugin_image_link'),
                        'plugin_author' => $this->input->post('plugin_author'),
                        'plugin_version' => $this->input->post('plugin_version'),
                        'plugin_testup_wp' => $this->input->post('tested_up_wp_version'),
                        'plugin_compatible_wp' => $this->input->post('compatible_wp_version'),
                        'plugin_last_updated' => $this->input->post('last_update'),
                        'plugin_security_notes' => $this->input->post('security_notes'),
                        'plugin_conclusion' => $this->input->post('conclusion'),
                        'plugin_requested_by' => $this->input->post('request_type')
                        );

                        $this->plugins_model->create_plugin($post_data);
                        $this->session->set_flashdata('msg', 'Created Successfully!');

                        redirect('plugins/create');
                        

                        // print_r($post_data);
                }
        }


        public function view($id = NULL){
                $data = $this->user_info;
                $this->session_users();
                $data['title'] = 'View Plugin';

                $data['plugin'] = $this->plugins_model->get_plugin($id);

                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('plugins/view', $data);
                $this->load->view('includes/footer');
        }

        public function update($id = NULL){
                $data = $this->user_info;
                $this->session_users();
                $data['title'] = 'View Plugin';
                $data['plugin'] = $this->plugins_model->get_plugin($id);

                if($this->input->post('update_btn')):
                        $this->form_validation->set_rules('plugin_author','Plugin Author','required');
                        $this->form_validation->set_rules('plugin_version','Plugin Version','required');
                        $this->form_validation->set_rules('plugin_testup_wp','Tested Version to WP','required');
                        $this->form_validation->set_rules('plugin_compatible_wp','Compatible WP Version','required');
                        $this->form_validation->set_rules('plugin_last_updated','Last Update','required');
                        $this->form_validation->set_rules('plugin_requested_by','Request Type','required');
                endif;

 

                // exit;
                if($this->form_validation->run() === FALSE){
                
                        $this->load->view('includes/head');
                        $this->load->view('includes/siderbar');
                        $this->load->view('includes/header', $data);
                        $this->load->view('plugins/update', $data);
                        $this->load->view('includes/footer');
                }else{
                        if($this->input->post('update_btn')):
                                $post_data = array(
                                        'plugin_author' => $this->input->post('plugin_author'),
                                        'plugin_version' => $this->input->post('plugin_version'),
                                        'plugin_testup_wp' => $this->input->post('plugin_testup_wp'),
                                        'plugin_compatible_wp' => $this->input->post('plugin_compatible_wp'),
                                        'plugin_last_updated' => $this->input->post('plugin_last_updated'),
                                        'plugin_requested_by' => $this->input->post('plugin_requested_by')
                                );


                                $this->plugins_model->update_plugin_info($id, $post_data);
                                $this->session->set_flashdata('msg', 'Updated Successfully!');
                                redirect('plugins/update/'.$id);
                        endif;
   
                
                }
        }



}