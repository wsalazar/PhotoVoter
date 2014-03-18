<?php

function autoload($class){
	$path = str_replace('config','',__DIR__);
	require $path . 'lib' . DIRECTORY_SEPARATOR . str_replace('\\','/',$class) . '.php';
}

spl_autoload_register('autoload');