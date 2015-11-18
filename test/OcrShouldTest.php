<?php

namespace KataBank\Test;

use KataBank\DigitBuilder;
use KataBank\NumberBuilder;
use KataBank\Ocr;

class OcrShouldTest extends BaseTest
{
    /** @test */
    public function recognise_123456789_correctly_written()
    {
        $digitBuilder = new DigitBuilder();
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