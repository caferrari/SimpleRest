<?php

namespace SimpleRest;

class Core
{

	public function __construct()
	{
		$this->bootstrap();
		$d = new \SimpleRest\Dispatcher();
		$d->dispatch(Env::$uri);
	}

	private function bootstrap()
	{
		// start the autoloader
		$loader = new \SplClassLoader();
		$loader->setIncludePath(LIB_DIR);
		$loader->register();

		// set the error handler
		set_error_handler('\SimpleRest\Exception::handler');

		// Setup the environment
		Env::$root = str_replace('src/bootstrap.php', '', $_SERVER['SCRIPT_FILENAME']);
		Env::$vroot = str_replace($_SERVER['DOCUMENT_ROOT'], '', Env::$root);
		Env::$uri = $_SERVER['REQUEST_URI'] == Env::$vroot ?
			'/' :
			'/' . preg_replace('@^/+|/+$@', '', str_replace(Env::$vroot, '', $_SERVER['REQUEST_URI'])) . '/';
	}

}

