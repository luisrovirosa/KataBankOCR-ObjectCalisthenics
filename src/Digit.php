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

    public function value()
    {
        return $this->value;
    }

}