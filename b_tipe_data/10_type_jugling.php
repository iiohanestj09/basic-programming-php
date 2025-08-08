<?php
// Type Juggling adalah proses di mana php secara otomatis mengubah tipe data suatu nilai ketika dibutuhkan, tanpa harus konversi manual.
// PHP termasuk bahasayang weakly typed, sehingga fleksibel dalam menangani tipe data. Tetap juga bisa memunculkan bug kecil jika tidak hati-hati

// String ke Integer
$a = "10";
echo $a + 5 . "\n";     // PHP mengubah "10" -> 10


// Boolean ke Integer
$b = true;
echo $b + 2 . "\n";     // PHP mengubah true -> 1


// Integer ke String
$c = 123;
echo "Angka: ". $c . "\n";  // PHP mengubah 123 -> "123"


// Float ke Integer
$d = 12.9;
echo $d + 2 . "\n";         // PHP mengubah 2 -> 2.0