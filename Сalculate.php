<?php


class Calculate
{

    public function checkEquationOfDegree ($a, $b, $c) {
        echo "\n" . $this->discriminator($a, $b, $c) . "\n";
    }

    //b2 - 4ac
    public function discriminator($a, $b, $c) {
        return $b * $b - 4 * $a * $c;
    }
}