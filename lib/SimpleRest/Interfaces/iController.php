<?php

namespace SimpleRest\Interfaces;

interface iController 
{

	public function get($pars);
	public function post($pars);
	public function put($pars);
	public function delete($pars);

}
