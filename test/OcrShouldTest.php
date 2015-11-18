<?php

namespace KataBank\Test;

use KataBank\NumberBuilder;
use KataBank\Ocr;

class OcrShouldTest extends BaseTest
{
    /** @test */
    public function recognise_123456789_correctly_written()
    {
        $this->markTestIncomplete('Not yet');
        $ocr = new Ocr(new NumberBuilder());

        $number = $ocr->read(
            "   _  _     _  _  _  _  _ " .
            " | _| _||_||_ |_ | ||_||_|" .
            " ||_  _|  | _||_|  ||_| _|" .
            "                          "
        );

        $this->assertEquals(123456789, $number);
    }

    /** @test */
    public function use_number_builder()
    {

        $numberBuilderProphecy = $this->prophesize('KataBank\NumberBuilder');
        /** @var NumberBuilder $builder */
        $builder = $numberBuilderProphecy->reveal();
        $ocr = new Ocr($builder);

        $fromPaper = "   _  _     _  _  _  _  _ " .
            " | _| _||_||_ |_ | ||_||_|" .
            " ||_  _|  | _||_|  ||_| _|" .
            "                          ";

        $ocr->read($fromPaper);

        $numberBuilderProphecy->build($fromPaper)->shouldHaveBeenCalled();
    }
}