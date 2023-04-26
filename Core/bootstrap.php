<?php

use Core\App;

$container = new \Core\Container();

$container->bind(\Core\Database::class, function () {
	$config = require ('config.php');
	$dbConfig = $config['database'];

	return new \Core\Database($dbConfig);
});

App::setContainer($container);
