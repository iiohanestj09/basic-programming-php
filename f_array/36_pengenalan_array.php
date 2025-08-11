<?php
/* Array adalah struktur data di PHP yang digunakan untuk menyimpan banyak nilai dalam satu variabel
- Nilai bisa berupa tipe data apapun, bahkan array lagi juga bisa
- Setiap elemen array memiliki key (index) yg digunakan utk mengaksesn nilainya
*/ 

// 1. Membuat Array
$angka1 = [1, 2, 3];        // Menggunakan kurung siku

$angka2 = array(1, 2, 3);   // Menggunakan fungsi array()
// echo $angka1;      Error, Array to string conversion, PHP tidak otomatis mengubah array jadi string karena Array adalah struktur data kompleks
print_r($angka1);
print_r($angka2);


// 2. Jenis-jenis Array
  // A. Indexed Array -> menggunakan key berupa index numerik (dimulai dari 0)
$buah = ["Apel", "Jeruk", "Mangga"];
print_r($buah);
echo $buah[0] . PHP_EOL;

  // B. Associative Array
  // MAP di PHP disebut Associative Array. Menggunakan key berbentuk string atau int. Jika dipaksa menggunakan tipe data lain (bool,float, dll PHP akan type_juggling ke int/string)
$harga = [
    'Apel' => 5000,
    'Jeruk' => 7000,
    'Mangga' => 10000
];
print_r($harga);
echo $harga['Jeruk'] . PHP_EOL;

  // C. Multidimensional Array -> Nested Array
$mahasiswa = [
    ['Nama' => 'Budi', 'Umur' => 20],
    ['Nama' => 'Siti', 'Umur' => 22]
];
print_r($mahasiswa);
echo $mahasiswa[0]['Nama'] . PHP_EOL;


