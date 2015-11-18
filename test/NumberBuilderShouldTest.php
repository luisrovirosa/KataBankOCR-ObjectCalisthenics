<?php

namespace KataBank\Test;

use KataBank\Digit;
use KataBank\DigitBuilder;
use KataBank\NumberBuilder;
use KataBank\TextDigits;

class NumberBuilderShouldTest extends BaseTest
{
    /** @test */
    public function return_number()
    {
        $number = $this->number();

        $this->assertInstanceOf('KataBank\Number', $number);
    }

    /** @test */
    public function use_digit_builder()
    {
        $digitBuilderProphecy = $this->prophesize('KataBank\DigitBuilder');
        $digitBuilderProphecy->build($this->one())->willReturn(new Digit(1));
        /** @var DigitBuilder $digitBuilder */
        $digitBuilder = $digitBuilderProphecy->reveal();
        $numberBuilder = new NumberBuilder($digitBuilder);

        $one =
            "   \n" .
            "  |\n" .
            "  |\n" .
            "   \n";
        $numberBuilder->build($one);

        $digitBuilderProphecy->build($this->one())->shouldHaveBeenCalled();
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
        $this->assertEquals(new Digit(1), $digits[0]);
    }

    /** @test */
    public function return_the_second_number_as_two()
    {
        $number = $this->number();
        $digits = $number->digits();

        $this->assertEquals(new Digit(2), $digits[1]);
    }

    /**
     * @return \KataBank\Number
     */
    private function number()
    {
        $digitBuilder = new DigitBuilder(new TextDigits());
        $numberBuilder = new NumberBuilder($digitBuilder);
        $numbers = $numberBuilder->build($this->validInput());

        return $numbers;
    }

}