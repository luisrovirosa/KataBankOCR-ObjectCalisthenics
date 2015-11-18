<?php

namespace KataBank\Test;

use KataBank\Digit;

class DigitShouldTest extends BaseTest
{

    /** @test */
    public function return_value_1()
    {
        $digit = new Digit($this->one());

        $this->assertEquals(1, $digit->value());
    }
}