<?php
// include dan require adalah cara utk memasukkan file PHP ke dalam file PHP lain.

// include: Jika file tdk ditemukan, PHP akan menampilkan warning & tetap melanjutkan eksekusi
// require: Jika file tdk ditemukan, PHP akan menampilkan fatal error dan menghentikan eksekusi 

require 'math.php';
require 'greeting.php';

echo tambah(5, 3) . PHP_EOL;
sayHello("Budi");