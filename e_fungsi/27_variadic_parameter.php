<?php
function penjumlahan(...$nums) {
    return array_sum($nums);        // Array akan dijelaskan nanti
}
echo penjumlahan(1, 2, 3, 4, 5). "\n";


// Variadic juga bisa digabungkan dengan Parameter biasa dengan syarat Variadic di akhir
function buatKalimat($awal, ...$kata) {
    return $awal . " " . implode(" ", $kata) . "\n";
}
echo buatKalimat("Halo", "Yohanes", "Putra", "Dae");