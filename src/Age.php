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

    public function young($day)
    {
        if ($day / 365 < 0) {
            throw new Exception('Так не бывает!', 777);
        }
        return $day / 365;
    }
}
