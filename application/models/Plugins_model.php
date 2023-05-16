<?php
class Plugins_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function create_plugin($data_post){
        return $this->db->insert('tbl_plugins',$data_post);
    }

    public function get_plugins(){
        $query = $this->db->get('tbl_plugins');
        return $query->result_array();
    }

    public function get_plugin($id = FALSE){

        $query = $this->db->get_where('tbl_plugins', array('id' => $id));

        return $query->row_array();

    }

    public function update_plugin_info($id = NULL, $data = NULL) {
        $ps = $data;
        $this->db->set($ps);
        $this->db->where('tbl_plugins.id', $id);
        $this->db->update('tbl_plugins');
        $result =  $this->db->affected_rows(); 
        return $result;
     }


    

}

