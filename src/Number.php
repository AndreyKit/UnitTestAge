<?php

namespace App;

use Exception;

class Number
{
    public function div(int $num1, int $num2): float
    {
        if ($num2 !== 0) {
            return $num1 / $num2;
        } else {
            throw new Exception('На 0 делить нельзя', 0);
        }
    }
}
