<?php

namespace KataBank\Test\Acceptance;

use KataBank\DigitBuilder;
use KataBank\NumberBuilder;
use KataBank\NumberValidator;
use KataBank\Ocr;
use KataBank\Test\BaseTest;
use KataBank\TextDigits;

class UseCase1ShouldTest extends BaseTest
{

    /**
     * @dataProvider numbers
     * @test
     */
    public function find_the_number($expectedNumber, $text)
    {
        $ocr = $this->ocr();

        $number = $ocr->read($text);

        $this->assertEquals($expectedNumber, $number->asString(), $expectedNumber);
    }

    public function numbers()
    {
        $allZeros =
            " _  _  _  _  _  _  _  _  _ \n" .
            "| || || || || || || || || |\n" .
            "|_||_||_||_||_||_||_||_||_|\n" .
            "                           \n";
        $allOnes =
            "                           \n" .
            "  |  |  |  |  |  |  |  |  |\n" .
            "  |  |  |  |  |  |  |  |  |\n" .
            "                           \n";
        $allTwo =
            " _  _  _  _  _  _  _  _  _ \n" .
            " _| _| _| _| _| _| _| _| _|\n" .
            "|_ |_ |_ |_ |_ |_ |_ |_ |_ \n" .
            "                           \n";
        $allThree =
            " _  _  _  _  _  _  _  _  _ \n" .
            " _| _| _| _| _| _| _| _| _|\n" .
            " _| _| _| _| _| _| _| _| _|\n" .
            "                           \n";

        return [
            ["000000000", $allZeros],
            ["111111111", $allOnes],
            ["222222222", $allTwo],
            ["333333333", $allThree],
        ];
    }

    private function ocr()
    {
        $textDigits = new TextDigits();
        $digitBuilder = new DigitBuilder($textDigits);
        $numberBuilder = new NumberBuilder($digitBuilder);
        /** @var NumberValidator $validator */
        $validator = $this->prophesize('KataBank\NumberValidator')->reveal();
        $ocr = new Ocr($numberBuilder, $validator);

        return $ocr;
    }
}