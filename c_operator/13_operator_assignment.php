<?php
/*
%a = 0;

$a = $a + 10; --> $a += 10;
$a = $a - 10; --> $a -= 10;
$a = $a * 10; --> $a *= 10;
$a = $a / 10; --> $a /= 10;
$a = $a % 10; --> $a %= 10;
$a = $a . "Halo"; --> $a .= "Dunia";     Gabungkan string dan simpam
*/

$a = 0;

$a += 10;
var_dump($a);

$a -= 11;
var_dump($a);

$a *= 5;
var_dump($a);

$a /= 0.5;
var_dump($a);

$a %= 5;
var_dump($a);

$b = "Putra";
$b .= " Dae";
var_dump($b);