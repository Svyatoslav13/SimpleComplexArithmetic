<?php

namespace Numbers;

class Complex
{
    private $im;
    private $re;

    public function __construct(?int $re, ?int $im)
    {
        $this->re = $re ?? 0;
        $this->im = $im ?? 0;
    }

    public function getRe()
    {
        return $this->re;
    }

    public function getIm()
    {
        return $this->im;
    }

    public function __toString()
    {
        return "{$this->re} + i*({$this->im})";
    }
}