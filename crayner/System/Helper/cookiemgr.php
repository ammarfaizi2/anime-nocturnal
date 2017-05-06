<?php
if (!function_exists('stck')) {
	function stck($ck)
	{
		foreach ($ck as $key => $val) {
			$st[] = setcookie($key,$val[0],time()+(isset($val[1])?$val[1]:3600));
		}
		return $st;
	}
}