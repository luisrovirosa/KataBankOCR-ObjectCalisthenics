<?php

namespace KataBank;

class Ocr
{
    /**
     * @var NumberBuilder
     */
    private $builder;

    /**
     * Ocr constructor.
     * @param NumberBuilder $builder
     */
    public function __construct(NumberBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * @param $fromPaper
     * @return \KataBank\Number
     */
    public function read($fromPaper)
    {
        return $this->builder->build($fromPaper);
    }
}