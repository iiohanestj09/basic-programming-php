<?php
// 2. fopen()
// + Membuka file sebagai resource (pointer) sehingga bisa membaca sedikit demi sedikit
// + Bisa membaca file besar secara bertahap
// + Kontrol penuh (mode baca, tulis, append, dll)
// - Lebih verbose (panjang/detail/bertele-tele)

$isi2 = fopen("text.txt", "r");

if ($isi2 === false) {
    echo "Gagal membuka file!" . PHP_EOL;
    exit;
} else{
    while (($baris = fgets($isi2)) !== false) {
        echo $baris;
    }

    fclose($isi2);
}