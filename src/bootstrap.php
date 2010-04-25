<?php
header('Content-Type: text/plain; charset=utf-8'); 
error_reporting(-1);
ini_set('display_errors', true);
ini_set('html_errors', true);
define('LIB_DIR', realpath(''));

if (!class_exists('\SplClassLoader')) require_once LIB_DIR . '/lib/SplClassLoader.php';

include_once 'lib/functions.php';
include_once 'SimpleRest/Core.php';

try{
	$fw = new \SimpleRest\Core();
} catch (Exception $e){
	\SimpleRest\Response::error($e->getMessage());
}
