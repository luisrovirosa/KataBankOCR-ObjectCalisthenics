<?php

namespace KataBank;

class DigitBuilder
{
    /** @var  TextDigits */
    private $textDigits;

    /** @var  string[] */
    private $allDigits;

    /**
     * DigitBuilder constructor.
     * @param TextDigits $textDigits
     */
    public function __construct(TextDigits $textDigits)
    {
        $this->textDigits = $textDigits;
        $this->allDigits = $this->numbers();
    }

    public function build($digitString)
    {
        $matched = $this->matchedNumbers($digitString, $this->allDigits);
        $indexes = array_keys($matched);

        return new Digit(array_shift($indexes));
    }

    private function numbers()
    {

        return [
            $this->textDigits->zero(),
            $this->textDigits->one(),
            $this->textDigits->two(),
            $this->textDigits->three(),
            $this->textDigits->four(),
            $this->textDigits->five(),
            $this->textDigits->six(),
            $this->textDigits->seven(),
            $this->textDigits->eight(),
            $this->textDigits->nine()
        ];
    }

    /**
     * @param $fromString
     * @param $numbers
     * @return array
     */
    private function matchedNumbers($fromString, $numbers)
    {
        return array_filter(
            $numbers,
            function ($number) use ($fromString) {
                return $fromString == $number;
            }
        );
    }
}