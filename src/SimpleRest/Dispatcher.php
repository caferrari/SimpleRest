<?php

namespace SimpleRest;

use \SimpleRest\Exception;

class Dispatcher
{

	public function dispatch($uri)
	{
		if (!isValidUri($uri)) throw new Exception('Invalid uri');
		d($this->uriParts($uri));
	}

	public function uriParts($uri)
	{
		$uri = preg_replace('@^/|/$@', '', $uri);
		$parts = (empty($uri)) ? array('index') : explode('/', $uri);
		return array_map(function ($i) { return camelize($i); }, $parts);
	}

}
