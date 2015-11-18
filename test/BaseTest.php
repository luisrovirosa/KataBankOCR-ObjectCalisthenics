<?php

namespace KataBank\Test;

use KataBank\Digit;

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
     * @return Digit
     */
    protected function one()
    {
        return new Digit(
            "   " .
            "  |" .
            "  |" .
            "   "
        );
    }

    /**
     * @return Digit
     */
    protected function two()
    {
        return new Digit(
            " _ " .
            " _|" .
            "|_ " .
            "   "
        );
    }

    /**
     * @return Digit
     */
    protected function three()
    {
        return new Digit(
            " _ " .
            " _|" .
            " _|" .
            "   "
        );
    }

    /**
     * @return Digit
     */
    protected function four()
    {
        return new Digit(
            "   " .
            "|_|" .
            "  |" .
            "   "
        );
    }

    /**
     * @return Digit
     */
    protected function five()
    {
        return new Digit(
            " _ " .
            "|_ " .
            " _|" .
            "   "
        );
    }

    /**
     * @return Digit
     */
    protected function six()
    {
        return new Digit(
            " _ " .
            "|_ " .
            "|_|" .
            "   "
        );
    }

    /**
     * @return Digit
     */
    protected function seven()
    {
        return new Digit(
            " _ " .
            "  |" .
            "  |" .
            "   "
        );
    }
}