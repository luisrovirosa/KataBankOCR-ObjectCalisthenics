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
            "  | _| _||_||_ |_   ||_||_|\n" .
            "  ||_  _|  | _||_|  ||_| _|\n" .
            "                           ";

        return $fromPaper;
    }

    /**
     * @return Digit
     */
    protected function one()
    {
        return Digit::fromString(
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
        return Digit::fromString(
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
        return Digit::fromString(
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
        return Digit::fromString(
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
        return Digit::fromString(
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
        return Digit::fromString(
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
        return Digit::fromString(
            " _ " .
            "  |" .
            "  |" .
            "   "
        );
    }

    /**
     * @return Digit
     */
    protected function eight()
    {
        return Digit::fromString(
            " _ " .
            "|_|" .
            "|_|" .
            "   "
        );
    }

    /**
     * @return Digit
     */
    protected function nine()
    {
        return Digit::fromString(
            " _ " .
            "|_|" .
            " _|" .
            "   "
        );
    }

    /**
     * @return Digit
     */
    protected function zero()
    {
        return Digit::fromString(
            " _ " .
            "| |" .
            "|_|" .
            "   "
        );
    }
}