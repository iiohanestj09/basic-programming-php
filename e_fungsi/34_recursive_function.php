<?php

function factorial1($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial1($n - 1);
    }
}

function factorial2($n) {
    if ($n === 0 || $n === 1) return 1;
    else return $n * factorial2($n - 1);
}

function factorial3($n) {
    return ($n === 0 || $n === 1)? 1 : $n * factorial3($n - 1);
}

$factorial4 = function($n) use (&$factorial4) { return ($n === 0 || $n === 1)? 1 : $n * $factorial4($n - 1); };

echo factorial1(5) . "\n";
echo factorial2(5) . "\n";
echo factorial3(5) . "\n";
echo $factorial4(5) . "\n";