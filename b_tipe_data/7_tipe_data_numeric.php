<?php
// Numerik terbagi menjadi 2:

// Integer  -> Bilangan bulat
$bilPositif = 4;
$bilNegatif = -10;
$nol = 0;

echo $bilPositif . "\n";
echo $bilNegatif . "\n";
echo $nol . "\n";

// Float (atau double)  -> Bilangan desimal
$pi = 3.14;
$setengah = 0.5;

echo $pi . "\n";
echo $setengah . "\n";

var_dump($bilPositif, $pi);

// Di PHP 8+, bilangan besar otomatis menjadi tipe FLOAT jika melebih batas Integer.


// Nilai numerik bisa ditulis dalam decimal, biner, octal atau heksadecimal
$a = 42;        // Decimal      (biasa)
$b = 0b101010;  // Biner        (0b prefix)
$c = 052;       // Octal        (0 prefix)
$d = 0x2A;      // Heksadecimal (0x prefix)
var_dump($a, $b, $c, $d);


/* Fungsi numerik Penting
- is_int($var)              : Cek apakah integer
- is_float($var)            : Cek apakah integer
- is_numeric($var)          : Cek apakah numerik (string numeric juga true)
- round($angka, $presisi)   : Pembulatan dengan presisi
- ceil($angka)              : Pembulatan ke atas
- floor($angka)             : Pembulatan ke bawah
*/ 

var_dump(is_int($a));
var_dump(is_float($a));
var_dump(is_numeric($a));

echo round(1.4) . "\n";
echo round(1.5) . "\n";
echo round(3.1456789, 3) . "\n";
echo ceil(9.2) . "\n";
echo floor(4.9) . "\n";