<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Arr;

class ArrTest extends TestCase
{
    public function testSumArr()
    {
        $arr = new Arr();

        $this->assertEquals(
            15,
            $arr->sumArr([1, 2, 3, 4, 5])
        );
        $this->assertIsInt($arr->sumArr([1, 23, 4, 5]));
    }

    public function testMulArr()
    {
        $arr = new Arr();

        $this->assertEquals(
            6,
            $arr->sumArr([1, 2, 3])
        );
        $this->assertIsInt($arr->sumArr([1, 6, 7]));
    }

    public function testMulArrNum()
    {
        $arr = new Arr();

        $this->assertEquals(
            [2, 4, 6],
            $arr->mulArrNum([1, 2, 3], 2)
        );
        $this->assertIsArray($arr->mulArrNum([1, 2, 3], 2));
    }
}