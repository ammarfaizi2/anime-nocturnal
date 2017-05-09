<?php
namespace App\Controllers;

use System\Controller;
/**
*
*		Created by icetea
*
*/
class profile extends Controller
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
		
	}
	public function __call($name, $arg=null)
    {
        # disini mau dibikin panggil data user
    }
}