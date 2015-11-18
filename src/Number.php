<?php

namespace KataBank;

class Number
{
    /**
     * @var Digit[]
     */
    private $digits;

    /** @var  int */
    private $value;

    /** @var  string */
    private $string;

    /**
     * Number constructor.
     * @param Digit[] $digits
     */
    public function __construct($digits)
    {
        $this->digits = $digits;
        $this->value = $this->calculateValue();
        $this->string = $this->calculateString();
    }

    /**
     * @return Digit[]
     */
    public function digits()
    {
        return $this->digits;
    }

    /**
     * @return int
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function asString()
    {
        return $this->string;
    }

    private function calculateValue()
    {
        $result = 0;
        foreach ($this->digits as $digit) {
            $result = $result * 10 + $digit->value();
        }

        return $result;
    }

    private function calculateString()
    {
        return array_reduce(
            $this->digits,
            function ($carry, Digit $digit) {
                return $carry . $digit->value();
            }
        );
    }

}