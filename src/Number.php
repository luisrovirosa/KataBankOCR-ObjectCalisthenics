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
}