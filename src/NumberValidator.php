<?php

namespace KataBank;

class NumberValidator
{
    /**
     * @param \KataBank\Number $number
     * @throws NumberNotValidException
     */
    public function validate(Number $number)
    {
        if (!$this->hasValidChecksum($number)) {
            throw new NumberNotValidException();
        }
    }

    /**
     * @param \KataBank\Number $number
     * @return bool
     */
    private function hasValidChecksum(Number $number)
    {
        return ($this->checksum($number) % 11) === 0;
    }

    /**
     * @param \KataBank\Number $number
     * @return int
     */
    private function checksum(Number $number)
    {
        $checksum = 0;
        $numberOfDigit = count($number->digits());
        foreach ($number->digits() as $digit) {
            $checksum += $numberOfDigit * $digit->value();
            $numberOfDigit--;
        }

        return $checksum;
    }
}