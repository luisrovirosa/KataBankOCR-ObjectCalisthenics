<?php

namespace KataBank\Test;

use KataBank\Digit;
use KataBank\Number;
use KataBank\NumberValidator;

class NumberValidatorShouldTest extends BaseTest
{
    /** @test */
    public function do_noting_when_the_number_is_correct()
    {
        $validator = new NumberValidator();
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
        $validNumber = new Number($digits);
        $validator->validate($validNumber);
    }

    /** @test */
    public function throw_an_exception_when_the_number_is_not_correct()
    {
        $this->setExpectedException('KataBank\NumberNotValidException');
        $validator = new NumberValidator();
        $digits = [
            new Digit(3),
            new Digit(4),
            new Digit(5),
            new Digit(8),
            new Digit(8),
            new Digit(2),
            new Digit(8),
            new Digit(6),
            new Digit(6),
        ];
        $validNumber = new Number($digits);
        $validator->validate($validNumber);
    }
}