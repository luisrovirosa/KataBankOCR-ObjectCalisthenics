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

    /** @test */
    public function return_value_4()
    {
        $this->assertEquals(4, $this->four()->value());
    }

    /** @test */
    public function return_value_5()
    {
        $this->assertEquals(5, $this->five()->value());
    }

    /** @test */
    public function return_value_6()
    {
        $this->assertEquals(6, $this->six()->value());
    }

    /** @test */
    public function return_value_7()
    {
        $this->assertEquals(7, $this->seven()->value());
    }
}