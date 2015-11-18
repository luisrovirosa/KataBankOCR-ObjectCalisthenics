<?php

namespace KataBank\Test\Acceptance;

use KataBank\Test\BaseTest;

class UseCase1ShouldTest extends BaseTest
{

    /**
     * @dataProvider numbers
     * @test
     */
    public function find_the_number($expectedNumber, $text)
    {
        $ocr = $this->realOcr();

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

        return [
            ["000000000", $allZeros]
        ];
    }
}