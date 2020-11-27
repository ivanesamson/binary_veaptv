<?php
class Users_model extends CI_Model
{   
    public function insert($data) {
        $this->db->insert('account_users_tb', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}