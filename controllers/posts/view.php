
<?php

//require base_path('Database.php');

use Core\Database;

$header = 'My posts';

$db = new Database();

// if id exists
if (!empty($_GET['id'])) {
	$header = 'View post';

	$post = $db->query('select * from posts where id=:id', [
		'id' => $_GET['id']
	])->fetch();


	view('pages/posts/view.php', [
		'header' => $header,
		'post' => $post
	]);
}




