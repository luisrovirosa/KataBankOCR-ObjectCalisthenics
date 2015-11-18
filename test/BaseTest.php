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
     * @return string
     */
    protected function one()
    {
        return
            "   " .
            "  |" .
            "  |" .
            "   ";
    }

    /**
     * @return Digit
     */
    protected function two()
    {
        return
            " _ " .
            " _|" .
            "|_ " .
            "   ";
    }

    /**
     * @return Digit
     */
    protected function three()
    {
        return
            " _ " .
            " _|" .
            " _|" .
            "   ";
    }

    /**
     * @return Digit
     */
    protected function four()
    {
        return
            "   " .
            "|_|" .
            "  |" .
            "   ";
    }

    /**
     * @return Digit
     */
    protected function five()
    {
        return
            " _ " .
            "|_ " .
            " _|" .
            "   ";
    }

    /**
     * @return Digit
     */
    protected function six()
    {
        return
            " _ " .
            "|_ " .
            "|_|" .
            "   ";
    }

    /**
     * @return Digit
     */
    protected function seven()
    {
        return
            " _ " .
            "  |" .
            "  |" .
            "   ";
    }

    /**
     * @return Digit
     */
    protected function eight()
    {
        return
            " _ " .
            "|_|" .
            "|_|" .
            "   ";
    }

    /**
     * @return Digit
     */
    protected function nine()
    {
        return
            " _ " .
            "|_|" .
            " _|" .
            "   ";
    }

    /**
     * @return Digit
     */
    protected function zero()
    {
        return
            " _ " .
            "| |" .
            "|_|" .
            "   ";
    }
}