<?php
// 1. Menggabungkan String (Concatenation)
$namaDepan = "Putra";
$namaBelakang = "Dae";
$nama = $namaDepan . " " . $namaBelakang;
echo $nama . PHP_EOL;


// 2. Mengakses Karakter di String
echo $nama[0] . " " . $nama[6] . PHP_EOL;


// 3. Upper dan Lower Case
echo strtoupper($nama) . " || " . strtolower($nama) . PHP_EOL;


// 4. Menghapus Spasi Berlebih
$teks = "   Halo Dunia      ";
echo trim($teks) . PHP_EOL;     // Hapus spasi Kiri dan Kanan
echo ltrim($teks) . PHP_EOL;    // Hapus spasi di Kiri
echo rtrim($teks) . PHP_EOL;    // Hapus spasi di Kanan


// 5. Mengambil sebagian String (Substring)
echo substr($nama, 0, 7) . PHP_EOL;


// 6. Mengganti teks dalam String
echo str_replace("Putra", "Budi", $nama) . PHP_EOL;


// 7. Mencari Teks/Karakter di String
echo strpos($nama, "Dae"). PHP_EOL;     // Mengembalikkan Indeks Karakter depan 'D' dari "Dae"


// 8. Memecah $ Menggabungkan String
  // Memecah string jadi array
$kalimat = "apel,jeruk,pisang"; 
$buah = explode(",", $kalimat);
print_r($buah);

  // Menggabungkan array jadi string
$gabung = implode(" | ", $buah);
print_r($gabung);


// 9. Mengulang String
echo str_repeat("Hi", 4) . PHP_EOL;


// 10. Membalik String
echo strrev($nama) . PHP_EOL;


/* Lainnya
- strlen($str)                      : Menghitung panjang string
- str_word_count($str)              : Menghitung jumlah kata (dipisah oleh spasi)
- ucfirst($str)                     : Huruf pertama jadi kapital
- str_contains($str, kalimat)       : Apakah kalimat berada di string
- str_starts_with($str, kalimat)    : apakah kalimat berada di awal string
- str_ends_with($str, kalimat)      : Apakah kalimat berada di akhir string
*/

// Perbedaan streln() dan str_word_count()
$teks3 = "halo123 yahaha";
echo strlen($teks3). " ". str_word_count($teks3). "\n";