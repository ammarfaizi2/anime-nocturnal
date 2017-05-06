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
        parent::db();
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
    public function check_login()
    {
    	$st = $this->db->prepare("SELECT `userid`,`password`,`ukey`,`authority` FROM `account_data` WHERE `username`=:user LIMIT 1;");
    	$st->execute(array(
    			':user'=>$_POST['username']
    		));
    	$r = $st->fetch(\PDO::FETCH_ASSOC);
    	var_dump($r);

    	die;
    	$exp = 3600*24*14;
    	stck(array(
				'id'	=>array($r['userid'],$exp),
				'sess'	=>array($sess,$exp),
				''
			));
    }

    public function login_status()
    {
        return false;
    }
}
