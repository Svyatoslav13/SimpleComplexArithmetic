<?php

namespace Numbers;

use Exception;
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

    public static function times(Complex $num1, Complex $num2): Complex
    {
        $re_part = $num1->getRe() * $num2->getRe() - $num1->getIm() * $num2->getIm();
        $im_part = $num1->getRe() * $num2->getIm() + $num1->getIm() * $num2->getRe();

        return new Complex($re_part, $im_part);
    }

    public static function divide(Complex $num1, Complex $num2): Complex
    {
        $re1 = $num1->getRe();
        $im1 = $num1->getIm();
        $re2 = $num2->getRe();
        $im2 = $num2->getIm();

        $denominator = $re2 * $re2 + $im2 * $im2;

        if ($denominator == 0) {
            throw new Exception('Zero in denominator');
        }

        $numenator1 = $re1 * $re2 + $im1 * $im2;
        $numenator2 = $im1 * $re2 - $re1 * $im2;

        return new Complex($numenator1/$denominator, $numenator2/$denominator);
    }

    public static function diff(Complex $num1, Complex $num2): Complex
    {
        return new Complex(
            $num1->getRe() - $num2->getRe(),
            $num1->getIm() - $num2->getIm()
        );
    }
}