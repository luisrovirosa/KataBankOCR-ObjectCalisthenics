<?php

namespace KataBank\Test;

use KataBank\Digit;
use KataBank\DigitBuilder;

class DigitBuilderShouldTest extends BaseTest
{
    /** @var  DigitBuilder */
    private $digitBuilder;

    protected function setUp()
    {
        parent::setUp();
        $this->digitBuilder = new DigitBuilder();
    }

    /**
     * @dataProvider intAndStringNumbers
     * @test
     */
    public function test_all_digits($intValue, $stringValue)
    {
        $digit = $this->digitBuilder->build($stringValue);
        $this->assertEquals(new Digit($intValue), $digit, $intValue);
    }

    public function intAndStringNumbers()
    {
        return [
            [1, $this->one()],
            [2, $this->two()],
            [3, $this->three()],
            [4, $this->four()],
            [5, $this->five()],
            [6, $this->six()],
            [7, $this->seven()],
            [8, $this->eight()],
            [9, $this->nine()],
            [0, $this->zero()],
        ];
    }

}