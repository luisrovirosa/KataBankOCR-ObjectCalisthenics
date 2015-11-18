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

    /**
     * Number constructor.
     * @param Digit[] $digits
     */
    public function __construct($digits)
    {
        $this->digits = $digits;
        $this->value = $this->calculateValue();
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

    private function calculateValue()
    {
        $result = 0;
        foreach ($this->digits as $digit) {
            $result = $result * 10 + $digit->value();
        }

        return $result;
    }

}