<?php
// Arrow function adalah bentuk singkat dari anonymous function 

// 1. Contoh
$multiply = fn($a, $b) => $a * $b;
echo $multiply(3, 4) . "\n";


// 2. Menggunakan variabel dari global scope 
// Anonymous function akan otomatis dpt menggunakan global scope tanpa 'use'
$eksponen = 2;
$squareRoot = fn($basis) => $basis ** $eksponen;
echo $squareRoot(3) . "\n";