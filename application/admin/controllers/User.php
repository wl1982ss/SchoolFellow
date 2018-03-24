<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('user_model');
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
     * ����û�
     * @return boolean
     */
    public function add()
    {
        $data['heading'] = "Welcome to add User!";
        
        $this->load->view('users/user_add', $data);
        return true;
    }
    
    /**
     * �༭�û�
     * @return boolean
     */
    public function edit()
    {
        return true;
    }
    
    
}
