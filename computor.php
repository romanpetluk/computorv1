<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Parser.php';
require_once 'Output.php';
require_once 'Сalculate.php';

//var_dump($argv);

//echo $argv['1'] * $argv['2'] . "\n";

$parser = new Parser();
$output = new Output();
$calculate = new Calculate;

//$parser->getA($argv['1']);
$parser->parse($argv['1']);
//var_dump($parser);
//exit;
//echo $parser->a . "\n";
//echo $parser->b . "\n";
//echo $parser->c . "\n";
echo $parser->polynomialDegree . "\n";
//
//exit;
$output->printReducedForm($parser->a, $parser->b, $parser->c);
$calculate->checkEquationOfDegree($parser->a, $parser->b, $parser->c);

//echo $parser->polynomialDegree . "\n";
//echo $parser->a . "\n";
//echo $parser->b . "\n";
//echo $parser->c . "\n";






/*
 * 5 * X^0 = $c
 + 4 * X^1 = $b
 - 9.3 * X^2 = $a
 = 1 * X^0

 4 * X^0
 + 4 * X^1
 - 9.3 * X^2
 = 0

//A = X^2
//B = X^1
//C = X^0

(6 * C) (+ 4 * B) (- 9.3 * A) = (1 * C)
5 * X^0 + 4 * X^1 - 9.3 * X^2 = 1 * X^2

*/