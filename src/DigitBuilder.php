<?php

namespace KataBank;

class DigitBuilder
{

    public function build($digitString)
    {
        $matched = static::matchedNumbers($digitString, static::numbers());

        $indexes = array_keys($matched);

        return new Digit(array_shift($indexes));
    }

    private static function numbers()
    {

        return [
            TextDigits::zero(),
            TextDigits::one(),
            TextDigits::two(),
            TextDigits::three(),
            TextDigits::four(),
            TextDigits::five(),
            TextDigits::six(),
            TextDigits::seven(),
            TextDigits::eight(),
            TextDigits::nine()
        ];
    }

    /**
     * @param $numbers
     * @return array
     */
    private static function matchedNumbers($fromString, $numbers)
    {
        return array_filter(
            $numbers,
            function ($number) use ($fromString) {
                return $fromString == $number;
            }
        );
    }
}