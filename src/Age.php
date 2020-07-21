<?php


namespace App;

/**
 * @param float $x входной параметр
 * @return float
 * @throws Exception
 */

use Exception;
use phpDocumentor\Reflection\Types\Integer;

class Age
{
    protected $day;

    public function old($day): float
    {
        if ($day / 365 < 100) {
            return $day / 365;
        } else {
            throw new Exception('Вы очень старый!', 000);
        }
    }
}
