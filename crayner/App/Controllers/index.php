<?php
namespace App\Controllers;

use System\Controller;

/**
*
*		Created by icetea
*
*/
class index extends Controller
{
    /**
    * Controller constructor
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    /**
    * Default method
    */
    public function index()
    {
        $this->load->model('Login','login');
        if ($this->login->login_status()) {
            $this->load->view('home');
        } else {
            $this->load->view('login',array('token'=>$this->login->token()));
        }
    }
}
