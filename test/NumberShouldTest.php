<?php

namespace KataBank\Test;

use KataBank\Digit;
use KataBank\Number;

class NumberShouldTest extends BaseTest
{
    /** @test */
    public function return_the_value_of_his_numbers()
    {
        $this->markTestIncomplete('Not yet');

        $digits = [
            new Digit($this->one()),
            new Digit($this->two()),
        ];
        $number = new Number($digits);

        $this->assertEquals(12, $number->value());
    }
}