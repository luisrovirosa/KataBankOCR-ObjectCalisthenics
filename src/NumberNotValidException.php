<?php

namespace KataBank;

class NumberNotValidException extends \Exception
{

    /**
     * NumberNotValidException constructor.
     */
    public function __construct()
    {
        parent::__construct('The number does not pass the checksum validation');
    }
}