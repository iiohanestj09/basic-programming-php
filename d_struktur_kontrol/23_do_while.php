<?php
/*
do {
...
} while (kondisi)
*/

// Karakteristik dari do..while ini akan eksekusi sekali walau kondisi awalnya sudah false

$i = 10;
do {
    echo "Angka: ". $i. "\n";
    $i++;           // jangan lupa perubahannya
} while ($i <= 5);

$j = false;
do {
    echo "Haloo\n";
} while ($j == true);