<?php

use Core\Database;
use Core\Validator;


$title = $_POST['title'];
$text = $_POST['text'];
$id = $_POST['id'];

$errors = [];

if (Validator::string($title, 5)) {
	$errors['title'] = 'Value is too short';
}

if (Validator::string($text)) {
	$errors['text'] = 'Value is too short';
}

// if everything is ok. Add post to DB
if (empty($errors)) {
	try {
		$db = new Database();

		$db->query('update posts set title=:title,text=:text where id=:id', [
			'title' => htmlspecialchars($title),
			'text' => htmlspecialchars($text),
			'id' => $id
		]);
	} catch (Exception $e) {
		abort(500);
	}

	redirect('/post?id=' . $id);
} else {
	// show errors to user
	view('pages/posts/edit.php', [
		'errors' => $errors,
		'post_data' => $_POST
	]);
}




