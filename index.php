<?php
include "functions.php";
include "Response.php";

$uri = $_SERVER['REQUEST_URI'];

$routes = [
	'/about' => "controllers/about.php",
	'/contact' => "controllers/contact.php",
	'/' => "controllers/index.php"
];

if (array_key_exists($uri, $routes)) {
	require $routes[$uri];
} else {
	http_response_code(Response::NOT_FOUND);

	require "views/404.php";
}


