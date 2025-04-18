<?php

namespace App\Service;
//calculator va servir à prendre les paramètres et à faire le calcule.
class Calculator
{
    public int $num1;
    public int $num2;
    public string $operation;

    public function __construct( int $num1, int $num2, string $operation )
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operation = $operation;
    }

    public function getResult() : float
    {
        switch($this->operation){
            case "+":
                return $this->num1 + $this->num2;
            case "-":
                return $this->num1 - $this->num2;
            case "*":
                return $this->num1 * $this->num2;
            default:
                return $this->num1 / $this->num2;
        }
    }
}