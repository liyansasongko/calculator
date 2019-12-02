<?php

namespace liyansasongko\Calculator;

class CalculatorClass
{

    private $number1;
    private $number2;


    /**
     * Create a new Skeleton Instance.
     */
    public function __construct(int $number1, int $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    /**
     * Friendly welcome.
     *
     * @param string $phrase Phrase to return
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }

    public function addition($this->number1, $this->number2)
    {
        return $this->number1 + $this->number2;
    }
}
