<?php 
class Events_model extends CI_Model {

    function event_exist($key) {
        $this->db->where('event_code',$key);
        $query = $this->db->get('account_info_tb');
        if ($query->num_rows() > 0){
            return true;
        } else{
            return false;
        }
    }
    
}

?>