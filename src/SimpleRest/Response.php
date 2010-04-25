<?php

namespace SimpleRest;

class Response 
{

	private $response;

	public function __construct()
	{
		$this->response = (object)array('status' => 1);
	}

	public function _error($msg)
	{
		if (is_array($msg)) $msg = $msg[0];
		$this->response->status = 0;
		$this->response->message = $msg;
		$this->send();
	}

	public function _send()
	{
		exit(json_encode($this->response));		
	}

	public function __call($name, $args)
	{
		$method = '_' . $name;
		if (!method_exists($this, $method)) throw new Exception('Method ' . $name . ' not found');
		call_user_func(array($this, $method), $args);
	}

	public static function __callStatic($name, $args)
	{
		$method = '_' . $name;
		$obj = new self();
		if (!method_exists($obj, $method)) throw new Exception('Method ' . $name . ' not found');
		call_user_func(array($obj, $method), $args);
	}

}
