<?php

namespace Numbers;

use Numbers\Complex;

// static class
class Operations
{
    public static function sum(Complex $num1, Complex $num2): Complex
    {
        return new Complex(
            $num1->getRe() + $num2->getRe(),
            $num1->getIm() + $num2->getIm()
        );
    }
}