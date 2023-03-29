<?php
const BASE_PATH = __DIR__ . '/../';

include BASE_PATH . "Core/functions.php";

spl_autoload_register(function ($class) {
	require base_path( str_replace('\\', '/', $class) . '.php');
});


include base_path("Core/Response.php");
include base_path("Core/router.php");



