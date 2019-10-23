<?php


class Output
{
    public function printReducedForm($parse) {
        var_dump($parse);
        foreach ($parse->elements as $val) {
            echo $val . ' ';
        }

    }
}