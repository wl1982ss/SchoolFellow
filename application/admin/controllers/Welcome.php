<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
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
	    $this->load->helper(array('form', 'url'));
	    
	    $this->load->library('form_validation');
	    
	    $this->form_validation->set_rules('username', 'Username', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
	    //$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
	    
	    if($this->form_validation->run() == FALSE)
	    {
	        //$this->load->view('myform');
	        $this->load->view('admin_welcome_message');
	    }
	    else 
	    {
	        $this->load->view('formsuccess');
	    }
	    
	}
	
	/**
	 * 用户登录
	 * @return boolean
	 */
	public function login()
	{
	    //设置错误定界符
	    $username = $this->input->post('username');     //用户名
	    $password = $this->input->post('password');    //密码
	    
	    $user = $this->user_model->get_by_username($username);
	    //if($user->$password == $password)
	    if(($username == 'admin') || ($password == 'admin888'))
	    {
	        redirect('/user/index');
	        return TRUE;
	    }
	    else 
	    {
	        return FALSE;
	    }
	}
	
	/**
	 * 用户注册
	 */
	public function register()
	{
	    //设置错误定界符
	    $this->form_validation->set_error_delimiters('<span class="error">','</span>');
	    
	    if($this->form_validation->run() == FALSE)
	    {
	        $this->load->view('Users/register');
	    }
	    else 
	    {
	        $username = $this->input->post('username');
	        $password = md5($this->salt.$this->input->post('password'));
	        if($this->user_model->add_user($username, $password))
	        {
	            $data['message'] = "The user account has now been created! You can go ". anchor('user/index', 'here').'.';
	        }
	        else {
	            $data['message'] = "There was a problem when adding your account. You can register".anchor('user/register', 'here').' again';
	        }
	        $this->load->view('user/note', $data);
	    }
	}
}
