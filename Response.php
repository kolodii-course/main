<?php

class Response implements Responable
{
	use ResponseHelper;

	const NOT_FOUND = 404;
	const UNAUTHORIZED = 403;

	public static function calculate()
	{
		return 1;
	}

	public function response()
	{
		$this->superResponse();
	}

	public function build()
	{
		// TODO: Implement build() method.
	}
}

abstract class ResponseAbstract
{
	public abstract function response();

	public function superResponse()
	{
		echo 'this is super';
	}
}

interface Responable
{
	public function response();

	public function build();
}


trait ResponseHelper
{
	
}

//Response::calculate();
//
//Response::UNAUTHORIZED;
