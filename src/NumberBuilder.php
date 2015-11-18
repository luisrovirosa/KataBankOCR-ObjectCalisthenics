<?php

namespace KataBank;

class NumberBuilder
{
    const CHARACTER_PER_NUMBER = 3;
    const LINES_PER_NUMBER = 4;
    /** @var  DigitBuilder */
    private $digitBuilder;

    /**
     * NumberBuilder constructor.
     * @param DigitBuilder $digitBuilder
     */
    public function __construct(DigitBuilder $digitBuilder)
    {
        $this->digitBuilder = $digitBuilder;
    }

    /**
     * @param $fromPaper
     * @return Number
     */
    public function build($fromPaper)
    {
        $digits = [];
        $numberOfDigits = (int) ((strlen($fromPaper) - 1) /
            self::CHARACTER_PER_NUMBER / self::LINES_PER_NUMBER);
        for ($i = 0; $i < $numberOfDigits; $i++) {
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
            $number .= substr(
                $line, $position * self::CHARACTER_PER_NUMBER,
                self::CHARACTER_PER_NUMBER
            );
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

        return $this->digitBuilder->build($text);
    }
}