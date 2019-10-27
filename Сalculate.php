<?php


class Calculate
{

    public function checkEquationOfDegree ($a, $b, $c) {
        if ($a != 0) {
            $this->calcX($a, $b, $c);
        }
        elseif ($b == 0 and  $c == 0) {
            echo 'All the real numbers are solution' . "\n";
            exit;
        }
        elseif ($b == 0 and $c != 0) {
            echo 'The equation has no roots' . "\n";
            exit;
        }
        else {
            $this->calcL($b, $c);
        }


    }

    // 1 * X^0 + 4 * X^1 = 0
    public function calcL($b, $c) {
        echo $c / $b * -1;
    }

    public function calcX($a, $b, $c) {
        $d = $this->discriminant($a, $b, $c);
        if ($d < 0) {
            echo 'Discriminant = ' . $d . ' There is no real roots!' . "\n";
            exit;
        }
        echo 'Discriminant: ' . $d . "\n";

        $result1 = (($b* -1) - $this->mySqrt($d)) / (2 * $a);
        echo $result1 . "\n";

        $result2 = (($b * -1) + $this->mySqrt($d)) / (2 * $a);
        echo $result2 . "\n";
    }

    //b2 - 4ac
    public function discriminant($a, $b, $c) {
        return ($b * $b) - 4 * $a * $c;
    }

    public function mySqrt($num) {
        $d = $num / 2.0;
        $i = 0.0;
        while ($d != $i)
        {
           $i = $d;
           $d = ($d + $num / $d) / 2.0;
        }
        return $d;
    }
}

//4 * X^0 + 4 * X^1 - 9.3 * X^2 = 0
//4 * X^0 + 4 * X^1 - 9.3 * X^2 = 0
//5 * X^0 + 13 * X^1 + 3 * X^2 = 1 * X^0 + 1 * X^1
//5 * X^0 + 3 * X^1 + 3 * X^2 = 1 * X^0 + 0 * X^1