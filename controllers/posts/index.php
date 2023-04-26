
<?php

//require base_path('Database.php');

use Core\Database;

$header = 'My posts';

$db = resolve(Database::class);

// show list of posts
$posts = $db->query('select * from posts')->fetchAll();

view('pages/posts/index.php', [
	'header' => $header,
	'posts' => $posts
]);




