<?php
if (!function_exists('stck')) {
    function stck($ck)
    {
        $now = time();
        foreach ($ck as $key => $val) {
            $st[] = setcookie($key, $val[0], $now+(int)(isset($val[1])?$val[1]:3600));
        }
        return $st;
    }
}
if (!function_exists('rmck')) {
    function rmck($ck)
    {
        foreach ($ck as $val) {
            $st[] = setcookie($val, null, 0);
        }
        return $st;
    }
}
