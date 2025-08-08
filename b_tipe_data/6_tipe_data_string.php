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


/* 5. Fungsi-Fungsi Penting
- strlen($str)                      : Menghitung panjang string
- str_word_count($str)              : Menghitung jumlah kata (dipisah oleh spasi)
- strtoupper($str)                  : Ubah ke upperCase
- strtolower($str)                  : Ubah ke lowerCase
- ucfirst($str)                     : Huruf pertama jadi kapital
- substr($str, start, length)       : Mengambil potongan string
- str_replace($cari, $ganti, $str)  : Menganti teks
- str_contains($str, kalimat)       : Apakah kalimat berada di string
- str_starts_with($str, kalimat)    : apakah kalimat berada di awal string
- str_ends_with($str, kalimat)      : Apakah kalimat berada di akhir string
*/

$teks3 = "halo123 yahaha";
echo strlen($teks3). " ". str_word_count($teks3). "\n";

$teks4 = "Latihan Javascript";
echo str_replace("Latihan", "Belajar", $teks4). "\n";
echo str_replace("Javascript", "PHP", $teks4). "\n";