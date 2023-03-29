<?php

namespace Core;

class Validator
{
	public static function string(string|null $value, int $maxLength = 255):string
	{
		$error = '';
		if (strlen($value) === 0) {
			$error = 'Value is too short';
		}

		if (strlen($value) > $maxLength) {
			$error = 'Value is too long';
		}

		return $error;
	}
}
