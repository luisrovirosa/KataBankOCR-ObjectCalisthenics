<?php

namespace KataBank;

class Number
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