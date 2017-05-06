<?php
namespace App\Models;

use System\Model;
/**
*		Created by icetea 
*/
class User extends Model
{
	/** 
	*		Model constructor
	*/
	public function __construct()
	{
		parent::__construct();
		parent::db();
	}
	public function get_user_data($id)
	{
		$st = $this->db->prepare("SELECT `a`.`username`,`a`.`email`,`a`.`ukey`,`a`.`authority`,`b`.`nama`,`b`.`tmplahir`,`b`.`tgllahir`,`b`.`alamat` FROM `account_data` AS `a` INNER JOIN `account_info` AS `b` ON `a`.`userid`=`b`.`userid` WHERE `a`.`userid`=:id LIMIT 1;");
		$st->execute(array(':id'=>$id));
		return $st->fetch(\PDO::FETCH_ASSOC);
	}
}