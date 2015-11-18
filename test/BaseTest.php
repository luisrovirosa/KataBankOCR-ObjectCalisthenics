<?php

namespace KataBank\Test;

abstract class BaseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return string
     */
    protected function validInput()
    {
        $fromPaper =
            "   _  _     _  _  _  _  _ " .
            " | _| _||_||_ |_ | ||_||_|" .
            " ||_  _|  | _||_|  ||_| _|" .
            "                          ";

        return $fromPaper;
    }
}