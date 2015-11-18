<?php

namespace KataBank\Test;

use KataBank\DigitBuilder;
use KataBank\NumberBuilder;
use KataBank\NumberValidator;
use KataBank\Ocr;
use KataBank\TextDigits;
use Prophecy\Argument;
use Prophecy\Prophecy\ObjectProphecy;

class OcrShouldTest extends BaseTest
{
    /** @var  ObjectProphecy */
    private $numberBuilderProphecy;

    /** @var  ObjectProphecy */
    private $numberValidatorProphecy;

    /** @var  \KataBank\Number */
    private $builtNumber;

    protected function setUp()
    {
        parent::setUp();
        $this->numberBuilderProphecy = $this->prophesize('KataBank\NumberBuilder');
        $this->builtNumber = new \KataBank\Number([]);
        $this->numberBuilderProphecy->build(Argument::any())->willReturn($this->builtNumber);

        $this->numberValidatorProphecy = $this->prophesize('KataBank\NumberValidator');
    }

    /** @test */
    public function recognise_123456789_correctly_written()
    {
        $ocr = $this->realOcr();

        $number = $ocr->read($this->validInput());

        $this->assertEquals(123456789, $number->value());
    }

    /** @test */
    public function use_number_builder()
    {
        $ocr = $this->ocr();
        $ocr->read($this->validInput());

        $this->numberBuilderProphecy->build($this->validInput())->shouldHaveBeenCalled();
    }

    /** @test */
    public function use_number_validator()
    {
        $ocr = $this->ocr();

        $ocr->read($this->validInput());

        $this->numberValidatorProphecy->validate($this->builtNumber)->shouldHaveBeenCalled();
    }

    /**
     * @return Ocr
     */
    private function realOcr()
    {
        $textDigits = new TextDigits();
        $digitBuilder = new DigitBuilder($textDigits);
        $numberBuilder = new NumberBuilder($digitBuilder);
        $validator = new NumberValidator();
        $ocr = new Ocr($numberBuilder, $validator);

        return $ocr;
    }

    /**
     * @return NumberBuilder
     */
    private function builder()
    {
        return $this->numberBuilderProphecy->reveal();
    }

    /**
     * @return NumberValidator
     */
    private function numberValidator()
    {
        return $this->numberValidatorProphecy->reveal();
    }

    /**
     * @return Ocr
     */
    private function ocr()
    {
        return new Ocr($this->builder(), $this->numberValidator());
    }

}