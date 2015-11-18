<?php

namespace KataBank\Test;

use KataBank\Number;

abstract class BaseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return string
     */
    protected function validInput()
    {
        $fromPaper =
            "    _  _     _  _  _  _  _ \n" .
            "  | _| _||_||_ |_ | ||_||_|\n" .
            "  ||_  _|  | _||_|  ||_| _|\n" .
            "                          ";

        return $fromPaper;
    }

    /**
     * @return Number
     */
    protected function one()
    {
        return new Number("     |  |   ");
    }
}