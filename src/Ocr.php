<?php

namespace KataBank;

class Ocr
{
    /**
     * @var NumberBuilder
     */
    private $builder;
    /**
     * @var NumberValidator
     */
    private $validator;

    /**
     * Ocr constructor.
     * @param NumberBuilder $builder
     * @param NumberValidator $validator
     */
    public function __construct(NumberBuilder $builder, NumberValidator $validator)
    {
        $this->builder = $builder;
        $this->validator = $validator;
    }

    /**
     * @param $fromPaper
     * @return \KataBank\Number
     */
    public function read($fromPaper)
    {
        $number = $this->builder->build($fromPaper);
        $this->validator->validate($number);

        return $number;
    }
}