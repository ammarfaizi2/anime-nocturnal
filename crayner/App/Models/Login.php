<?php
namespace App\Models;

use System\Model;

/**
*		Created by icetea
*/
class Login extends Model
{
    /**
    *		Model constructor
    */
    public function __construct()
    {
        parent::__construct();
    }
    public function token()
    {
        $token	= rstr(64);
        $key	= rstr(32);
        $enctk	= teacrypt($token,$key);
        stck(array(
        		'token'	=>	array($enctk,1200),
        		'key'	=>	array(teacrypt($key,'redangel'))
        	));
        return $token;
    }
    public function login_status()
    {
        return false;
    }
}
