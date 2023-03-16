
<?php

require 'Database.php';

$header = 'My posts';

$db = new Database();

// if id exists
if (!empty($_GET['id'])) {
	$header = 'View post';

	$post = $db->query('select * from posts where id=:id', [
		'id' => $_GET['id']
	])->fetch();


	view('views/pages/posts/view.php', [
		'header' => $header,
		'post' => $post
	]);

} else {
	// show list of posts
	$posts = $db->query('select * from posts')->fetchAll();

//	$posts = $statement->fetchAll();

	view('views/pages/posts/index.php', [
		'header' => $header,
		'posts' => $posts
	]);
}




