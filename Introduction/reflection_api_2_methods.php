<?php 

require_once 'vendor/autoload.php';

$reflectionClass = new ReflectionClass(Alura\Reflection\ClasseExemplo::class);
                                        //allMethods // Sum bitwise
$methods = $reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED);
if ($reflectionClass->hasMethod('metodoPublico')) {
    $publicMethod = $reflectionClass->getMethod('metodoPublico');
    // $publicMethod->invoke($newInstance, 'param1', 'param2'); echo PHP_EOL; 
    // $publicMethod->invokeArgs($newInstance, ['param1', 'param2']);
}

// get method
$privateMethod = $reflectionClass->getMethod('metodoPrivado');

// number of parameters
$parameterNumbers1 = $publicMethod->getNumberOfParameters();
$parameterNumbers2 = $privateMethod->getNumberOfRequiredParameters();


$allParameters = $privateMethod->getParameters();
var_dump($allParameters);
