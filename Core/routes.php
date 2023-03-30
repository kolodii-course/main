<?php

$router = new \Core\Router();

$router->get('/about', 'controllers/about.php')
	->get('/contact', 'controllers/contact.php')
	->get('/', 'controllers/index.php')
	->get('/posts', 'controllers/posts/index.php')
	->get('/post', 'controllers/posts/view.php')
	->get('/posts/create', 'controllers/posts/create.php')
	->post('/posts/store', 'controllers/posts/store.php')
	->delete('/post', 'controllers/posts/destroy.php')
	->get('/post/edit', 'controllers/posts/edit.php')
	->put('/post', 'controllers/posts/update.php')
;

//return [
//	'/about' => "controllers/about.php",
//	'/contact' => "controllers/contact.php",
//	'/' => "controllers/index.php",
//	'/posts' => 'controllers/posts/index.php',
//	'/posts/create' => 'controllers/posts/create.php',
//	'/posts/store' => 'controllers/posts/store.php',
//];
