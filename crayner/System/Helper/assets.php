<?php
use System\Config_Handler;

if (!function_exists('js')) {
    function js($file, $abs=false)
    {
        print '<script type="text/javascript" src="'.(ConfigHandler::iq()->assets('js')).'/'.($abs?$file:$file.'.js').'">';
    }
}
if (!function_exists('css')) {
    function css($file, $abs=false)
    {
        print '<link rel="stylesheet" type="text/css" href="'.(ConfigHandler::iq()->assets('css')).'/'.($abs?$file:$file.'.css').'">';
    }
}
