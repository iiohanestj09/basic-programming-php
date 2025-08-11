<?php
// Array Filtering -> Digunakan utk Menyaring Elemen Array berdasarkan kondisi tertentu
$numbers = [1, 2, 3, 4, 5, 6, 7];

$even = array_filter($numbers, fn($num) => $num % 2 === 0);  // Filter angka genap
$even = array_values($even);    // Indexnya tidak direset manual setelah filter
print_r($even);


// Array Mapping -> Digunakan untuk Memproses Setiap Elemen Array baru dengan hasil modifikasi
$doubled = array_map(fn($num) => $num * 2, $numbers);   // Kalikan semua elemen dgn 2
print_r($doubled);


// KOMBINASI Filtering & Mapping + reset index setelahnya
$result = array_values(array_map(fn($num) => $num * 10,     // 2. Mapping, Modifikasi hasil Filtering  
    array_filter($numbers, fn($num) => $num % 2 === 0)      // 1. Filtering, Mengambil sesuai kondisi
));
print_r($result);