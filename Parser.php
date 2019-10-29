<?php

//A = X^2
//B = X^1
//C = X^0

class Parser
{

    protected $rightSide;
    protected $elements;
    public $a = 0;
    public $b = 0;
    public $c = 0;
    public $polynomialDegree = 0;

    public function parse($equation) {

        $this->splitEquation($equation);
        $this->splitElements($this->elements);
        $this->splitElements($this->rightSide);

        $this->assignmentOfValues();
        $this->reduceEquation();
    }

    public function checkArg($av, $ac) {
        if ($ac != 2) {
            exit('error');
        }

        $strAv = $av['1'];

//        $pattern = ''
//        preg_split()
    }

    protected function splitEquation($equation) {
        $pattern = '#^(.*)=(.*)$#';
        preg_match($pattern, $equation, $elemnts);
        $this->elements = $elemnts['1'];
        $this->rightSide = $elemnts['2'];
    }

    protected function splitElements(&$side) {
        $pattern = '([+-]? ?[0-9]*[.]?[0-9]+ . X\^[0-9]+)';
        preg_match_all($pattern, $side, $elements);
        $side = $elements['0'];
    }

    protected function assignmentOfValues() {

        $pattern = "#([+-]? ?[0-9]*[.]?[0-9]+).*X\^([0-9]+)#";
        foreach($this->elements as $val) {
            preg_match($pattern, $val, $matches);
            if ($matches['2'] > $this->polynomialDegree) {
                $this->polynomialDegree = $matches['2'];
            }
            switch ($matches['2']) {
                case 0:
                    $this->c += str_replace(' ', '', $matches['1']);
                    break;
                case 1:
                    $this->b += str_replace(' ', '', $matches['1']);
                    break;
                case 2:
                    $this->a += str_replace(' ', '', $matches['1']);
                    break;
            }
        }
    }

    protected function reduceEquation() {
        $pattern = "#([+-]? ?[0-9]*[.]?[0-9]+).*X\^([0-9]+)#";
        foreach($this->rightSide as $val) {
            preg_match($pattern, $val, $matches);
            if ($matches['2'] > $this->polynomialDegree) {
                $this->polynomialDegree = $matches['2'];
            }
//            var_dump($matches);
            switch ($matches['2']) {
                case 0:
                    $this->c -= str_replace(' ', '', $matches['1']);
                    break;
                case 1:
                    $this->b -= str_replace(' ', '', $matches['1']);
                    break;
                case 2:
                    $this->a -= str_replace(' ', '', $matches['1']);
                    break;
            }
        }
    }
}