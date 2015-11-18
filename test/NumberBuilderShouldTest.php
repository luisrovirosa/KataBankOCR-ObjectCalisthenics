<?php

namespace KataBank\Test;

use KataBank\NumberBuilder;

class NumberBuilderShouldTest extends BaseTest
{
    /** @test */
    public function return_number()
    {
        $number = $this->number();

        $this->assertInstanceOf('KataBank\Number', $number);
    }

    /** @test */
    public function return_9_digits()
    {
        $number = $this->number();

        $this->assertCount(9, $number->digits());
    }

    /** @test */
    public function return_the_first_number_as_one()
    {
        $number = $this->number();

        $digits = $number->digits();
        $this->assertEquals($this->one(), $digits[0]);
    }

    /** @test */
    public function return_the_second_number_as_two()
    {
        $number = $this->number();
        $digits = $number->digits();

        $this->assertEquals($this->two(), $digits[1]);
    }

    /**
     * @return \KataBank\Number
     */
    private function number()
    {
        $builder = new NumberBuilder();
        $numbers = $builder->build($this->validInput());

        return $numbers;
    }

}