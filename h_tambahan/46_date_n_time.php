<?php
// 1. date()
  // Menampilkan tanggal saat ini
echo date("Y-m-d") . PHP_EOL;

  // Menampilkan waktu saat ini
echo date("H:i:s") . PHP_EOL;

  // Format lengkap
echo date("l, d F Y H:i:s") . PHP_EOL;

/* FORMAT UMUM:
Y : Tahun 4 digit penuh 
y : Tahun 2 digit belakang
m : Bulan (01 - 12)
d : Hari (01 - 31)
l : Nama hari penuh
H : Jam (00 - 23)
h : Jam (01 - 12)
i : Menit (00 - 59)
s : Detik (00 - 59)
*/


// 2. strtotime()   -> Umumnya digunakan utk menghitung tanggal dgn format date()
  // Mengubah string ke timestamp
$timestamp = strtotime("2025-12-25");
echo $timestamp . PHP_EOL;

  // Menambahkan waktu
echo date("Y-m-d", strtotime("+7 days")) . PHP_EOL;
echo date("Y-m-d", strtotime("-1 month")) . PHP_EOL;

  // Parsing format natural
echo date("Y-m-d", strtotime("next Monday")) . PHP_EOL;
echo date("Y-m-d", strtotime("last Friday")) . PHP_EOL;