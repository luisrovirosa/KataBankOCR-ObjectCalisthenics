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
            $result[] = new Number();
        }

        return $result;
    }
}