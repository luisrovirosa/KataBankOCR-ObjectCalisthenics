<?php

namespace KataBank\Test;

use KataBank\Number;

class NumberShouldTest extends BaseTest
{
    /** @test */
    public function return_the_value_of_his_numbers()
    {
        $digits = [
            $this->one(),
            $this->two(),
        ];
        $number = new Number($digits);

        $this->assertEquals(12, $number->value());
    }
}