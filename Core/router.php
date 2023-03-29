<?php

use Core\Response;

$uri = $_SERVER['REQUEST_URI'];

$routes = require('routes.php');

$path = parse_url($uri)['path'];

if (array_key_exists($path, $routes)) {
	require base_path($routes[$path]);
} else {
	http_response_code(Response::NOT_FOUND);

	require base_path("views/404.php");
}
