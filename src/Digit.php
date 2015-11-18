<?php

namespace KataBank;

class Digit
{
    /** @var string */
    private $value;

    /**
     * Number constructor.
     * @param $intValue
     */
    public function __construct($intValue)
    {
        $this->value = $intValue;
    }

    public static function fromString($fromString)
    {
        $matched = static::matchedNumbers($fromString, static::numbers());

        $indexes = array_keys($matched);

        return new Digit(array_shift($indexes));
    }

    public function value()
    {
        return $this->value;
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