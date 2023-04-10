<?php

Class Research_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function insert_plugin($data = FALSE){
        $query = $this->db->insert('tbl_plugins', $data);
    }

    public function get_plugins(){
        $query = $this->db->get('tbl_plugins');
        return $query->result_array();
    }

    public function delete_plugin($id){
        $this->db->where('plugin_id', $id);
        $this->db->delete('tbl_plugins');
        $result = $this->db->affected_rows(); 
        return $result;
    }

}