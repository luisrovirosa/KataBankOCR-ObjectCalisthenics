<?php

namespace KataBank\Test;

class DigitShouldTest extends BaseTest
{

    /** @test */
    public function return_value_1()
    {
        $this->assertEquals(1, $this->one()->value());
    }

    /** @test */
    public function return_value_2()
    {
        $this->assertEquals(2, $this->two()->value());
    }

    /** @test */
    public function return_value_3()
    {
        $this->assertEquals(3, $this->three()->value());
    }
}