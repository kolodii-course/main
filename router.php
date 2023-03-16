<?php

$uri = $_SERVER['REQUEST_URI'];

$routes = require('routes.php');

$path = parse_url($uri)['path'];

if (array_key_exists($path, $routes)) {
	require $routes[$path];
} else {
	http_response_code(Response::NOT_FOUND);

	require "views/404.php";
}
