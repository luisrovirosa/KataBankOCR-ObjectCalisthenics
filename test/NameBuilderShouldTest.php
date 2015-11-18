<?php

namespace KataBank\Test;

use KataBank\NumberBuilder;

class NameBuilderShouldTest extends BaseTest
{
    /** @test */
    public function return_9_values()
    {
        $numbers = $this->numbers();

        $this->assertCount(9, $numbers);
    }

    /** @test */
    public function return_numbers()
    {
        $numbers = $this->numbers();

        foreach ($numbers as $number) {
            $this->assertInstanceOf('KataBank\Number', $number);
        }
    }

    /** @test */
    public function return_the_first_number_as_one()
    {
        $numbers = $this->numbers();

        $this->assertEquals($this->one(), $numbers[0]);
    }

    /** @test */
    public function return_the_second_number_as_two()
    {
        $numbers = $this->numbers();

        $this->assertEquals($this->two(), $numbers[1]);
    }

    /**
     * @return array
     */
    private function numbers()
    {
        $builder = new NumberBuilder();
        $numbers = $builder->build($this->validInput());

        return $numbers;
    }

}