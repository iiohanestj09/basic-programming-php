<?php
// DI PHP, anonymous function disebut juga Closure

// 1. Contoh Anonymous Function sederhana
$sapa = function($nama) {
    echo "Halo, $nama" . "\n";
};
$sapa("Putra");


// 2. Anonymous function sebagai arguments
function penjumlahan($a, $b) {
    if (is_callable($b)) {
        $b = $b($a);            // panggil fungsi dengan argumen $a
    }
    echo ($a + $b) . "\n";
}

penjumlahan(2, function($n) {
    return $n ** 2;
});


// 3. Mengakses variabel luar dengan 'use'
$penyebut = 2;
$hasil1 = function($pembilang) use ($penyebut) {
    return $pembilang / $penyebut;
};
echo $hasil1(8) . "\n";


// 4. Anonymous Function yang mengembalikan nilai
$kali = function($a, $b) {
    return $a * $b;
};
$result = $kali(4, 5);
echo $result . "\n";