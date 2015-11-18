<?php

namespace KataBank\Test;

use KataBank\DigitBuilder;
use KataBank\NumberBuilder;
use KataBank\Ocr;
use KataBank\TextDigits;

class OcrShouldTest extends BaseTest
{
    /** @test */
    public function recognise_123456789_correctly_written()
    {
        $textDigits = new TextDigits();
        $digitBuilder = new DigitBuilder($textDigits);
        $numberBuilder = new NumberBuilder($digitBuilder);
        $ocr = new Ocr($numberBuilder);

        $number = $ocr->read($this->validInput());

        $this->assertEquals(123456789, $number->value());
    }

    /** @test */
    public function use_number_builder()
    {

        $numberBuilderProphecy = $this->prophesize('KataBank\NumberBuilder');
        /** @var NumberBuilder $builder */
        $builder = $numberBuilderProphecy->reveal();
        $ocr = new Ocr($builder);

        $ocr->read($this->validInput());

        $numberBuilderProphecy->build($this->validInput())->shouldHaveBeenCalled();
    }

}