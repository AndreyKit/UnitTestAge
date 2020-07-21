<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Age;

class AgeTest extends TestCase
{
    public function testCheck()
    {
        $age = new Age();

        $this->assertEquals(
            5,
            $age->daysToYears(5 * 365)
        );

        $this->assertIsFloat(
            $age->daysToYears(1588)
        );

    }

    public function testOld()
    {
        $age = new Age();


        $this->expectException('Exception');
        $this->expectExceptionCode(1);
        $this->expectExceptionMessage('Too old!');

        $age->daysToYears(200 * 365);
    }


    public function testYoung()
    {
        $age = new Age();

        $this->expectException('Exception');
        $this->expectExceptionCode(2);
        $this->expectExceptionMessage('Imposable!');


        $age->daysToYears(-1000);
    }
}
