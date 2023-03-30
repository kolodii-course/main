<?php

namespace Core;

class Router {
	private array $routes = [];

	public function init()
	{
		$uri = $_SERVER['REQUEST_URI'];
		$path = parse_url($uri)['path'];

		$method = $_SERVER['REQUEST_METHOD'];

		if (!empty($_POST['_method'])) {
			$method = $_POST['_method'];
		}

		$notFound = true;

		foreach ($this->routes as $route) {
			if ($route['method'] === $method && $route['uri'] === $path) {
				require base_path($route['controller']);

				$notFound = false;
			}
		}

		if ($notFound) {
			http_response_code(Response::NOT_FOUND);

			require base_path("views/404.php");
		}
	}

	public function get(string $uri, string $controller)
	{
		$this->routes[] = [
			'uri' => $uri,
			'controller' => $controller,
			'method' => Method::GET->value
		];

		return $this;
	}

	public function post($uri, $controller)
	{
		$this->routes[] = [
			'uri' => $uri,
			'controller' => $controller,
			'method' => Method::POST->value
		];

		return $this;
	}

	public function put($uri, $controller)
	{
		$this->routes[] = [
			'uri' => $uri,
			'controller' => $controller,
			'method' => Method::PUT->value
		];

		return $this;
	}

	public function delete($uri, $controller)
	{
		$this->routes[] = [
			'uri' => $uri,
			'controller' => $controller,
			'method' => Method::DELETE->value
		];

		return $this;
	}
}
