<?php

/**
* Dump anythong
* @param	$var		mixed
* @return	void
*/
function d($var='here'){
	print_r($var);
	exit();
}

/**
* Check if the parameter is a valid uri
* @param	$uri		string
* @return	boolean
*/
function isValidUri($uri)
{
	if ($uri=='/') return true;
	return preg_match('@^(/[a-zA-Z0-9\-_]+)+/$@', $uri);
}

/**
* Convert sala-de-imprensa to SalaDeImprensa
* @param	$str		string
* @return	string
*/
function camelize($str='') {
    return str_replace(' ', '', ucwords(str_replace(array('_', '-'), ' ', $str)));
}
