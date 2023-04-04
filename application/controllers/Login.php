<?php

Class Login extends CI_Controller {


// Check for user login process
public function index() {
    $this->load->helper("ipblocker_helper");
    block_ip();
    $data['sitename'] = 'PluginTracker';

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {

        if(isset($this->session->userdata['logged_in'])){
                redirect('home');
            }else{
                $this->load->view('includes/head');
                $this->load->view('login');
                $this->load->view('includes/footer');
            }
        } else {
        $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
        );
        $result = $this->login_model->login($data);
        if ($result == TRUE) {
            $username = $this->input->post('username');
            $result = $this->login_model->read_user_information($username);
            if ($result != false) {
                $session_data = array(
                    'username' => $result[0]->username,
                    );

                // Add user data in session
                $this->session->set_userdata('logged_in', $session_data);
                redirect('home');
            }
        } else {
            $data['sitename'] = 'PluginTracker';
            $data["errors"] = array('error_message' => 'Invalid Username or Password');
            $this->load->view('includes/head', $data );
            $this->load->view('login');
            $this->load->view('includes/footer');
        }
    }
}

// Logout from admin page
public function logout($page = 'logout') {
    $this->load->helper("ipblocker_helper");
    block_ip();
    $data['sitename'] = 'PluginTracker';
    // Removing session data
    $sess_array = array('username' => '');
    $this->session->unset_userdata('logged_in', $sess_array);
        // $data['message_display'] = 'Successfully Logout';

        redirect('login');
 
}

}
?>
