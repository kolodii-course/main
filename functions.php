<?php

function dd($var) {
	echo "<pre>";
	var_dump($var);
	echo "</pre>";

	die();
}

function getByName($arr, $key){
	if (array_key_exists($key, $arr)) {
		return $arr[$key];
	}

	return [];
};
