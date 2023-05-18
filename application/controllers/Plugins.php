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
                $user_id = $data['user_info']['id'];
                $this->session_users();
                $data['title'] = 'Add Plugin';
                // print_r($data['current_datetime']);

                // exit;

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
                        'plugin_requested_by' => $this->input->post('request_type'),
                        'plugin_added_by' => $user_id,
                        'plugin_date_added ' => $data['current_datetime']
                        );

                        $this->plugins_model->create_plugin($post_data);
               
                        $post_data2 = array(
                                'plugin_id' => $this->db->insert_id(),
                                'committee_id' => $user_id
                        );

                        // exit;

                        $this->plugins_model->create_review_plugin($post_data2);
                        $this->session->set_flashdata('msg', 'Created Successfully!');

                        redirect('plugins/create');
                        

                        // print_r($post_data);
                }
        }


        public function view($id = NULL){
                $data = $this->user_info;
                $this->session_users();
                $data['title'] = 'View Plugin';
                $data['object'] = $this->load->helper("datetime_helper");

                $data['plugin'] = $this->plugins_model->get_plugin($id);

                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('plugins/view', $data);
                $this->load->view('includes/footer');
        }

        public function update($id = NULL){
                $data = $this->user_info;
                $user_id = $data['user_info']['id'];
                $this->session_users();
                $data['title'] = 'Update Plugin';
                $data['plugin'] = $this->plugins_model->get_plugin($id);

                if($this->input->post('update_btn')):
                        $this->form_validation->set_rules('plugin_author','Plugin Author','required');
                        $this->form_validation->set_rules('plugin_version','Plugin Version','required');
                        $this->form_validation->set_rules('plugin_testup_wp','Tested Version to WP','required');
                        $this->form_validation->set_rules('plugin_compatible_wp','Compatible WP Version','required');
                        $this->form_validation->set_rules('plugin_last_updated','Last Update','required');
                        $this->form_validation->set_rules('plugin_requested_by','Request Type','required');
                endif;

                if($this->input->post('update_sn_form')):
                        $this->form_validation->set_rules('security_notes','Security Notes','required');
                endif;

                if($this->input->post('update_c_form')):
                        $this->form_validation->set_rules('conclusion','Conclusion','required');
                endif;

                if($this->input->post('update_pl_form')):
                        $this->form_validation->set_rules('plugin_name','Plugin Name','required');
                        $this->form_validation->set_rules('plugin_link','Plugin Link','required');
                endif;

                if($this->input->post('update_imgl_form')):
                        $this->form_validation->set_rules('plugin_image_link','Plugin  Image Link','required');
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
                                        'plugin_requested_by' => $this->input->post('plugin_requested_by'),
                                        'plugin_updated_by' => $user_id

                                        
                                );

                        endif;

                         if($this->input->post('update_sn_form')):
                                $post_data = array(
                                     'plugin_security_notes' => $this->input->post('security_notes'),
                                     'plugin_updated_by' => $user_id
                                );
                        endif;

                         if($this->input->post('update_c_form')):
                                $post_data = array(
                                     'plugin_conclusion' => $this->input->post('conclusion'),
                                     'plugin_updated_by' => $user_id
                                );
                        endif;

                         if($this->input->post('update_pl_form')):
                                $post_data = array(
                                        'plugin_name' => $this->input->post('plugin_name'),
                                        'plugin_link' => $this->input->post('plugin_link'),
                                        'plugin_updated_by' => $user_id
                                );
                         endif;

                        if($this->input->post('update_imgl_form')):
                        
                                $post_data = array(
                                'plugin_image_link' => $this->input->post('plugin_image_link'),
                                'plugin_updated_by' => $user_id
                                );
                        endif;


                        $this->plugins_model->update_plugin_info($id, $post_data);
                        $this->session->set_flashdata('msg', 'Updated Successfully!');
                        redirect('plugins/update/'.$id);
                
                }
        }


        public function review(){
                $data = $this->user_info;
                $this->session_users();
                $data['title'] = 'For Review - Leaders Only';

                $data['plugins'] = $this->plugins_model->get_review_plugins(0);

                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('plugins/for_approval', $data);
                $this->load->view('includes/footer');

        }

        public function review_view($id = NULL){
                $data = $this->user_info;
                $this->session_users();
                $user_id = $data['user_info']['id'];
                $data['title'] = 'Review View Plugin';
                $data['object'] = $this->load->helper("datetime_helper");

                $data['status'] = $this->plugins_model->get_review_plugin($id);

                // print_r($data['status']);
                // exit;

                $data['plugin'] = $this->plugins_model->get_plugin($id);

                if($this->input->post('update_btn')):
                        $this->form_validation->set_rules('plugin_author','Plugin Author','required');
                        $this->form_validation->set_rules('plugin_version','Plugin Version','required');
                        $this->form_validation->set_rules('plugin_testup_wp','Tested Version to WP','required');
                        $this->form_validation->set_rules('plugin_compatible_wp','Compatible WP Version','required');
                        $this->form_validation->set_rules('plugin_last_updated','Last Update','required');
                        $this->form_validation->set_rules('plugin_requested_by','Request Type','required');
                endif;

                if($this->input->post('update_sn_form')):
                        $this->form_validation->set_rules('security_notes','Security Notes','required');
                endif;

                if($this->input->post('update_c_form')):
                        $this->form_validation->set_rules('conclusion','Conclusion','required');
                endif;

                if($this->input->post('update_pl_form')):
                        $this->form_validation->set_rules('plugin_name','Plugin Name','required');
                        $this->form_validation->set_rules('plugin_link','Plugin Link','required');
                endif;

                if($this->input->post('update_imgl_form')):
                        $this->form_validation->set_rules('plugin_image_link','Plugin  Image Link','required');
                endif;

                if($this->input->post('save_btn')):
                        $this->form_validation->set_rules('reviewed_notes','Reviewed Notes','required');
                        $this->form_validation->set_rules('plugin_status','Plugin Status','required');
                endif;

                // exit;
                if($this->form_validation->run() === FALSE){
                
                        $this->load->view('includes/head');
                        $this->load->view('includes/siderbar');
                        $this->load->view('includes/header', $data);
                        $this->load->view('plugins/for_approval_view', $data);
                        $this->load->view('includes/footer');
                }else{


                        $post_data =  array();

                        if($this->input->post('update_btn')):
                                $post_data = array(
                                        'plugin_author' => $this->input->post('plugin_author'),
                                        'plugin_version' => $this->input->post('plugin_version'),
                                        'plugin_testup_wp' => $this->input->post('plugin_testup_wp'),
                                        'plugin_compatible_wp' => $this->input->post('plugin_compatible_wp'),
                                        'plugin_last_updated' => $this->input->post('plugin_last_updated'),
                                        'plugin_requested_by' => $this->input->post('plugin_requested_by'),
                                        'plugin_updated_by' => $user_id

                                        
                                );

                        endif;

                         if($this->input->post('update_sn_form')):
                                $post_data = array(
                                     'plugin_security_notes' => $this->input->post('security_notes'),
                                     'plugin_updated_by' => $user_id
                                );
                        endif;

                         if($this->input->post('update_c_form')):
                                $post_data = array(
                                     'plugin_conclusion' => $this->input->post('conclusion'),
                                     'plugin_updated_by' => $user_id
                                );
                        endif;

                         if($this->input->post('update_pl_form')):
                                $post_data = array(
                                        'plugin_name' => $this->input->post('plugin_name'),
                                        'plugin_link' => $this->input->post('plugin_link'),
                                        'plugin_updated_by' => $user_id
                                );
                         endif;

                        if($this->input->post('update_imgl_form')):
                        
                                $post_data = array(
                                'plugin_image_link' => $this->input->post('plugin_image_link'),
                                'plugin_updated_by' => $user_id
                                );
                        endif;


                        if($this->input->post('save_btn')):

                        $post_data2 = array(
                                'reviewed_notes' => $this->input->post('reviewed_notes'),
                                'plugin_status' => $this->input->post('plugin_status'),
                                'reviewed_date' => $data['current_datetime'],
                                'reviewed_by' => $user_id
                        );

                                $this->plugins_model->update_reviewed_plugin($id, $post_data2);

                        endif;

                        if(!empty($post_data)):
                                $this->plugins_model->update_plugin_info($id, $post_data);
                        endif;

                        $this->session->set_flashdata('msg', 'Updated Successfully!');
                        redirect('plugins/for-review-view/'.$id);
                
                }
        }


        public function approved_plugins(){
                $data = $this->user_info;
                $this->session_users();
                $data['title'] = 'Approved Plugins';

                $data['plugins'] = $this->plugins_model->get_review_plugins(1);

                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('plugins/approved_plugin', $data);
                $this->load->view('includes/footer');
        }

        public function not_safe_plugins(){
                $data = $this->user_info;
                $this->session_users();
                $data['title'] = 'Not Safe Plugins';

                $data['plugins'] = $this->plugins_model->get_review_plugins(2);

                $this->load->view('includes/head');
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('plugins/not_safe_plugin', $data);
                $this->load->view('includes/footer');

        }




}