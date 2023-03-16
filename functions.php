<?php

function dd($var) {
	echo "<pre>";
	var_dump($var);
	echo "</pre>";

	die();
}

function view($path, $params=[]) {
	extract($params);

	require $path;
}
