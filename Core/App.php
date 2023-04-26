<?php

namespace Core;

class App
{
	private static $container;

	public static function setContainer($container)
	{
		static::$container = $container;
	}

	public static function resolve(string $class)
	{
		return static::$container->resolve($class);
	}
}
