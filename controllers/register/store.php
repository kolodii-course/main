<?php

use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

$db = new Database();

if (Validator::string($email)) {
	$errors['email'] = 'Value is too short';
}

$exists = $db->query('select * from users where email=:email', [
	'email' => $email
])->fetch();

if($exists) {
	$errors['email'] = 'This email is already taken';
}

if (Validator::string($password)) {
	$errors['password'] = 'Value is too short';
}

// if everything is ok. Add post to DB
if (empty($errors)) {
	$db->query('insert into users(email, password) values (:email,:password)', [
		'email' => htmlspecialchars($email),
		'password' => password_hash($password, PASSWORD_BCRYPT)
	]);

	redirect('/');
} else {
	// show errors to user
	view('pages/register/create.php', [
		'errors' => $errors,
		'post_data' => $_POST
	]);
}




