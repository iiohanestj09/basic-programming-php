<?php
// Null Colaescing (??) adalah operator yg digunakan untuk memeriksa apakah sebuah variabel bernilai null atau tidak
// Jika Tidak Null, maka nilai variabel dikembalikan
// Jika Null / bellum didefinisikan, maka nilai default yg ditentukan akan digunakan

// $hasil = $variabel ?? $nilai_default

$nama = "Putra";
$jenisKel;
$pekerjaan = null;

$hasil1 = $nama ?? "Guest";
$hasil2 = $umur ?? "Tidak ada";
$hasil3 = $jenisKel ?? "Anonim";
$hasil4 = $pekerjaan ?? "Nganggur";

echo $hasil1 . "\n" . $hasil2 . "\n" . $hasil3 . "\n" . $hasil4 . "\n";