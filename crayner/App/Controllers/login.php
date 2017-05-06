<?php
namespace App\Controllers;

use System\Controller;

/**
*
*		Created by icetea
*
*/
class login extends Controller
{
    /**
    * Controller constructor
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('rstr');
        $this->load->helper('assets');
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
            header('location:'.base_url().'/home?ref=login');
        } else {
            if (isset($_POST['login'])) {
                if ($login->check_token()) {
                    if ($login->check_login()) {
                        header('location:'.base_url().'/home?ref=login');
                        die;
                    }
                } else {
                    $this->error_token();
                }
                die;
            }
            $this->load->view('login', array('token'=>$login->token()));
        }
    }





    private function error_token()
    {
        header('location:'.base_url().'/login?ref=err_token'); ?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Error Token !</title>
		</head>
		<body>
			<h1>Error Token !</h1>
		</body>
		</html>
		<?php

    }
}
