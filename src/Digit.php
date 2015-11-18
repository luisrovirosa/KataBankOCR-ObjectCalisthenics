<?php

namespace KataBank;

class Digit
{
    /** @var string */
    private $value;

    /**
     * Number constructor.
     * @param $fromString
     */
    public function __construct($fromString)
    {
        $this->value = $fromString;
    }

    public function value()
    {
        $matched = $this->matchedNumbers($this->numbers());

        $indexes = array_keys($matched);

        return array_shift($indexes);
    }

    private function numbers()
    {

        return [
            $this->zero(),
            $this->one(),
            $this->two(),
            $this->three(),
            $this->four(),
            $this->five(),
            $this->six(),
            $this->seven(),
            $this->eight(),
            $this->nine()
        ];
    }

    /**
     * @param $numbers
     * @return array
     */
    private function matchedNumbers($numbers)
    {
        return array_filter(
            $numbers,
            function ($number) {
                return $this->value == $number;
            }
        );
    }

    /**
     * @return string
     */
    private function zero()
    {
        return
            " _ " .
            "| |" .
            "|_|" .
            "   ";
    }

    /**
     * @return string
     */
    private function one()
    {
        return
            "   " .
            "  |" .
            "  |" .
            "   ";
    }

    /**
     * @return string
     */
    private function two()
    {
        return
            " _ " .
            " _|" .
            "|_ " .
            "   ";
    }

    /**
     * @return string
     */
    private function three()
    {
        return
            " _ " .
            " _|" .
            " _|" .
            "   ";
    }

    /**
     * @return string
     */
    private function four()
    {
        return
            "   " .
            "|_|" .
            "  |" .
            "   ";
    }

    /**
     * @return string
     */
    private function five()
    {
        return
            " _ " .
            "|_ " .
            " _|" .
            "   ";
    }

    /**
     * @return string
     */
    private function six()
    {
        return
            " _ " .
            "|_ " .
            "|_|" .
            "   ";
    }

    /**
     * @return string
     */
    private function seven()
    {
        return
            " _ " .
            "  |" .
            "  |" .
            "   ";
    }

    /**
     * @return string
     */
    private function eight()
    {
        return
            " _ " .
            "|_|" .
            "|_|" .
            "   ";
    }

    /**
     * @return string
     */
    private function nine()
    {
        return
            " _ " .
            "|_|" .
            " _|" .
            "   ";
    }
}