<?php
class Users_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function get_user_session($username = FALSE){
        if($username === FALSE){
            $query = $this->db->get('tbl_users');
            return $query->result_array();
        }

        $query = $this->db->get_where('tbl_users', array('username' => $username));
        return $query->row_array();
    }

    public function get_user($id = FALSE){
        if($id === FALSE){
            $this->db->select('*');
            $this->db->from('tbl_users_position');
            $this->db->join('tbl_users', 'tbl_users_position.id = tbl_users.role');
            $query = $this->db->get();
            return $query->result_array();
        }
        $this->db->select('*');
        $this->db->from('tbl_users_position');
        $this->db->join('tbl_users', 'tbl_users_position.id = tbl_users.role');
         $this->db->where('tbl_users.id', $id); // Add a condition to match the ID
        $query = $this->db->get();
        return $query->row_array();
    }

    public function create_user($data_post){
        return $this->db->insert('tbl_users',$data_post);
    }


    public function get_user_position($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('tbl_users_position');
            return $query->result_array();
        }

        $query = $this->db->get_where('tbl_users_position', array('id' => $id));
        return $query->row_array();
    }

    public function update_user_info($id = NULL, $data = NULL) {
        $ps = $data;
        $this->db->set($ps);
        $this->db->where('tbl_users.id', $id);
        $this->db->update('tbl_users');
        $result =  $this->db->affected_rows(); 
        return $result;
     }

    public function get_users_count() {
   
            $query = $this->db->from("tbl_users");
     
            return $query->count_all_results();
    }


}
