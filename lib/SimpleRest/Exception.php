<?php

namespace SimpleRest;

use \ErrorException;

class Exception extends \Exception
{
	public static function handler($errno, $errstr, $errfile, $errline ) {
		throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
	}
}

