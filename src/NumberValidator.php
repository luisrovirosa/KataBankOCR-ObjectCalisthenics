<?php

namespace KataBank;

class NumberValidator
{
    public function validate(Number $number)
    {
        $checksum = 0;
        $numberOfDigit = count($number->digits());
        foreach ($number->digits() as $digit) {
            $checksum += $numberOfDigit * $digit->value();
            $numberOfDigit--;
        }
        if (($checksum % 11) !== 0) {
            throw new NumberNotValidException();
        }
    }
}