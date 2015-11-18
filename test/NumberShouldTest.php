<?php

namespace KataBank\Test;

use KataBank\Digit;
use KataBank\Number;

class NumberShouldTest extends BaseTest
{
    /** @test */
    public function return_the_value_of_his_numbers()
    {
        $number = $this->number();

        $this->assertEquals(345882865, $number->value());
    }

    /** @test */
    public function return_the_value_of_his_numbers_as_string()
    {
        $number = $this->number();

        $this->assertEquals("345882865", $number->asString());
    }

    /**
     * @return \KataBank\Number
     */
    private function number()
    {
        $digits = [
            new Digit(3),
            new Digit(4),
            new Digit(5),
            new Digit(8),
            new Digit(8),
            new Digit(2),
            new Digit(8),
            new Digit(6),
            new Digit(5),
        ];
        $number = new Number($digits);

        return $number;
    }
}