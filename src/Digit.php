<?php

namespace KataBank;

class Digit
{
    /** @var string */
    private $value;

    /**
     * Number constructor.
     * @param $fromString
     */
    public function __construct($fromString)
    {
        $this->value = $fromString;
    }

    public function value()
    {
        $matched = $this->matchedNumbers($this->numbers());

        $indexes = array_keys($matched);

        return array_shift($indexes) + 1;
    }

    private function numbers()
    {
        $numbers = [
            "   " .
            "  |" .
            "  |" .
            "   ",
            " _ " .
            " _|" .
            "|_ " .
            "   ",
            " _ " .
            " _|" .
            " _|" .
            "   ",
            "   " .
            "|_|" .
            "  |" .
            "   ",
            " _ " .
            "|_ " .
            " _|" .
            "   ",
            " _ " .
            "|_ " .
            "|_|" .
            "   ",
            " _ " .
            "  |" .
            "  |" .
            "   ",
            " _ " .
            "|_|" .
            "|_|" .
            "   "

        ];

        return $numbers;
    }

    /**
     * @param $numbers
     * @return array
     */
    private function matchedNumbers($numbers)
    {
        return array_filter(
            $numbers,
            function ($number) {
                return $this->value == $number;
            }
        );
    }
}