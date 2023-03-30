<?php

namespace Core;

use PDO;

class Database
{
	private PDO $connection;
	private $statement;

	public function __construct()
	{
		$config = require ('config.php');
		$dbConfig = $config['database'];

		$dsn = 'mysql:' . http_build_query($dbConfig, '', ';');

		$this->connection = new PDO($dsn, $dbConfig['user'], $dbConfig['password'], [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
	}

	public function query($query, $params = [])
	{
		$this->statement = $this->connection->prepare($query);

		$this->statement->execute($params);

		return $this;
	}

	public function fetch()
	{
		return $this->statement->fetch();
	}

	public function findOrFail()
	{
		$result = $this->fetch();

		return $result ?: abort();
	}

	public function fetchAll()
	{
		return $this->statement->fetchAll();
	}
}
