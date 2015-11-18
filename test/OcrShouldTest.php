<?php

namespace KataBank\Test;

use KataBank\Ocr;

class OcrShouldTest extends BaseTest
{
    /** @test */
    public function recognise_123456789_correctly_written()
    {
        $this->markTestIncomplete('Not yet');
        $ocr = new Ocr();

        $number = $ocr->read(
            "   _  _     _  _  _  _  _ " .
            " | _| _||_||_ |_ | ||_||_|" .
            " ||_  _|  | _||_|  ||_| _|" .
            "                          "
        );

        $this->assertEquals(123456789, $number);
    }

}