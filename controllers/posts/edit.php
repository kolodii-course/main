
<?php

//require base_path('Database.php');

use Core\Database;

$header = 'My posts';

$db = new Database();

// if id exists
if (!empty($_GET['id'])) {
	$header = 'Edit post';

	$post = $db->query('select * from posts where id=:id', [
		'id' => $_GET['id']
	])->findOrFail();


	view('pages/posts/edit.php', [
		'header' => $header,
		'post' => $post,
//		'post_data' => $_POST
	]);
}




