<?php

function d($var='here'){
	print_r($var);
	die();
}

function isValidUri($uri)
{
	return preg_match('@^(/[a-zA-Z0-9]+)+/$@', $uri);
}

