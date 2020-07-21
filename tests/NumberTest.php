<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Number;

class NumberTest extends TestCase
{
    public function testDiv()
    {
        $num = new Number();

        $this->assertEquals(
            9,
            $num->div(18,2)
        );
        $this->assertIsFloat($num->div(15,3));
    }
    public function testCorrectness()
    {
        $num = new Number();
       

        $this->expectException('Exception');
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('На 0 делить нельзя');
        $num->div(36,0);
    }

   
}
