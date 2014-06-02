<?php
namespace Example1\JobBundle\Utility;
use Example1\JobBundle\Utility\CalculatorInterface;

class Calculator implements CalculatorInterface{
    public function add($a, $b){
        return $a+$b;
    }
}

