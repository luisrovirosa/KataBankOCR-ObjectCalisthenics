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
        $allFour =
            "                           \n" .
            "|_||_||_||_||_||_||_||_||_|\n" .
            "  |  |  |  |  |  |  |  |  |\n" .
            "                           \n";
        $allFive =
            " _  _  _  _  _  _  _  _  _ \n" .
            "|_ |_ |_ |_ |_ |_ |_ |_ |_ \n" .
            " _| _| _| _| _| _| _| _| _|\n" .
            "                           \n";
        $allSix =
            " _  _  _  _  _  _  _  _  _ \n" .
            "|_ |_ |_ |_ |_ |_ |_ |_ |_ \n" .
            "|_||_||_||_||_||_||_||_||_|\n" .
            "                           \n";
        $allSeven =
            " _  _  _  _  _  _  _  _  _ \n" .
            "  |  |  |  |  |  |  |  |  |\n" .
            "  |  |  |  |  |  |  |  |  |\n" .
            "                           \n";
        $allEight =
            " _  _  _  _  _  _  _  _  _ \n" .
            "|_||_||_||_||_||_||_||_||_|\n" .
            "|_||_||_||_||_||_||_||_||_|\n" .
            "                           \n";
        $allNine =
            " _  _  _  _  _  _  _  _  _ \n" .
            "|_||_||_||_||_||_||_||_||_|\n" .
            " _| _| _| _| _| _| _| _| _|\n" .
            "                           \n";
        $oneTwoUntil9 =
            "    _  _     _  _  _  _  _ \n" .
            "  | _| _||_||_ |_   ||_||_|\n" .
            "  ||_  _|  | _||_|  ||_| _|\n" .
            "                           ";

        return [
            ["000000000", $allZeros],
            ["111111111", $allOnes],
            ["222222222", $allTwo],
            ["333333333", $allThree],
            ["444444444", $allFour],
            ["555555555", $allFive],
            ["666666666", $allSix],
            ["777777777", $allSeven],
            ["888888888", $allEight],
            ["999999999", $allNine],
            ["123456789", $oneTwoUntil9],
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