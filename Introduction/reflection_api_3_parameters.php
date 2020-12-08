<?php 

require_once 'vendor/autoload.php';

// get method
$privateMethod = new ReflectionMethod(Alura\Reflection\ClasseExemplo::class, 'metodoPrivado');
// number of parameters

$parameterNumbers2 = $privateMethod->getNumberOfRequiredParameters();
$optionalParameters = $privateMethod->getNumberOfParameters();

$allParameters = $privateMethod->getParameters();
$requiredParameters = array_filter(
    $allParameters, 
    fn (ReflectionParameter $param) => !$param->isOptional()
);

foreach ($requiredParameters as $parameter) {
    if ($parameter->hasType()) {
        new DomainException('Unknow parameter type "' . $parameter->getName() . '"');
    }

    #ReflectionType
    $type = $parameter->getType(); # if has not type, return null.

    echo "is builtin:" . $type->isBuiltin() . PHP_EOL; 
    echo (string) $type . PHP_EOL;
}
