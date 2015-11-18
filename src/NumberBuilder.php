<?php

namespace KataBank;

class NumberBuilder
{
    /**
     * @param $fromPaper
     * @return Number
     */
    public function build($fromPaper)
    {
        $digits = [];
        for ($i = 0; $i < 9; $i++) {
            $digits[] = $this->digit($fromPaper, $i);
        }

        return new Number($digits);
    }

    /**
     * @param $fromPaper
     * @param $position
     * @return string
     */
    private function digitText($fromPaper, $position)
    {
        $number = '';
        $lines = explode("\n", $fromPaper);
        foreach ($lines as $line) {
            $number .= substr($line, $position * 3, 3);
        }

        return $number;
    }

    /**
     * @param $fromPaper
     * @param $i
     * @return Number
     */
    private function digit($fromPaper, $i)
    {
        $text = $this->digitText($fromPaper, $i);
        $digit = new Digit($text);

        return $digit;
    }
}