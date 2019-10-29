<?php


class Output
{
    public function printReducedForm($a, $b, $c) {

        $strOutput = 'Reduced form: ';
        if ($c) {
            $strOutput .= $c . ' * X^0';
        }
        if ($b) {
            $strOutput .= $this->printNumeric($b) . ' * X^1';
        }
        if ($a) {
            $strOutput .= $this->printNumeric($a) . ' * X^2';
        }
        if (!$a and !$b and !$c) {
            $strOutput = 0;
        }
        $strOutput .= ' = 0';
        echo $strOutput;
        echo "\n";

    }

    public function printNumeric($num) {
        if ($num < 0) {
            return ' - ' . $num * -1;
        } else {
            return ' + ' . $num;
        }

    }
}









































//4 * X^0 + 4 * X^1 - 9.3 * X^2 = 0