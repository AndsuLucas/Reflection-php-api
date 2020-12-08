<?php
require_once __DIR__ . '/vendor/autoload.php';

// echo Alura\Reflection\ClasseExemplo::class . PHP_EOL;
/** @var ReflectionClass */
$reflectionClass = new ReflectionClass(Alura\Reflection\ClasseExemplo::class);
//var_dump((string) $reflectionClass); // class implements __toString

$newInstance = $reflectionClass->newInstance(1, 2); // execute constructor
// echo json_encode($newInstance);

$interfaceNames = $reflectionClass->getInterfaceNames();

$modifiers = $reflectionClass->getModifiers(); // return identifier of modifier
$modifierNames = Reflection::getModifierNames($modifiers);
// var_dump($modifierNames);

// echo PHP_EOL;
// $newInstance2 = $reflectionClass->newInstanceWithoutConstructor(); // without constructor
// echo PHP_EOL;
// $newInstance3 = $reflectionClass->newInstanceArgs([1,2]);
