<?php

namespace KataBank;

class Number
{
    /**
     * @var Digit[]
     */
    private $digits;

    /**
     * Number constructor.
     * @param Digit[] $digits
     */
    public function __construct($digits)
    {
        $this->digits = $digits;
    }

    public function digits()
    {
        return $this->digits;
    }

    public function value()
    {
        $result = 0;
        foreach ($this->digits as $digit) {
            $result = $result * 10 + $digit->value();
        }

        return $result;
    }
}