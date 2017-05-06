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
        		'lgtoken'	=>	array($enctk,1200),
        		'lgkey'	=>	array(teacrypt($key,'redangel'))
        	));
        return $token;
    }
    public function check_token()
    {
    	if (isset($_COOKIE['lgtoken'],$_COOKIE['lgkey'],$_POST['lgtoken']) && teadecrypt($_COOKIE['lgtoken'],teadecrypt($_COOKIE['lgkey'],'redangel'))==$_POST['lgtoken']) {
    		return true;
    	}
    	return false;
    }
    public function login_status()
    {
        return false;
    }
}
