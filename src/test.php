<?php

require_once '../vendor/autoload.php';

use Numbers\Complex;
use Numbers\Operations;

try {
    $num1 = new Complex(2, -1);
    $num2 = new Complex(1, 1);
    
    $sum = Operations::sum($num1, $num2);
    $diff = Operations::diff($num1, $num2);
    $div = Operations::divide($num1, $num2);
    $times = Operations::times($num1, $num2);
    
    echo 'num1: ', $num1 . "\n";
    echo 'num2: ', $num2 . "\n";
    
    echo "\n";
    
    echo 'sum: ', $sum, "\n";
    echo 'diff: ', $diff, "\n";
    echo 'div: ', $div, "\n";
    echo 'times: ', $times, "\n";
} catch (Throwable $ex) {
    var_dump([
        'msg' => $ex->getMessage(),
        'trace' => $ex->getTrace(),
        'file' => $ex->getFile(),
        'line' => $ex->getLine()
    ]);
}
