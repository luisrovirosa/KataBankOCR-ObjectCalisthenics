<?php

namespace KataBank;

class Digit
{
    private $value;

    /**
     * Number constructor.
     * @param $fromString
     */
    public function __construct($fromString)
    {
        $this->value = $fromString;
    }
}