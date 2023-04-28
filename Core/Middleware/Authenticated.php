<?php


namespace Core\Middleware;


use Core\Response;

class Authenticated implements MiddlewareInterface
{
	public function handle()
	{
		if (array_key_exists('user', $_SESSION) === false) abort(Response::UNAUTHORIZED);
	}
}
