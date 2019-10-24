<?php


class Output
{
    public function printReducedForm($a, $b, $c) {

        $strOutput = $c . ' * X^0';
        $strOutput .= ' ' . $b . ' * X^1';
        $strOutput .= ' ' . $a . ' * X^2';
        $strOutput .= ' = 0';
        echo $strOutput;
        echo "\n";

    }

    public function checkSing() {

    }
}









































//4 * X^0 + 4 * X^1 - 9.3 * X^2 = 0