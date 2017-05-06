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
        return rstr();
    }
    public function login_status()
    {
        return false;
    }
}
