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

    /**
     * @param int $day
     * @return float
     * @throws Exception
     */
    public function daysToYears(int $day): float
    {
        $years = $day / 365;

        if ($years > 150) {
            throw new Exception('Too old!', 1);
        }
        if ($years < 0) {
            throw new Exception('Imposable!', 2);
        }

        return $years;

    }

//    public function young($day)
//    {
//        if ($day / 365 < 0) {
//            throw new Exception('Так не бывает!', 777);
//        }
//        return $day / 365;
//    }
}
