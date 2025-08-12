<?php
// 1. file_get_contents()
// + Mudah digunakan
// + Membaca seluruh isi file, cocok utk file kecil/menengah
// - Tidak efisien utk file besar karena dibaca langsung semua ke memori

$isi1 = file_get_contents("text.txt");

if ($isi1 === false) {
    echo "Gagal membaca file!" . PHP_EOL;
    exit;
} else {
    echo "Isi file: " . PHP_EOL;
    echo $isi1;
}