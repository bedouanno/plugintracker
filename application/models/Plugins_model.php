<?php
class Plugins_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function create_plugin($data_post){
        return $this->db->insert('tbl_plugins',$data_post);
    }

    public function create_review_plugin($data_post){
        return $this->db->insert('tbl_plugin_status',$data_post);
    }

    public function get_plugins(){
        $query = $this->db->get('tbl_plugins');
        return $query->result_array();
    }

    public function get_plugin($id = FALSE){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->join('tbl_plugins', 'tbl_plugins.plugin_added_by = tbl_users.id');
        $this->db->where('tbl_plugins.id', $id); 

        $query = $this->db->get();

        return $query->row_array();

    }

    public function get_plugin_v2($id = FALSE){
        $query = $this->db->get('tbl_plugins');
        $this->db->where('tbl_plugins.id', $id); 
        return $query->result_array();
    }

    public function update_plugin_info($id = NULL, $data = NULL) {
        $ps = $data;
        $this->db->set($ps);
        $this->db->where('tbl_plugins.id', $id);
        $this->db->update('tbl_plugins');
        $result =  $this->db->affected_rows(); 
        return $result;
     }

    public function get_review_plugins($status = FALSE){
        $this->db->select('*');
        $this->db->from('tbl_plugin_status');
        $this->db->join('tbl_plugins', 'tbl_plugin_status.plugin_id = tbl_plugins.id');
        $this->db->where('tbl_plugin_status.plugin_status', $status);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_review_plugin($id = FALSE){
        $this->db->from('tbl_plugin_status');
        $this->db->where('tbl_plugin_status.plugin_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update_reviewed_plugin($id = NULL, $data = NULL) {
        $ps = $data;
        $this->db->set($ps);
        $this->db->where('tbl_plugin_status.plugin_id', $id);
        $this->db->update('tbl_plugin_status');
        $result =  $this->db->affected_rows(); 
        return $result;
     }


    public function get_review_count($id = FALSE) {
            if($id === FALSE){
                $query = $this->db->from("tbl_plugin_status");
            }else{
            $query = $this->db->where('plugin_status', $id)->from("tbl_plugin_status");
            }
            return $query->count_all_results();
    }


    // ACTIVITY LOG
    public function create_activity_log($data_post){
        return $this->db->insert('tbl_activity_log',$data_post);
    }

    public function get_activity_logs($id = FALSE){
        $this->db->select('*');
        $this->db->from('tbl_activity_log');
        $this->db->join('tbl_plugins AS p1', 'tbl_activity_log.plugin_id_log = p1.id');
        $this->db->join('tbl_plugin_status AS p2', 'p2.plugin_id = tbl_activity_log.plugin_id_log');
        // $this->db->where('tbl_activity_log.plugin_status', $status);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_activity_logs_users($id = FALSE){
        $this->db->select('*');
        $this->db->from('tbl_activity_log');
        $this->db->join('tbl_plugins AS p1', 'tbl_activity_log.plugin_id_log = p1.id');
        $this->db->join('tbl_plugin_status AS p2', 'p2.plugin_id = tbl_activity_log.plugin_id_log');
        $this->db->where('tbl_activity_log.user_id_log', $id);
        $query = $this->db->get();

        return $query->result_array();
    }


    // Deleted move to JSON

    public function deleted_plugin($data_post){
        return $this->db->insert('tbl_deleted_plugins',$data_post);
    }

    

}

