<?php

function dd($var) {
	echo "<pre>";
	var_dump($var);
	echo "</pre>";

	die();
}

function view($path, $params=[]) {

	extract($params);

	require base_path('views/' . $path);
}

function url_path() {
	$uri = $_SERVER['REQUEST_URI'];

	return parse_url($uri)['path'];
}

function base_path($uri)
{
	return BASE_PATH . $uri;
}

function redirect($url)
{
	header('Location:'. $url);
	die();
}
