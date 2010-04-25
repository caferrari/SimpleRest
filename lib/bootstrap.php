<?php
error_reporting(-1);
ini_set('display_errors', true);
ini_set('html_errors', true);
define('LIB_DIR', realpath(''));

if (!class_exists('\SplClassLoader')) require_once LIB_DIR . '/SplClassLoader.php';

include_once 'functions.php';
include_once 'SimpleRest/Core.php';

$fw = new \SimpleRest\Core();
