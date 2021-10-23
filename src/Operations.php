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

    public static function times(Complex $num1, Complex $num2)
    {
        $re_part = $num1->getRe() * $num2->getRe() - $num1->getIm() * $num2->getIm();
        $im_part = $num1->getRe() * $num2->getIm() + $num1->getIm() * $num2->getRe();

        return new Complex($re_part, $im_part);
    }
}