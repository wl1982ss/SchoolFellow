<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }
    
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        //$this->load->view('welcome_message');
        
        $user_list = $this->user_model->get_users();
        
        var_dump($user_list);
        
    }
    
    /**
     * 添加用户
     * @return boolean
     */
    public function add()
    {
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
        
        if($this->form_validation->run() == FALSE)
        {
            $data['heading'] = "Welcome to add User!";
            
            $this->load->view('users/user_add', $data);
        }
        else 
        {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $gender = $this->input->post('gender');
            $birthday = $this->input->post('birthday');
            $grade = $this->input->post('grade');
            $industry = $this->input->post('industry');
            $city = $this->input->post('city');
            $hobby = $this->input->post('hobby');
            
            $return_flag =$this->user_model->add_user($username, $password, $gender, $birthday, $grade, $industry, $city, $hobby);
            
            if($return_flag == TRUE)
            {
                redirect('user/index');
            }
            else 
            {
                return FALSE;
            }
        }
        
        return true;
    }
    
    /**
     * 编辑用户
     * @return boolean
     */
    public function edit()
    {
        return true;
    }
    
    
}
