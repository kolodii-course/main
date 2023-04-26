<?php

use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

$db = new Database();

$user = $db->query('select * from users where email=:email', [
	'email' => $email
])->fetch();

if (!$user || password_verify($password, $user['password']) === false) {
	$errors['email'] = 'Email and password does not match';
}

// if everything is ok. Add post to DB
if (empty($errors)) {
	// todo Log in user via session()

	$_SESSION['user'] = $email;

	redirect('/');
} else {
	view('pages/signin/create.php', [
		'errors' => $errors,
		'post_data' => $_POST
	]);
}




