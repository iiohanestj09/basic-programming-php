<?php
/* Manipulasi Jenis Indexed Array
1. Menambah elemen
2. Menghapus elemen
3. Mengubah Nilai elemen
4. Menggabungkan Array
5. Memotong Array
6. Replace Sebagian
7. Reverse
8. Sorting
9. Searching
10. Counting
*/

$buah = ["Apel", true, 45, 33.3];

//! 1. Menambah Elemen
  // A. Dengan []
$buah[] = "Mangga";     // "Mangga" akan ditambahkan index paling belakang

  // B. Dengan array_push()  --> Selebihnya akan dijelaskan di materi 39_fungsi_builtin_array
array_push($buah, false, "Pisang");
print_r($buah);


//! 2. Menghapus Elemen
unset($buah[3]);
print_r($buah);
//? NOTES: Index tidak otomatis berurutan kembali. Saat array berisi index 0 1 2 3 4, lalu unset index 3, maka 0 1 2 4

// Gunakan array_values() untuk mereset index
$buah = array_values($buah);
print_r($buah);


//! 3. Mengubah Nilai Elemen
$buah[0] = 6.63333;


//! 4. Menggabungkan Array
$a = [1, 2];
$b = [9, 1, 7];
$c = ["Ayam", "Babi", "Tikus"];
$d = array_merge($a, $b);
$e = array_merge($a, $c);
print_r($d);
print_r($e);


//! 5. Memotong Array  -> array_slice()
$data1 = ['a', 'b', 3, true, null, 'f', 'g'];
$potong = array_slice($data1, 1, 4);     // array_slice($array, start, jumlah elemen ke kanan)
print_r($potong);


//! 6. Menghapus dan Mengganti  -> array_splice() {Mengubah Array Asli}
$data2 = ['Apel', 'Jeruk', 'Mangga', 'Pisang'];
array_splice($data2, 2, 1, ["Anggur", "Apalah"]);  // array_splice($array, start, jumlah elemen ke kanan yg dihapus, [elemen baru]);
// Jika jumlah elemen ke kanan yg dihapus lebih kecil dari jumlah elemen yhg ditambah, maka yg ditambahkan akan diselipkan dari index tersebut
print_r($data2);

//? Menghaous elemen berdasar index tanpa perlu reset index
array_splice($data2, 1, 1);
print_r($data2);


//! 7. Membalik Urutan Array
$coba = [1, 2, 3, 4, 5];
print_r(array_reverse($coba));      // 5 4 3 2 1


//! 8. Mengurutkan Array
sort($coba);    // Ascending (Kecil -> Besar)   1 2 3 4 5
asort($coba);   // Descending (Besar -> kecil)  5 4 3 2 1


//! 9. Mencari elemen
if (in_array(3, $coba)) echo "Ada angka 3\n";


//! 10. Menghitung jumlah elemen
echo count($coba) . PHP_EOL;