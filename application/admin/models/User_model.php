<?php
class User_model extends CI_Model{
    
    /**
     *  ¹¹Ôìº¯Êı 
     */
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_users()
    {
        $query = $this->db->get_where('USER');
        return $query->result_array();
    }
}