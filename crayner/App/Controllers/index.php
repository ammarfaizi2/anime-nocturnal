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
        $this->load->helper('rstr');
        $this->load->helper('teacrypt');
        $this->load->helper('cookiemgr');
    }
    
    /**
    * Default method
    */
    public function index()
    {
        $login = new \App\Models\Login();
        if ($login->login_status()) {
            $this->load->view('home');
        } else {
            $this->load->view('login', array('token'=>$login->token()));
        }
    }
}
