<?php

namespace KataBank\Test;

use KataBank\Digit;
use KataBank\Number;

class NumberShouldTest extends BaseTest
{
    /** @test */
    public function return_the_value_of_his_numbers()
    {
        $digits = [
            new Digit(1),
            new Digit(2),
        ];
        $number = new Number($digits);

        $this->assertEquals(12, $number->value());
    }
}