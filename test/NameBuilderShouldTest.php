<?php

namespace KataBank\Test;

use KataBank\NumberBuilder;

class NameBuilderShouldTest extends BaseTest
{
    /** @test */
    public function return_9_values()
    {
        $numbers = $this->numbers();

        $this->assertCount(9, $numbers);
    }

    /**
     * @return array
     */
    private function numbers()
    {
        $builder = new NumberBuilder();
        $numbers = $builder->build($this->validInput());

        return $numbers;
    }
}