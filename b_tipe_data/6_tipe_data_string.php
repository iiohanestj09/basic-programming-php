<?php
// String adalah tipe data yang berisi teks yang diapit oleh tanda '' ataupun ""

// 1. Membuat String
$teks1 = 'Halo Dunia!';
$teks2 = "Halo Dunia!!";
echo $teks1. "\n";
echo $teks2. "\n";


// 2. Karakter Escape
echo "Halo\thah\n";
echo "Dia berkata: \"Hahaha\"\n";
echo "D:VS CODE\\6_PHP\\a_awal\\\n";


// 3. Menggabungkan string menggunakan operator titik (.)
$nama = "Putra";
$namaLengkap = "Yohanes". $nama. " Dae";
echo $namaLengkap. "\n";


// 4. String Multi-Baris
$pesan = <<<TEXT
haloo, nama saya $nama.             holaa
Saya sedang belajar PHP Dasar.\n
TEXT;

echo $pesan;