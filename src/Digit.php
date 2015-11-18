<?php

namespace KataBank;

class Digit
{
    /** @var int */
    private $value;

    /**
     * Number constructor.
     * @param $intValue
     */
    public function __construct($intValue)
    {
        $this->value = $intValue;
    }

    /**
     * @return int
     */
    public function value()
    {
        return $this->value;
    }

}