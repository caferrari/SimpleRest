<?php

namespace SimpleRest;

use \SimpleRest\Exception;

class Dispatcher
{

	public function dispatch($uri)
	{
		if (!isValidUri($uri)) throw new Exception('Invalid uri');
	}

}
