<?php
class User_model extends CI_Model{
    
    /**
     *  构造函数 
     */
    public function __construct()
    {
        $this->load->database();
    }
    
    /**
     * 增加用户
     * @param unknown $username
     * @param unknown $password
     */
    public function add_user($username = NULL, $password = NULL, $gender = NULL, $birthday = NULL, $grade = NULL, $industry = NULL, $city = NULL, $hobby = NULL)
    {
        $data = array(
            'name' => $username,
            'password' => $password,
            'gender' => $gender,
            'birthday' => $birthday,
            'grade' => $grade,
            'industry_id' => $industry,
            'city' => $city,
            'hobby' => $hobby
        );
        $this->db->insert('user', $data);
        
        if($this->db->affected_rows() > 0){
            return TRUE;
        }
        
        return FALSE;
    }
    
    /**
     * 更新用户信息
     * 
     * @param unknown $id
     * @param unknown $username
     * @param unknown $password
     */
    public function update_user($id = NULL, $username = NULL, $password = NULL)
    {
        $data = array(
            'name' => $username,
            'password' => $password
        );
        
        $this->db->where('id', $id)->update('hebeu_schoolfellow', $data);
    }
    
    /**
     * 删除用户信息
     * @param unknown $id
     */
    public function delete_user($id)
    {
        $this->db->where('id', $id)->delete('user');
    }
    
    public function get_by_username($username)
    {
        $query = $this->db->where('name', $username)->get('user');
        if($query->num_rows() == 1)
        {
            return $query->row();
        }
        else
        {
            return FALSE;
        }
    }
    
    /**
     * 获取用户列表
     * @return unknown
     */
    public function get_users()
    {
        $query = $this->db->get_where('USER');
        return $query->result_array();
    }
}