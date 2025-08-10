<?php
// Jika sebuah VARIABEL BERISI STRING yang namaNYA == NAMA FUNGSI YANG ADA,
// Maka kita bisa memanggil fungsi itu lewat VARIABEL TERSEBUT.

function sapa() {
    echo "Haloo ini dari fungsi 'sapa'\n";
}
$namaVar1 = "sapa";     // var berisi string yg namanya sama dengan fungsi yg ada
$namaVar1();


function salam($nama) {
    echo "Haloo " . $nama . "\n";
}
$namaVar2 = "salam";
$namaVar2("Putra");         // Menggunakan parameter


function penjumlahan($a, $b) {
    return $a + $b;
}
$namaVar3 = "penjumlahan";
echo $namaVar3(1, 9) . "\n";