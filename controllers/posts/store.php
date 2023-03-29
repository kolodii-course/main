<?php

use Core\Database;
use Core\Validator;


$title = $_POST['title'];
$text = $_POST['text'];

$errors = [];

if (Validator::string($title, 5)) {
	$errors['title'] = 'Value is too short';
}

if (Validator::string($text)) {
	$errors['text'] = 'Value is too short';
}

// if everything is ok. Add post to DB
if (empty($errors)) {
	$db = new Database();

	$db->query('insert into posts(title, text) values (:title,:text)', [
		'title' => htmlspecialchars($title),
		'text' => htmlspecialchars($text)
	]);

	redirect('/posts');
} else {
	// show errors to user
	view('pages/posts/create.php', [
		'errors' => $errors,
		'post_data' => $_POST
	]);
}




