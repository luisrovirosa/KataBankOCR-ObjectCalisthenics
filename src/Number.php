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
        $result = 0;
        foreach ($this->digits as $digit) {
            $result = $result * 10 + $digit->value();
        }

        return $result;
    }
}