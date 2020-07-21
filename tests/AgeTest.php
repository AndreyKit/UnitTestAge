<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Age;

class AgeTest extends TestCase
{
    public function testOld()
    {
        $age = new Age();

        $this->assertEquals(
            5,
            $age->old(1825)
        );
        $this->assertIsFloat($age->old(1588));
    }
    public function testCorrectness()
    {
        $age = new Age();
       

        $this->expectException('Exception');
        $this->expectExceptionCode(000);
        $this->expectExceptionMessage('Вы очень старый!');
        $age->old(36500);
    }

    public function testYoung()
    {
        $age = new Age();

        $this->expectException('Exception');
        $this->expectExceptionCode(777);
        $this->expectExceptionMessage('Так не бывает!');
        $age->young(-1);
    }
}
