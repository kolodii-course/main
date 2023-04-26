<?php


namespace Core;


class Container
{
	private array $bindings = [];

	public function bind(string $class, callable $fn)
	{
		$this->bindings[$class] = $fn;
	}

	public function resolve($class)
	{
		if (array_key_exists($class, $this->bindings)) {
			return call_user_func($this->bindings[$class]);
		} else {
			throw new \Exception('Class could not be resolved');
		}
	}
}
