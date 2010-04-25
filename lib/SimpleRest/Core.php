<?php

namespace SimpleRest;

use \SplClassLoader;
use \SimpleRest\Exception;

class Core
{

	public function __construct()
	{
		$this->bootstrap();
	}

	private function bootstrap()
	{
		// start the autoloader
		$loader = new SplClassLoader();
        $loader->setIncludePath(LIB_DIR);
        $loader->register();

        //set the error handler
        set_error_handler('\SimpleRest\Exception::handler');
	}

}

