<?php

use Core\Database;

if (!empty($_POST['id'])) {
	try {
		$db = new Database();

		$db->query('delete from posts where id=:id', [
			'id' => $_POST['id']
		]);
	} catch (Exception $e) {
		abort(500);
	}

	redirect('/posts');
}





