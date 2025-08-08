<?php
// Di PHP, Variabel selalu diawali dengan tanda '$' diikuti nama var.
/* Berikut aturan penamaan variabel di PHP
- Harus diawali huruf atau garis bawah, tidak boleh angka
- Tidak boleh spasi
- Bersifat case sensitive
*/ 
// Di PHP, var tidak perlu deklrasi tipe data (loosely typed), tapi di PHP 7+ bisa menggunakan type declaration utk parameter atau return value di fungsi

$nama = 'Putra';
$umur = 20;
$tinggi = 170.2;

// .  -> Menggabungkan String
// ,  -> Memisahkan Argumen
echo $nama . "\n";
echo $umur . "\n";
echo $tinggi . "\n";
echo "halo ", $nama , "\n";