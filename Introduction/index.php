<?php

require_once 'vendor/autoload.php';
//var_dump(__DIR__) . PHP_EOL; // PHP_EOL IS'NT A MAGIC CONSTANT BECAUSE
// HE NOT CHANGE BASED ON CONTEXT
// echo __FILE__ . PHP_EOL;

// $age = 21;
// $name = 'age';

// variable variables

// echo $$name . PHP_EOL;

$className = 'Alura\Reflection\ClasseExemplo';
$myClass = new $className();
echo PHP_EOL;
$methodName = 'metodoPublico';
if (method_exists($myClass, $methodName)) {
	call_user_func([
		&$myClass,
		$methodName
	]);
	
	echo PHP_EOL;
	
	$myClass->$methodName();

	echo PHP_EOL;
}

// return accessible properties of an object.
var_dump(get_object_vars($myClass));
var_dump($myClass instanceof $className);
var_dump(is_a($myClass, $className));