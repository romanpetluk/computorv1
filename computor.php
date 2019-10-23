<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Parser.php';
require_once 'Output.php';

//var_dump($argv);

//echo $argv['1'] * $argv['2'] . "\n";

$parser = new Parser();
$output = new Output();

//$parser->getA($argv['1']);
$parser->parse($argv['1']);
$output->printReducedForm($parser);
//echo $parser->polynomialDegree . "\n";
//echo $parser->a . "\n";
//echo $parser->b . "\n";
//echo $parser->c . "\n";