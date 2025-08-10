<?php
// 1. Membuat reference
$a = "Hai";
$b = &$a;       // $b mengacu pada memori yang sama dengan $a

echo $a . "\n";

$b = "Selamat Malam";    // saat $b berubah niali, $a juga ikut berubah karena keduanya memiliki memori yg sama
echo $a . "\n";


// 2. Pass by reference
function tambah1(&$nilai) {
    $nilai++;
} 
$c = 1;
tambah1($c);
echo $c . "\n";


// 3. Return by reference
function &getValue() {
    static $nilai = 10;
    return $nilai;
}

$ref = &getValue();         // Ambil reference
echo getValue() . "\n";

$ref = 20;                  // Ubah nilai lewat reference
echo getValue() . "\n";