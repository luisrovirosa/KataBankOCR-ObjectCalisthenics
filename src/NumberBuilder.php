<?php

namespace KataBank;

class NumberBuilder
{
    /**
     * @param $fromPaper
     * @return array
     */
    public function build($fromPaper)
    {
        $result = [];
        for ($i = 0; $i < 9; $i++) {
            $text = $this->numberText($fromPaper, $i);
            $result[] = new Number($text);
        }

        return $result;
    }

    /**
     * @param $lines
     * @return string
     */
    private function numberText($fromPaper, $position)
    {
        $number = '';
        $lines = explode("\n", $fromPaper);
        foreach ($lines as $line) {
            $number .= substr($line, 0, 3);
        }

        return $number;
    }
}