<?php
if (!function_exists('stck')) {
	function stck($ck)
	{
		$now = time();
		foreach ($ck as $key => $val) {
			$st[] = setcookie($key,$val[0],$now+(int)(isset($val[1])?$val[1]:3600));
		}
		return $st;
	}
}