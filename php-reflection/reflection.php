<?php 
/* Entendendo como Reflection funciona */

use Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$objeto = new ClasseExemplo();
var_dump($objeto);

/* Trabalhando com uma Reflection API */
$reflectionClass = new ReflectionClass(ClasseExemplo::class);

echo $reflectionClass;

$objetoClasseExemplo = $reflectionClass->newInstance();
$objetoClasseExemploSemConstrutor = $reflectionClass->newInstanceWithoutConstructor();

/* Criando um objeto a partir da inspeção de uma Reflection */
$nomeClasse = $reflectionClass->getName();
$novoObjeto = new $nomeClasse();

/* Obtendo os modificadores de uma classe */
$modifiers = $reflectionClass->getModifiers();
$modifiersNames = Reflection::getModifierNames($modifiers);

/* Obtendos os métodos públicos e protegidos de uma classe */
$methodsClasseExemplo = $reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED);
var_dump($methodsClasseExemplo);