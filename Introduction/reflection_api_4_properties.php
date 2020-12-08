<?php 
require_once 'vendor/autoload.php';

$reflectionClass = new ReflectionClass(\Alura\Reflection\ClasseExemplo::class);

// $properties = $reflectionClass->getProperties();

$privateProperty = $reflectionClass->getProperty('propriedadePrivada');

// var_dump(Reflection::getModifierNames($privateProperty->getModifiers()));
// var_dump($privateProperty->isPrivate());

if (!$privateProperty->isPublic()) {
    $privateProperty->setAccessible(true);
    var_dump($privateProperty->getValue($reflectionClass->newInstanceWithoutConstructor()));
}
// foreach ($properties as $property) {
//     var_dump(Reflection::getModifierNames($property->getModifiers()));
// }