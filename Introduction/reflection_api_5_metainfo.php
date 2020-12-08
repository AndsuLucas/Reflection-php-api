<?php

require_once 'vendor/autoload.php';

$reflectionClass = new ReflectionClass(\Alura\Reflection\ClasseExemplo::class);
$property = $reflectionClass->getProperty('propriedadePublica');
//var_dump($property->getDocComment()); ////attributes(php 8.0) is better than doc comments

//after php8.0
var_dump($property->getAttributes()[0]->newInstance());